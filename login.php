<?php 
	if(isset($_POST['botao'])){
		
		$user = $_POST['email'];
		$senha = $_POST['senha'];
		
		$conexao = mysqli_connect("localhost", "root", "","cliente");
		if(!$conexao){
			die("ERRO A");
		}
		
		$consulta = mysqli_query("SELECT * FROM usuario WHERE email=='$user' AND senha=='$senha'",$conexao);
		$linhas = mysqli_num_rows($consulta);
		
		echo "$linhas";
		
	}
?>


<html>
	<head>
		<title>Market Prices | Brazil</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="./css/estilos-login.css"/>
	</head>
	<body>
		<!-- Início do logo-login -->
		<div class="logo-login">
			<img src="img/logo-grande.png" width="400" />
		</div>
		<!-- Fim do logo-login -->
		<div class="formulario-login">
			<form action="" method="post">
				<br><br>
				<input type="email" name="email" id="email" placeholder="E-mail"/><br>
				<input type="password" name="senha" id="senha" placeholder="Senha"/><br>
				<input type="submit" name="botao" id="botao" value="Entrar"/><br><br><br>
				<a href="#">Esqueci minha senha</a>&ensp; | &ensp;
				<a href="cadastro.php">Não sou cadastrado</a><br><br>
			</form>
		</div>
	</body>
</html>