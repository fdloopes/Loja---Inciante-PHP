<?php 
	require_once("logica-usuario.php");

	logout();
	$_SESSION['success'] = "Usuario deslogado com sucesso.";
	header('Location: index.php');

	die();

