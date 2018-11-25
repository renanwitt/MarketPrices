<?php
if(isset($_POST['botao'])){
     
    $db = mysqli_connect("localhost", "root", "", "cliente");	
     
    $razao = $_POST['razao'];
    $fantasia = $_POST['fantasia'];
	$endereco = $_POST['endereco'];
	$numero = $_POST['numero'];
	$complemento = $_POST['complemento'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	$sql = "INSERT INTO usuario (razao, fantasia, endereco, numero, complemento, telefone, email, senha) 
	VALUES ('$razao', '$fantasia', '$endereco', '$numero', '$complemento', '$telefone', '$email', '$senha')";

	mysqli_query($db, $sql);
	
}
?>

<html>
	<head>
		<title>Market Prices | Brazil</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="./css/estilos-cadastro.css"/>
	</head>
	<body>
		<!-- Início do logo-cadastro -->
		<div class="logo-cadastro">
			<img src="img/logo-grande.png" width="400" />
		</div>
		<!-- Fim do logo-cadastro -->
		<div class="formulario-cadastro">
			<form name="Cadastro" action="" method="post">
				<br><br>
				<input type="text" name="razao" placeholder="Razão social"/><br>
				<input type="text" name="fantasia" placeholder="Nome fantasia"/><br>
				<input type="text" name="endereco" placeholder="Endereço"/><br>
				<input type="text" name="numero" placeholder="Número"/><br>
				<input type="text" name="complemento" placeholder="Complemento"/><br>
				<input type="text" name="telefone" placeholder="Telefone"/><br>
				<input type="email" name="email" placeholder="E-mail"/><br>
				<input type="password" name="senha" placeholder="Senha"/><br>
				<input type="submit" name="botao" value="Cadastrar-se"/><br><br>
				<a href="login.php">Já sou cadastrado</a>
			</form>
		</div>
	</body>
</html>