<?php require_once("header.php");?>
<?php require_once("logica-usuario.php");?>

	<h1>Bem Vindo!</h1>

<?php if(usuarioEstaLogado()){ ?>
	<p class="alert-success">Usuario <?= usuarioLogado()?> logado!</p>
	<a class="btn btn-danger" href="logout.php">Deslogar</a>
<?php }else{ ?>

	<h2>Login</h2>
	<form action="login.php" method="post">
		<table class="table">
			<tr>
				<td>Email:</td> 
				<td><input class="form-control" type="email" name="email" /></td>
			
			</tr>
			<tr>
				<td>Senha:</td> 
				<td><input class="form-control" type="password" name="senha" /></td>

			</tr>
			<tr>
				<td><button class="btn btn-primary" type="submit">Login</button></td>
			</tr>
		</table>
	</form>
<?php } ?>
<?php require_once("footer.php");?>		