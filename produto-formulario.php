<?php require_once("header.php");
	  require_once("banco-categoria.php");
	  require_once("logica-usuario.php");
	  verificaUsuario();
	  $categorias = listaCategorias($conexao);

	  $produto = array("nome" => "", "descricao" => "", "preco" => "", "categoria_id" => "1");
      $usado = "";
?> 

	<form action="adiciona-produto.php" method="post">
		<table class="table">
			<h1>Formulário de cadastro</h1>
			<?php require_once("produto-formulario-base.php");?>
			<tr>
				<td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
			</tr>
		</table>
	</form>
<?php require_once("footer.php");?>