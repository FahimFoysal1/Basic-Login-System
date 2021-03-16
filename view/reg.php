<?php
    session_start();
    
    if(isset($_SESSION['is_logged']) && $_SESSION["is_logged"]){

        header("Location: index.php");
        exit();

    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>registration form</title>
    <link rel="stylesheet" href="css/reg_style.css">
</head>

<body>

    <?php
        include 'nav.php';
    ?>

    <div class="regform">
        <h1>Registration Form</h1>
    </div>
    <div class="main">
        <form action="reg_core.php" method="POST" autocomplete="off">
            <div id="name">
                <h2 class="name">Name</h2>
                <input class="firstname" type="text" name="first_name" required><br>
                <label class="firstlabel">firstname</label>
                <input class="lastname" type="text" name="lastname">
                <label class="lastlabel">lastname</label>
            </div>
            <h2 class="name">Phone</h2>
            <input class="phone" type="text" name="phone">
            <h2 class="name">Email</h2>
            <input class="email" type="email" name="email" required>
            <h2 class="name">Password</h2>
            <input class="password" type="password" name="password" required>
            <button type="submit">Register</button>
        </form>

        <button>
            <a href="login.php">
                Already Have an Account? Login Now
            </a>
        </button>
        </center>
    </div>
</body>

</html>