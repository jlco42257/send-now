<?php
  $newUserName = $_POST['newUserName'];
  $newEmail = $_POST['newEmail'];
  $newPhone = $_POST['newPhone'];
  $newPass = $_POST['newPass'];
  $confirmNewPass = $_POST['confirmNewPass'];
  
  $formData = [$newUserName, $newEmail, $newPhone, $newPass];
  $userData = [$_SESSION['userName'], $_SESSION['email'], $_SESSION['phone'], $_SESSION['pass']];
  
  function update_data($var, $data){
    if($var != $data && $var != ""){
      return true;
    }else{
      return false;
    }  
  }
  $i = 4;
  $m = 0;
  $h = 0;
  $change = 0;
  while ($i > 0){
    if(update_data($formData[$m], $userData[$h])){
      $change++;
    }
    $i--;
    $m++;
    $h++;
  }
  if($change > 0 || ($newPass == $confirmNewPass && $newPass != "")){
    echo "han habido cambios";
    $verify = connect();
    $verify = $verify->query("SELECT email FROM emails WHERE email ='$newEmail'");
    if($verify->rowCount() > 0){
      echo '<div class="alert alert-light d-flex align-items-center" role="alert">
                <div class="text-center">
                  ERROR, the email is already taken.
                </div>
             </div>';
      exit();
    }
    $verify = connect();
    $verify = $verify->query("SELECT phone FROM phones WHERE phone ='$newPhone'");
    if($verify->rowCount() > 0){
      echo '<div class="alert alert-light d-flex align-items-center" role="alert">
                <div class="text-center">
                  ERROR, the phone is already taken.
                </div>
             </div>';
      exit();
    }
    $update = connect();
    if($newUserName != ""){
      $update = $update->query("UPDATE users SET userName = '$newUserName' WHERE id =".$_SESSION['id']);
      echo "todo joya";
      $_SESSION['userName'] = $newUserName;
    }elseif($newEmail != ""){
      $update = $update->query("UPDATE users SET email = '$newEmail' WHERE user_id =".$_SESSION['id']);
      echo "todo joya";
      $_SESSION['email'] = $newEmail;
    }elseif($newPhone != ""){
      $update = $update->query("UPDATE users SET phone = '$newPhone' WHERE user_id =".$_SESSION['id']);
      echo "todo joya";
      $_SESSION['phone'] = $newPhone;
    }elseif($newPass != ""){
      $update = $update->query("UPDATE users SET pass = '$newPass' WHERE id =".$_SESSION['id']);
      echo "todo joya";
      $_SESSION['pass'] = $newPass;
    }else{
      echo "Error.";
    }
    if(headers_sent()){
      echo '<script>
            location.assign("?user=client");
          </script>';
    }else{
      header("Location: ?user=client");
    }
    $update = null;
  }else{
    echo "no han habido cambios";
    if($newPass != $confirmNewPass){
      echo "las contraseñas no coinciden";
    }
  }
?>