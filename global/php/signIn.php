<?php 
    #    receive data of the form    #
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    #    verifying the data in the db    #
    $checkAccount = connect();
    $checkAccount = $checkAccount->query("SELECT * FROM users WHERE email='$email' AND pass='$pass'");
    if($checkAccount->rowCount() == 1){
        $checkAccount = $checkAccount->fetch();
        $_SESSION['id'] = $checkAccount['userId'];
        $_SESSION['name'] = $checkAccount['names'];
        $_SESSION['lastName'] = $checkAccount['lastName'];
        $_SESSION['userName'] = $checkAccount['userName'];
        $_SESSION['email'] = $checkAccount['email'];
        $_SESSION['balance'] = $checkAccount['balance'];
        if(headers_sent()){
            echo '<script>
               location.assign("index.php?page=users/home");
            </script>';
        }else{
            header("Location: index.php?page=users/home");
        }
    }else{
        echo '<div class="alert alert-light d-flex align-items-center" role="alert">
                  <div class="text-center">
                    ERROR, the email o the password are incorrect.
                  </div>
               </div>';
    }
    $checkAccount = null;
?>
