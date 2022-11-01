<?php
include "config/configDB.php";

if (isset($_POST['form_submit'])){
    $mail = "";
    $pass = "";

    if (!empty($con)){
        $mail = mysqli_real_escape_string($con, $_POST['txt_mail']);
        $pass = mysqli_real_escape_string($con, $_POST['txt_pass']);
    }

    if ($mail != '' && $pass != ''){
        $sql_query = "SELECT * FROM user WHERE mail = '$mail' AND pass = '$pass'";
        $result = mysqli_query($con, $sql_query);
        $row = mysqli_fetch_array($result);
        $count = mysqli_num_rows($result);


        if ($count > 0){
            $_SESSION['name'] = $row['name'];
            $_SESSION['mail'] = $mail;
            header('Location: loggedinpage.php');
        }else{
            echo "<div class=\"m-4 alert alert-danger\" role=\"alert\">password or email are not correct</div>";
        }
    }
}
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Login Page with PHP and MYSQL</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>
<body class="login-body">
<div class="container-form row">
    <form action="" method="post">
        <div class="login_div">
            <h1 class="title">Login Page with PHP and MYSQL</h1>
            <div class="mb-3">
                <label for="txt_mail" class="form_label">email</label>
                <input type="email" class="form-control" id="txt_mail" name="txt_mail" placeholder="your Email" />
            </div>
            <div class="mb-3">
                <label for="txt_pass" class="form_label">password</label>
                <input type="password" class="form-control" id="txt_pass" name="txt_pass" placeholder="your password" />
            </div>
            <div class="mb-3">
                <button class="btn btn-secondary" type="submit" value="submit" name="form_submit">logged in</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
