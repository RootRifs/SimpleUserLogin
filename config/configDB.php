<?php
session_start();
$host = "localhost";
$user = "localroot";
$pass = "57746212";
$db = "test";

$con = mysqli_connect($host, $user, $pass, $db);

if (!$con){
    die("Connection failed: " . mysqli_connect_error());
}
