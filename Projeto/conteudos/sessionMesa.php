<?php 

	if(!isset($_SESSION)) session_start();
	if(!isset($_SESSION['tipo'])){
		echo "<meta http-equiv='refresh' content='0; url=login.php?error=2'>";
		die();
	}else{
		 if($_SESSION['tipo'] == 0){ //admin
		 	echo "<meta http-equiv='refresh' content='0; url=administrador.php'>";
		}else if($_SESSION['tipo'] == 2){ //usuario
		 	echo "<meta http-equiv='refresh' content='0; url=cliente.php'>";
		}
	}
?>