<?php
    #    starting the session    #
    require("php/sessionStart.php");
?>
    <?php
        #    if there is no address    #
        if(!isset($_GET['page']) || $_GET['page']==""){
            $_GET['page']="index";
        }
        #    if the user is logged in    #
        if(isset($_SESSION['email'])){
           if(is_file("pages/".$_GET['page'].".php")){
                include("template/userHeader.php");
                include("pages/".$_GET['page'].".php");
            } 
        }else{
            if(is_file("pages/".$_GET['page'].".php")){
                include("template/header.php");
                include("pages/".$_GET['page'].".php");
            } 
        }
    ?>
    <?php
        include("template/footer.php");
    ?>
     <script src="javascript/home.js"></script>
</body>
</html>
