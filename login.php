<?php 
	if(isset($_POST['botao'])){
		
		session_start();
		
		$user = $_POST['email'];
		$senha = $_POST['senha'];
		
		$db = mysqli_connect("localhost", "root", "","cliente");

		
		$consulta = "SELECT * FROM usuario WHERE email='$user' AND senha='$senha'";
		$resultado = mysqli_query($db,$consulta);
		
		$linhas = mysqli_num_rows($resultado);
		
		if($linhas != 0){
			while($login = mysqli_fetch_object($resultado)){
				$_SESSION['id'] = $login->id;
				$_SESSION['nome'] = $login->fantasia;
				$_SESSION['usuario'] = $user;
				$_SESSION['senha'] = $senha;
				header('Location: dashboard.php');
			}
		}else{
			echo '<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("Login inválido!")</SCRIPT>';
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
			<a href="home.php"><img src="img/logo-grande.png" width="400" /></a>
		</div>
		<!-- Fim do logo-login -->
		<div class="formulario-login">
			<form action="" method="post">
				<br><br>
				<input type="email" name="email" id="email" placeholder="E-mail"/><br>
				<input type="password" name="senha" id="senha" placeholder="Senha"/><br>
				<input type="submit" name="botao" id="botao" value="Entrar"/><br><br><br>
				<a href="recuperar-senha.php">Esqueci minha senha</a>&ensp; | &ensp;
				<a href="cadastro.php">Não sou cadastrado</a><br><br>
			</form>
		</div>
	</body>
</html>