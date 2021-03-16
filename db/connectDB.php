<?php

    $db_servername = "localhost";
    $db_username = "ffr";
    $db_password = "123456";
    $db_name = "login-reg";

    // Create connection
    $conn = mysqli_connect($db_servername, $db_username, $db_password, $db_name);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        exit();   
    }

?>