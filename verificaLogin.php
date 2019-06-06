<?php
	session_start();
	/* Arquivo login.php salvo na pasta
		/arearestrita
	*/	
	
	$usuario = $_POST["usuario"];
	$senha = $_POST["senha"];
	//definir usuario e senha
	require_once 'classes\DB.php';
	$sql = "Select * from alunos where email = '$usuario' AND 
	senha ='$senha'";

	if(!$resultado = $conexao->query($sql)) {
		trigger_error('Erro na SQL: ' . $sql    . ' Erro: ' .
		$conexao->error, E_USER_ERROR);
	} 
	else {
		while($linha = $resultado->fetch_assoc()) { 
		//guarda na variavel linha (um array) o resultado de cada 
		// linha vinda do banco de dados
			$user = $linha["email"];
			$senhaCerta = $linha["senha"];
		}
	}
	if (($usuario == $user) && 
	($senha==$senhaCerta)){
		
		$_SESSION["login"]=$user; 
		$_SESSION["nome"]=$nomeAluno;
		header("location:areaRestrita.php");
	}
	else { 
		header("location:login.php?err=1"); 
	}
	