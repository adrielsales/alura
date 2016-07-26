<?php
function listaCategorias($conexao)
{
	$categorias = array();
	$resultado = mysqli_query($conexao, "select * from categorias");
	while ($categoria = mysqli_fetch_object($resultado)) {
		array_push($categorias, $categoria);
	}
	return $categorias;
}

// function insereProduto($conexao, $nome, $preco, $descricao){
// 	$query = "insert into produtos (nome, preco, descricao) values ('{$nome}',{$preco},'{$descricao}')";
// 	return mysqli_query($conexao, $query);
// }

// function removeProduto($conexao, $id){
// 	$query = "delete from produtos where id = {$id}";
// 	return mysqli_query($conexao, $query);
// }