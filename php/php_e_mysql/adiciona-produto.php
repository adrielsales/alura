<?php 
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");
// ini_set('display_errors',1);
// ini_set('display_startup_erros',1);
// error_reporting(E_ALL);



$preco = $_POST['preco'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];

if (array_key_exists("usado", $_POST)) {
	$usado = "true";
} else {
	$usado = "false";
}

if (insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)) { ?>
	<p class="text-success">Produto <?= $nome ?>, <?= $preco ?> adicionado com sucesso!</p>
<?php } else { 
	$msn = mysqli_error($conexao);
	?>
	<p class="text-danger">Produto <?= $nome ?>, <?= $preco ?> não foi adicionado: <?= $msn ?></p>
<?php 
}

/*Opcional neste caso.*/
//mysqli_close();

?>

<?php include("rodape.php") ?>