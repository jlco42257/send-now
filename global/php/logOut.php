<?php
    #    closing the session    #
    include("sessionStart.php");
    session_destroy();
    #    redirect to index    #
    if(headers_sent()){
        echo '<script>
                location.assign("../../");
            </script>';
    }else{
        header("Location: ../../");
    }  
?>
