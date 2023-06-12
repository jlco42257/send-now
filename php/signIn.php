<?php
    include("main.php");
    include("sessionStart.php");
    
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    $checkAccount = connect();
    $checkAccount = $checkAccount->query("SELECT * FROM users WHERE email='$email' AND pass='$pass'");
    if($checkAccount->rowCount() == 1){
        $checkAccount = $checkAccount->fetch();
        $_SESSION['id'] = $checkAccount['id'];
        $_SESSION['name'] = $checkAccount['names'];
        $_SESSION['lastName'] = $checkAccount['lastName'];
        $_SESSION['userName'] = $checkAccount['userName'];
        if(headers_sent()){
            echo '<script>
                open("http://192.168.20.22:8080/envia-ya/userPages/home.php");
            </script>';
        }else{
            header("Location: http://192.168.20.22:8080/envia-ya/userPages/home.php");
        }  
    }else{
        echo '<div class="alert alert-light d-flex align-items-center" role="alert">
                  <div class="text-center">
                    ERROR, the email o the password are incorrect.
                  </div>
               </div>';
    }
?>
