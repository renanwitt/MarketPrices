<?php
if(isset($_POST['botao'])){
     
    $db = mysqli_connect("localhost", "root", "", "market");	
     
    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$email = $_POST['email'];
	$tipo_usuario = $_POST['tipoUsuario'];
	$id_endereco = $_POST['idEndereco'];
	
	$sql = "INSERT INTO usuarioJuridico (nome, cnpj, login, senha, email, tipo_usuario, id_endereco) 
	VALUES ('$nome', '$cnpj', '$login', '$senha', '$email', '$tipo_usuario', '$id_endereco')";

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
			<a href="home.php"><img src="img/logo-grande.png" width="300" /></a>
		</div>
		<!-- Fim do logo-cadastro -->
		<div class="formulario-cadastro">
			<form name="Cadastro" action="" method="post">
				<br><br>
				<input type="text" name="nome" placeholder="Nome"/><br>
				<input type="text" name="cnpj" placeholder="CNPJ"/><br>
				<input type="text" name="login" placeholder="Login (será seu usuário)"/><br>
				<input type="password" name="senha" placeholder="Senha"/><br>
				<input type="email" name="email" placeholder="E-mail"/><br>
				<input type="text" name="tipoUsuario" placeholder="T.U"/><br>
				<input type="text" name="idEndereco" placeholder="Endereco"/><br>
				<input type="submit" name="botao" value="Cadastrar-se"/><br><br>
				<a href="login.php">Já sou cadastrado</a>
			</form>
		</div>
	</body>
</html>