<?php
session_start();
include "config.php";

$id = addslashes($_POST['id']);

$sql = "DELETE FROM datas WHERE id='".$id."'";

$result = mysqli_query($conn, $sql);

?>