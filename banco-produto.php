<?php
	require_once("conecta.php");

	// Função de inserção de produtos
	function insereProduto($conexao,$nome,$preco,$descricao,$categoria, $usado){
	    $nome = mysqli_real_escape_string($conexao,$nome);
	    $preco = mysqli_real_escape_string($conexao,$preco);
	    $descricao = mysqli_real_escape_string($conexao,$descricao);
	    $query = "insert into produtos (nome, preco, descricao, categoria_id, usado) values('{$nome}',{$preco},'{$descricao}',{$categoria},{$usado})";
		return mysqli_query($conexao, $query);
	}

	// Função para listar os produtos do banco
	function listaProdutos($conexao){
 	$produtos = array();
 	$resultado = mysqli_query($conexao,"select p.*, c.nome as categoria_nome from produtos as p join categorias as c on p.categoria_id = c.id order by c.nome");
	while($produto = mysqli_fetch_assoc($resultado)){
		array_push($produtos, $produto);
	}
	return $produtos;
 	}

 	function alteraProduto($conexao,$id,$nome,$preco,$descricao,$categoria,$usado){
 		$query = "update produtos set nome='{$nome}',preco={$preco},descricao='{$descricao}',categoria_id={$categoria},usado={$usado} where id={$id}";
		return mysqli_query($conexao, $query);
 	}

 	function buscaProduto($conexao, $id){
 		$query = "select * from produtos where id={$id}";
 		$resultado = mysqli_query($conexao, $query);
		return mysqli_fetch_assoc($resultado);		
 	}

	// Função de remoção de produtos do banco
 	function removeProduto($conexao, $id){
 		$query = "delete from produtos where id = {$id}";
 		return mysqli_query($conexao,$query);
 	}

