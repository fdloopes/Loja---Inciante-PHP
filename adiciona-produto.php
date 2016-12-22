<?php 
	require_once("header.php");
 	require_once("banco-produto.php");
	require_once("logica-usuario.php");

	verificaUsuario();

	// Recebe produtos do formulario passados pelo header
	$nome = $_POST["nome"];
	$preco = $_POST["preco"];
	$descricao = $_POST["descricao"];
	$categoria = $_POST["categoria_id"];
	if(array_key_exists('usado', $_POST)){
		$usado = "true";
	}else{
		$usado = "false";
	}

		// Chama função insere produto e verifica se foi adicionado com sucesso
		if(insereProduto($conexao,$nome,$preco,$descricao,$categoria,$usado)){
		?>		
			<p class="text-success">
				Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!
			</p>
		<?php 
			} else {
		?>
			<p class="text-danger">
				O Produto <?= $nome; ?> não foi adicionado: <?= mysqli_error($conexao);?>
			</p>
		<?php
		}
		?>

<?php require_once("footer.php");?>