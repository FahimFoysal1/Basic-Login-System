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
    }

?>