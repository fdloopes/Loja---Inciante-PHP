<?php 
 	require_once("banco-usuario.php");
 	require_once("logica-usuario.php");

	$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
	if($usuario != NULL){
		logaUsuario($usuario['email']);
		$_SESSION['success'] = "Usuario logado com sucesso.";
		header("Location: index.php");
	}else{
		$_SESSION['danger'] = "Usuario ou senha inválidos.";
		header("Location: index.php");
	}

die();