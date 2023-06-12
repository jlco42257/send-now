<?php
    $dbuser = "root";
    $dbpass = "";
    $dbhost = "192.168.20.22";
    $dbname = "sendNow";
    
    function connect(){
        $pdo = new PDO('mysql:host=192.168.20.22;dbname=sendNow','root','');
        return $pdo;
    }
?>
