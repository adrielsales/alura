<?php
function listaProdutos($conexao)
{
	$produtos = array();
	
	$sql = "select p.*,c.nome as categoria_nome
	from produtos as p 
	join categorias as c
	on c.id = p.categoria_id";
	
	$resultado = mysqli_query($conexao, $sql);
	while ($produto = mysqli_fetch_object($resultado)) {
		array_push($produtos, $produto);
	}
	return $produtos;
}

function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)
{
	$query = "insert into produtos (nome, preco, descricao, categoria_id, usado) values ('{$nome}',{$preco},'{$descricao}',{$categoria_id}, {$usado})";
	return mysqli_query($conexao, $query);
}

function removeProduto($conexao, $id)
{
	$query = "delete from produtos where id = {$id}";
	return mysqli_query($conexao, $query);
}

function buscaProduto($conexao, $id)
{
	$sql = "select * from produtos where id = {$id}";
	$resultado = mysqli_query($conexao, $sql);
	return mysqli_fetch_object($resultado);
}

function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado)
{
	$query = "update produtos set nome='{$nome}', preco={$preco}, descricao='{$descricao}', categoria_id={$categoria_id}, usado={$usado} where id = '{$id}'";
	return mysqli_query($conexao, $query);
}