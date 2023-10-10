<?php 
  #    receive data of the form    #
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  #    verifying the data in the db    #
  $checkAccount = connect();
  $checkAccount = $checkAccount->query("SELECT * FROM users WHERE pass='$pass'");
    if($checkAccount->rowCount() == 1){
        $checkAccount = $checkAccount->fetch();
        $_SESSION['id'] = $checkAccount['id'];
        $_SESSION['name'] = $checkAccount['name'];
        $_SESSION['lastName'] = $checkAccount['lastName'];
        $_SESSION['userName'] = $checkAccount['userName'];
        
        $phone = connect();
        $phone = $phone->query("SELECT phone FROM phones WHERE user_id=".$checkAccount['id']);
        $phones = []; 
        while($rest = $phone->fetch(PDO::FETCH_ASSOC)){array_push($phones,$rest['phone']);}
        $_SESSION['phone'] = end($phones);
    
        $_SESSION['email'] = $email;
        $_SESSION['country'] = $account['country'];
        $_SESSION['pass'] = $account['pass'];
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
        $_SESSION['id'] = $checkAccount['id'];
        $_SESSION['name'] = $checkAccount['name'];
        $_SESSION['lastName'] = $checkAccount['lastName'];
        $_SESSION['role'] = $checkAccount['role'];        
        $_SESSION['email'] = $checkAccount['email'];
        $_SESSION['phone'] = $checkAccount['phone'];
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