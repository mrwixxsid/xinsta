<?php
session_start();
#================[ LOGOUT ]================#
if ($_GET['log'] == "out") {
	session_destroy();
	header("Location: index.php");
}
#==============[ END LOGOUT ]==============#

?>