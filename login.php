<?php 
	if(isset($_POST['botao'])){
		
		$db = mysqli_connect("localhost", "root", "", "cliente");	
		
		$user = $_POST['email'];
		$senha = $_POST['senha'];
		
		$consulta_usuarios = "SELECT * FROM usuario WHERE email=='$user' && senha=='$senha'";
		mysqli_query($db,$consulta_usuarios);
		
		if(mysqli_num_rows($consulta_usuarios)<=0){
			//echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.php';</script>";
		}else{
			setcookie("login",$user);
			header("Location:dashboard.php");
		}
		
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
				<input type="email" name="email" placeholder="E-mail"/><br>
				<input type="password" name="senha" placeholder="Senha"/><br>
				<input type="submit" name="botao" value="Entrar"/><br><br><br>
				<a href="#">Esqueci minha senha</a>&ensp; | &ensp;
				<a href="cadastro.php">Não sou cadastrado</a><br><br>
			</form>
		</div>
	</body>
</html>