<?php

    $email = $_POST['email'];
    $password = $_POST['password'];

    $hostname = "localhost";
    $username = "root";
    $passwd_mysql = "";

    
    $link = new mysqli($hostname, $username, $passwd_mysql);

    if ($link->conn_error) {

        die ("connection error!");

    }

    echo "\nsuccess!\n\n";
    header("Location: index.php");

?>
