<?php
	
	session_start();

	function usuarioEstaLogado(){
		return isset($_SESSION['usuario_logado']);
	}

	// Verifica se o usuario está logado
	function verificaUsuario(){
	   if(!usuarioEstaLogado()){
	   	$_SESSION['danger'] = "Você não tem acesso a essa funcionalidade.";
	  	header('Location: index.php');
	  	die();
	  }

	}

	// Retorna o usuario logado na sessão
	function usuarioLogado(){
		return $_SESSION['usuario_logado'];
	}

	// Função para criar um cookie com dados do usuario
	function logaUsuario($email){
		$_SESSION["usuario_logado"] = $email;
	}

	function logout(){
		session_destroy();
		session_start();
	}
