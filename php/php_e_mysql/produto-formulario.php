<?php 
include("cabecalho.php"); 
include("conecta.php");
include("banco-categoria.php");

$categorias = listaCategorias($conexao);
?>

			<h1>Formulário de Produto</h1>

			<form action="adiciona-produto.php" method="post">
			<table class="table text-left">
				<tr>
					<td>Nome:</td>
					<td><input class="form-control" type="text" name="nome"> <br /></td>
				</tr>
				<tr>
					<td>Preco:</td>
					<td><input class="form-control" type="number" name="preco"><br /></td>
				</tr>
		        <tr>
		            <td>Descrição</td>
		            <td><textarea name="descricao" class="form-control"></textarea></td>
		        </tr>		        
		        <tr>
		            <td></td>
		            <td><input type="checkbox" name="usado" value="true"/>Usado</td>
		        </tr>
		        <tr>
		        	<td>Categoria</td>
		        	<td>
		        		<select name="categoria_id" class="form-control">
			        		<?php foreach($categorias as $categoria): ?>
			        			<option value="<?=$categoria->id?>"><?=$categoria->nome?></option>
			        		<?php endforeach ?>
		        		</select>
		        	</td>
		        </tr>				
				<tr>
					<td><input class="btn btn-primary" type="submit" value="Cadastar"></td>
				</tr>
			</table>
				
			</form>
<?php include("rodape.php") ?>