<?php
    include("sessionStart.php");
    session_destroy();
    
    if(headers_sent()){
            echo '<script>
                open("http://192.168.20.22:8080/envia-ya/");
            </script>';
        }else{
            header("Location: http://192.168.20.22:8080/envia-ya/");
        }  
?>