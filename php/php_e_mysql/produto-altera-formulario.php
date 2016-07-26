<?php 
include("cabecalho.php"); 
include("conecta.php");
include("banco-categoria.php");
include("banco-produto.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao,$id);
$usado = $produto->usado ? "checked='checked'" : "";

$categorias = listaCategorias($conexao);
?>

			<h1>Alterar Produto</h1>

			<form action="alterar-produto.php" method="post">
			<table class="table text-left">
				<input type="hidden" name="id" value="<?=$produto->id?>">
				<tr>
					<td>Nome:</td>
					<td><input class="form-control" type="text" name="nome" value="<?=$produto->nome?>"> <br /></td>
				</tr>
				<tr>
					<td>Preco:</td>
					<td><input class="form-control" type="number" name="preco" value="<?=$produto->preco?>"><br /></td>
				</tr>
		        <tr>
		            <td>Descrição</td>
		            <td><textarea name="descricao" class="form-control"><?=$produto->descricao?></textarea></td>
		        </tr>		        
		        <tr>
		            <td></td>
		            <td><input type="checkbox" name="usado" <?=$usado?> value="true"/>Usado</td>
		        </tr>
		        <tr>
		        	<td>Categoria</td>
		        	<td>
		        		<select name="categoria_id" class="form-control">
			        		<?php foreach($categorias as $categoria): 
			        			$essaEhACategoria = $produto->categoria_id == $categoria->id;
			        			$selecao = $essaEhACategoria ? "selected='selected'" : "";
			        		?>
			        			<option value="<?=$categoria->id?>" <?=$selecao?> >
			        				<?=$categoria->nome?>
			        			</option>
			        		<?php endforeach ?>
		        		</select>
		        	</td>
		        </tr>				
				<tr>
					<td><input class="btn btn-primary" type="submit" value="Alterar"></td>
				</tr>
			</table>
				
			</form>
<?php include("rodape.php") ?>