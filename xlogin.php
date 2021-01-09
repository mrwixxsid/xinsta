<?php
session_start();
include "config.php";

$email = addslashes($_POST['email']);
$pass = addslashes($_POST['pass']);

$sql = "SELECT * FROM users WHERE email='".$email."' AND pass='".$pass."'";

$result = mysqli_query($conn, $sql);

$check = mysqli_num_rows($result);

if ($check > 0) {
	$_SESSION['login'] = "true";
	$getData = mysqli_fetch_assoc($result);
	$_SESSION['C_id'] = $getData['id'];
	$_SESSION['C_fn'] = $getData['fn'];
	$_SESSION['C_usr'] = $getData['usr'];
	$_SESSION['C_email'] = $getData['email'];
	$_SESSION['C_pass'] = $getData['pass'];
	echo "Login Success";

}else{
	echo "Login Error";
}

?>