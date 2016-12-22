<?php 
	require_once("header.php");
    require_once("banco-produto.php");
    require_once("logica-usuario.php");

    verificaUsuario();

    $produtos = listaProdutos($conexao);   
?>

	<table class="table table-striped table-bordered alinha">
	<tr>
		<td><h3>Nome</h3></td>
		<td><h3>Preço</h3></td>
		<td><h3>Descrição</h3></td>
		<td><h3>Categoria</h3></td>
		<td><h3>Alterar</h3></td>
		<td><h3>Remover</h3></td>
	</tr>
	<?php
		foreach ($produtos as $produto) :
	?>
	<tr>
		<td><?= $produto['nome'];?></td>
		<td><?= $produto['preco']?></td>
		<td><?= substr($produto['descricao'],0 , 40) ?></td>
		<td><?= $produto['categoria_nome'];?></td>
		<td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?= $produto['id']?>" >Alterar</a></td>
		<td>
			<form action="remove-produto.php" method="post">
				<button class="btn btn-danger">Remover</button>
				<input type="hidden" name="id" value="<?= $produto['id'] ?>"/>
			</form>
		</td>
	</tr>

<?php
   endforeach
?>
</table>


<?php include("footer.php");?>