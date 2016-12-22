<?php
	// Página que remove produtos do banco de dados
	require_once("banco-produto.php");
	require_once("logica-usuario.php");

	verificaUsuario();

	$id = $_POST["id"];
	removeProduto($conexao,$id);

	$_SESSION['success'] = "Produto removido com sucesso.";
	
	header("Location: lista-produto.php");
	die();
?>