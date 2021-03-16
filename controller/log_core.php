<?php
    session_start();


    $email = $_POST['email'];
    $password = $_POST['password'];
    $enc_pass = md5($password);

// ----------------------- db

    require 'connectDB.php';

    /****************
     * get from DB
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

        $_SESSION["login_err_message"] = "No User Found";
        
        header("Location: login.php");
        exit();
    }

    mysqli_close($conn);
