<?php include("cabecalho.php") ?>
		<?php 
			$preco = $_GET['preco'];
			$nome = $_GET['nome'];
		?>
		<p class="alert-success">Produto <?= $nome ?>, <?= $preco ?> adicionado com sucesso!</p>
<?php include("rodape.php") ?>