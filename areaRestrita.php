<?php
	/* Arquivo areaRestrita.php salvo na pasta
		/arearestrita
	*/	
	//incluir o arquivo em todas as areas que deseja que so acesse
	//mediante login
	include "validarLogin.php";
	
	$usuarioLogado = $_SESSION['login'];
	$nomeAluno = $_SESSION['nome'];

	
	echo "Olá $usuarioLogado seu nome é $nomeAluno!";
?>