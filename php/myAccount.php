<?php
    include("main.php");
    if(isset($_POST)){
        $newBalance = $_POST['balance'];
        $pass = $_POST['pass'];
        $phone = $_POST['phoneNumber'];
        $checkAccount = connect();
        $checkAccount = $checkAccount->query("SELECT * FROM users WHERE phone='$phone' AND pass='$pass'");
        if($checkAccount->rowCount() == 1){
            $checkAccount = $checkAccount->fetch();
            $balance = $checkAccount['balance'];
            $balance += $newBalance;
            $topUp = connect();
            $topUp = $topUp->query("UPDATE users SET balance='$balance' WHERE phone='$phone'");
            echo '<div class="alert alert-light d-flex align-items-center" role="alert">
                      <div class="text-center">
                        Balance was recharged successfully. =)
                      </div>
                   </div>';
        }else{
            echo '<div class="alert alert-light d-flex align-items-center" role="alert">
                      <div class="text-center">
                        ERROR, the phone or the password are incorrect. =(
                      </div>
                   </div>';
        }
    }
?>
