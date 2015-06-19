<?php 
	if(!isset($_SESSION)) session_start();
	if(!isset($_SESSION['usuario']) || !$_SESSION['usuario']){
		echo "<meta http-equiv='refresh' content='0; url=login.php?error=2'>";
		die();
	}
?>