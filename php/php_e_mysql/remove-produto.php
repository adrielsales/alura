<?php 
include("conecta.php");
include("banco-produto.php");
// ini_set('display_errors',1);
// ini_set('display_startup_erros',1);
// error_reporting(E_ALL);

/*
200 - ok
404 - not found
500 - error on server
302 - forward
 */

$id = $_POST['id'];
removeProduto($conexao, $id);
header("Location:produto-lista.php?removido=true");
die();
