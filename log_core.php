<?php
    session_start();


    $email = $_POST['email'];
    $password = $_POST['password'];
    $enc_pass = md5($password);

// ----------------------- db

    $db_servername = "localhost";
    $db_username = "ffr";
    $db_password = "123456";
    $db_name = "login-reg";

    // Create connection
    $conn = mysqli_connect($db_servername, $db_username, $db_password, $db_name);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        
    }else {

        /****************
         * insert into DB
         ****************/
        $sql = "SELECT * FROM `users` WHERE email = '$email' and password = '$enc_pass' ";

        $result = mysqli_query($conn, $sql);

        // print_r($result);

        if (mysqli_num_rows($result) > 0) {
           
            $user_details = mysqli_fetch_assoc($result);

            $_SESSION["is_logged"] = true;
            
            header("Location: index.php");
            exit();
            
        } else {

            $_SESSION["err_message"] = "No User Found";
            
            header("Location: login.php");
            exit();
        }

        mysqli_close($conn);
    }