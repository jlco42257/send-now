<?php  
    #    receive data of the form    #
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['userName'];
    $phone = $_POST['phone'];
    $phone = intval($phone);
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $confirmPass = $_POST['confirmPass'];
    
    #    validate passwords of the form    #
    if($pass != $confirmPass){
        echo '<div class="alert alert-light d-flex align-items-center" role="alert">
                  <div class="text-center">
                    ERROR, the passwords don`t match.
                  </div>
               </div>';
        exit();
    }
    
    #    verify username in the db    #
    $checkUName = connect();
    $checkUName = $checkUName->query("SELECT * FROM users WHERE userName='$userName'");
    if($checkUName->rowCount() > 0){
        echo '<div class="alert alert-light d-flex align-items-center" role="alert">
                  <div class="text-center">
                    ERROR, the username is already taken.
                  </div>
               </div>';
        exit();
    }
    $checkUName = null;
    
    #    verify phpne in the db    #
    $checkPhone = connect();
    $checkPhone = $checkPhone->query("SELECT * FROM users WHERE phone='$phone'");
    if($checkPhone->rowCount() > 0){
        echo '<div class="alert alert-light d-flex align-items-center" role="alert">
                  <div class="text-center">
                    ERROR, the phone is already taken.
                  </div>
               </div>';
        exit();
    }
    $checkPhone = null;
    
    #    verify email in the db    #
    $checkEmail = connect();
    $checkEmail = $checkEmail->query("SELECT * FROM users WHERE userName='$userName'");
    if($checkEmail->rowCount() > 0){
        echo '<div class="alert alert-light d-flex align-items-center" role="alert">
                  <div class="text-center">
                    ERROR, the email is already taken.
                  </div>
               </div>';
        exit();
    }
    $checkEmail = null;
    
    #    saving data in the db    #
    $save = connect();
    $save = $save->prepare("INSERT INTO users(names,lastName,userName,phone,email,pass) VALUES(:name,:lastName,:userName,:phone,:email,:pass)");
    $markers = [
        ":name"=>$name,
        ":lastName"=>$lastName,
        ":userName"=>$userName,
        ":phone"=>$phone,
        ":email"=>$email,
        ":pass"=>$pass
    ];
    $save->execute($markers);
    
    if($save->rowCount() == 1){
        if(headers_sent()){
            echo '<script>
               location.assign("?user=client");
            </script>';
        }else{
            header("Location: ?user=client");
        }
    }else{
        echo '<div class="alert alert-light d-flex align-items-center" role="alert">
                  <div class="text-center">
                    ERROR, the user wasn`t saved. =(
                  </div>
               </div>';
    }
    $save = null;
?>
