<?php
    
    $name = $_POST['first_name']." ".$_POST['lastname'];
    
    /**
     * @todo set default phone
     */
    $phone = $_POST['phone'];

    $email = $_POST['email'];
    $password = $_POST['password'];
    $enc_pass = md5($password);

// --------------------------------- db --------------------

    require 'connectDB.php';

    /****************
     * insert into DB
     ****************/
    $sql = "INSERT INTO users (name, email, password, phone)
    VALUES ( '$name', '$email', '$enc_pass', '$phone' )";

    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);


        header("Location: login.php");
        exit();


    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        mysqli_close($conn);


        header("Location: reg.php");
        exit();
    }

?>