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
        if(headers_sent()){
            echo '<script>
               location.assign("?user=client");
            </script>';
        }else{
            header("Location: ?user=client");
        }
        exit();
    }
    $checkAccount = connect();
    $checkAccount = $checkAccount->query("SELECT * FROM admins WHERE email='$email' AND pass='$pass'");
    if($checkAccount->rowCount() == 1){
        $checkAccount = $checkAccount->fetch();
        $_SESSION['id'] = $checkAccount['adminId'];
        $_SESSION['name'] = $checkAccount['name'];
        $_SESSION['lastName'] = $checkAccount['lastName'];
        $_SESSION['role'] = $checkAccount['role'];        
        $_SESSION['email'] = $checkAccount['email'];
        if(headers_sent()){
            echo '<script>
               location.assign("?user=admin");
            </script>';
        }else{
            header("Location: ?user=admin");
        }
        exit();
    }else{
        echo '<div class="alert alert-light d-flex align-items-center" role="alert">
                  <div class="text-center">
                    ERROR, the email o the password are incorrect.
                  </div>
               </div>';
    }
    $checkAccount = null;
?>
