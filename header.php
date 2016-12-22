<html>
<head>
	<title>Minha Loja</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/loja.css">
</head>

<body>


<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<a href="index.php" class="navbar-brand">Minha Loja</a>
		</div>
		<div>
			<ul class="nav navbar-nav">
				<li>
					<a href="produto-formulario.php">Adiciona Produto</a>
				</li>
				<li>
					<a href="lista-produto.php">Produtos</a>
				</li>
				<li>
					<a href="contato.php">Contato</a>
				</li>
			</ul>
		</div>

	</div> <!-- Container acaba aqui -->
</div> <!-- Menu de navegação acaba aqui -->

<div class="container">
	<div class="principal">

<?php include("mostra-alerta.php");?>
<?php mostraAlerta('danger');?>
<?php mostraAlerta('success');?>