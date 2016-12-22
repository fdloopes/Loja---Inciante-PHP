<?php require_once("header.php");
	  require_once("banco-categoria.php");
	  require_once("banco-produto.php");

	  $id = $_GET['id'];
	  $categorias = listaCategorias($conexao);
	  $produto = buscaProduto($conexao,$id);
	  $usado = $produto['usado'] ? "checked='checked'" : "";
?> 

	<form action="altera-produto.php" method="post">
		<table class="table">
			<h1>Altera cadastro</h1>
			<input type="hidden" name="id" value="<?= $id ?>"" />
			
			<?php require_once("produto-formulario-base.php");?>
			
			<tr>
				<td><button class="btn btn-primary" type="submit">Alterar</button></td>
			</tr>
		</table>
	</form>
<?php require_once("footer.php");?>