<?php
include "config/configDB.php";

// Check user login or not
if(!isset($_SESSION['mail'])){
    header('Location: index.php');
}
if(!isset($_POST['user_logout'])){
    session_destroy();
    header('Locatiion: index.php');
}

?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <title>You are logged in</title>
</head>
<body class="logged-body p-4">
<h1>Hello <?php echo $_SESSION['name'] ?> you are logged in</h1>
<form action="" method="post">
    <button class="btn btn-primary mt-3" type="submit" value="logout" name="user_logout">logout</button>
</form>
</body>
</html>
