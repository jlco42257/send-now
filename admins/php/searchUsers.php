<?php
    $name = $_POST['search'];
    $search = connect();
    $search = $search->query("SELECT * FROM admins WHERE name='$name'");
    $search = $search->fetch();
    echo $search[4];
?>