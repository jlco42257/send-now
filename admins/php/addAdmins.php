<?php
    #    receive data of the form    #
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['userName'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $phone = intval($phone);
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    #    verify username in the db    #
    $checkUName = connect();
    $checkUName = $checkUName->query("SELECT * FROM admins WHERE userName='$userName'");
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
    $checkPhone = $checkPhone->query("SELECT * FROM admins WHERE phone='$phone'");
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
    $checkEmail = $checkEmail->query("SELECT * FROM admins WHERE email='$email'");
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
    $save = $save->prepare("INSERT INTO admins(name,lastName,userName,pass,country,email,phone) VALUES(:name,:lastName,:userName,:pass,:country,:email,:phone)");
    $markers = [
        ":name"=>$name,
        ":lastName"=>$lastName,
        ":userName"=>$userName,
        ":pass"=>$pass,
        ":country"=>$country,
        ":email"=>$email,
        ":phone"=>$phone
    ];
    $save->execute($markers);
    
    if($save->rowCount() == 1){
      $account = connect();
      $account = $account->query("SELECT * FROM admins WHERE name='$name' AND lastName='$lastName'");
      if($account->rowCount() == 1){
        if(headers_sent()){
              echo '<script>
                 location.assign("?user=admin&page=deleteAdmins");
              </script>';
        }else{
              header("Location: ?user=admin&page=deleteAdmins");
        }
          exit();
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