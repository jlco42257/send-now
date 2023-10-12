<?php
    #    connecting to the db    #
    function connect(){
        $pdo = new PDO('mysql:host=192.168.20.22;dbname=send_now','root','');
        return $pdo;
    }
    #    user type    #
        if(!isset($_GET['user']) || $_GET['user'] == ""){
            $user = "unLoginUsers/";
        }elseif($_GET['user'] == "admin"){
            $user = "admins/";
        }elseif($_GET['user'] == "client"){
            $user = "users/";
        }else{
            $user = "unLoginUsers/";
        }    
        #192.168.20.24
?>



