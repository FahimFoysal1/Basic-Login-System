<?php
    session_start();

    if(isset($_SESSION["is_logged"]) &&  $_SESSION["is_logged"]){

        header("Location: index.php");
        exit();

    }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/log_style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <?php
        include 'nav.php';
    ?>

    <div class="login_form">
        <div class="form_title">
            <h1>Login</h1>
        </div>

        <?php
            if (isset($_SESSION['login_err_message'])) {
                echo "<h4>". $_SESSION['login_err_message']."</h4>";
            }
        ?>

        <form action="log_core.php" method="POST" autocomplete="off">
            <label><input type="text" placeholder="Email" name="email" required></label>
            <label><input type="password" placeholder="Password" name="password" required></label>
            <button class="red" type="submit"><i class="fa fa-lock"></i>Login</button>
        </form>



        <br><br><br>
        <button class="red" type="button">
            <i class="fa fa-unlock-alt"></i>
            <a href="reg.php">
                Create New Account
            </a>
        </button>
    </div>
</body>

</html>