<?php
function listaProdutos($conexao){
	$produtos = array();
	$resultado = mysqli_query($conexao,"select p.*, c.nome as categoria_nome from produtos p join categorias c on (p.categoria_id = c.id)");
	while($produto = mysqli_fetch_assoc($resultado)){	
		array_push($produtos,$produto);
	}
	return $produtos;
}

function alteraProduto($conexao, $id, $produto, $preco, $descricao, $categoria_id, $usado){
	$query = "update produtos set nome = '{$produto}', preco = {$preco}, descricao = '{$descricao}', categoria_id={$categoria_id}, usado={$usado} where id = {$id}";
	echo $query;
	return mysqli_query($conexao, $query);
}

function insereProduto($conexao, $produto, $preco, $descricao, $categoria_id, $usado){
	$query = "insert into produtos (nome, preco, descricao, categoria_id, usado) values ('{$produto}',{$preco},'{$descricao}',{$categoria_id},{$usado})";
	echo $query;
	return mysqli_query($conexao,$query);
}

function buscaProduto($conexao, $id){
	$query = "select * from produtos where id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);

}
function removeProduto($conexao, $id){
	$query = "delete from produtos where id = {$id}";
	return mysqli_query($conexao, $query);
}