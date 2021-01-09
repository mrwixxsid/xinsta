<?php
session_start();
include "config.php";

$fn = addslashes($_POST['fn']);
$usr = addslashes($_POST['usr']);
$email = addslashes($_POST['email']);
$pass = addslashes($_POST['pass']);

$sql = "INSERT INTO users (fn, usr, email, pass) VALUES ('$fn', '$usr', '$email', '$pass')";

$result = mysqli_query($conn, $sql);
?>