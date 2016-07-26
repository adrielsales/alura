<?php 

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");

/*
Quando usamos ==, estamos dizendo ao PHP que, se os tipos que estão sendo comparados são diferentes, ele pode tentar fazer a conversão. A conversão que ele realiza é um casting para o tipo bool. Desta forma, tudo que for retornado será transformado para o tipo bool. Como estamos usando string, a string vazia ou com zero (0) será considerado false e a string com qualquer outra coisa será considerada true.
Quando usamos ===, dizemos ao PHP para nunca converter tipos.
 */

if(array_key_exists("removido", $_GET) && $_GET['removido'] == true): ?>
	<p class="alert-success">Produto removido com sucesso!</p>
<?php 
endif;

$produtos = listaProdutos($conexao);
?>

<table class="table table-striped table-bordered">
	<?php	
		foreach($produtos as $produto):
	?>
	<tr>
		<td class="text-left"><?=$produto->nome ?></td>
		<td class="text-left"><?=$produto->preco ?></td>
		<td class="text-left"><?=substr($produto->descricao, 0, 40)?></td>
		<td class="text-left"><?=$produto->categoria_nome?></td>
		<td class="text-left">
			<a class="btn btn-xs btn-primary" href="produto-altera-formulario.php?id=<?=$produto->id?>">Alterar</a>
		</td>
		<td class="text-left">
			<form action="remove-produto.php" method="post">
				<input type="hidden" name="id" value="<?=$produto->id?>"/>
				<button class="btn btn-xs btn-danger">Remover</button>
			</form>
		</td>
	</tr>

	<?php endforeach ?>

</table>

<?php include("rodape.php") ?>