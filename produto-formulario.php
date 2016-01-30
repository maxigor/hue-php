<?php include("header.php")?>

	 	<h1>Formulário de produto</h1>
			<form action="adiciona-produto.php">
				<label for="nome">Nome</label>
				<input type="text" name="nome"> <br />

				<label for="preco">Preço</label>
				<input type="number" name="preco"><br />
				<input type="submit" value="Cadastrar">
			</form> <!-- fim do form -->

<?php include("footer.php")?>
