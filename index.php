<?php
    session_start();

    if(!$_SESSION["is_logged"]){

        header("Location: login.php");
        exit();

    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>

    <H1>My profile page</H1>

</body>

</html>