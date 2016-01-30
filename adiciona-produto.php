<?php include("header.php")?>

		<?php
			$nome = $_GET["nome"];
			$preco = $_GET["preco"];

			$conexao = mysqli_connect('localhost', 'root', '', 'loja');

			$query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";

			mysqli_query($conexao, $query);

			mysqli_close($conexao);

		?>

		<p class="alert-success"> Produto <?php echo $nome; ?> no valor de <?php echo $preco ?> adicionado com sucesso! </p>

<?php include("footer.php")?>