<?php
  #    starting the session    #
  require("global/php/sessionStart.php");
  #    user type    #
  include("global/php/main.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Send Now!</title>
  <!--             BOOTSTRAP CSS             -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!--     css     -->
  <link rel="stylesheet" href="global/styles/header-footer.css">
  <!--     google icons     -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,200" />
  <!-- Icons -->
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
</head>
<!--     header template     -->
<?php
  #    if there is no address    #
  if(!isset($_GET['page']) || $_GET['page']==""){
    $_GET['page']="home";
  }    
  #    if the user is logged in    #
  if(isset($_SESSION['email'])){
    if(is_file($user."pages/".$_GET['page'].".php")){
      include($user."pages/header.php");
      include($user."pages/aside.php");
      include($user."pages/".$_GET['page'].".php");
    } 
  }else{
    if(is_file($user."pages/".$_GET['page'].".php")){
      include("unLoginUsers/pages/header.php");
      include($user."pages/".$_GET['page'].".php");
    } 
  }
?>
<!--     footer     -->
<footer class="p-3 pb-1 fs-5">
  <p>info@sendnow.com</p>
  <p>+1 (800) 123-4567</p>
  <p>1234 Main Street, Sendnow City, Shipment Status</p>
</footer>
<!--   bootstrap js   -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<?php
  echo '<link rel="stylesheet" href="' . $user . 'styles/' . $_GET['page'] . '.css">';
?>
<script src="global/js/home.js"></script>
</body>
</html>