<?php
session_start();
	/* Arquivo validarLogin.php salvo na pasta
		/arearestrita
	*/
if ((!isset($_SESSION["login"])) 
	|| (!isset($_SESSION["senha"]))){
	header("location: formLogin.php?err=5");
}	
	?>