<?php 
	session_start();
		if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true)){
			unset($_SESSION['usuario']);
			unset($_SESSION['senha']);
			header('location:login.php');
  }
	$usuarioAtual = $_SESSION['nome'];
?>

<html>
	<head>
		<title>Market Prices | Brazil</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="./css/estilos-home.css"/>
		<link rel="stylesheet" href="./css/estilos-inserir.css"/>
	</head>
	<body>
		<!-- Início do topo -->
		<div class="topo">
			<!-- Início do logo do menu -->
			<div class="logo-menu">
				<br><a href="home.php"><img src="./img/logo-menu.png"/></a>
			</div>
			<!-- Fim do logo do menu -->
			<br><div class="login">
					<form class="botao-login" method="get" action="#"><button type="submit"><?php echo "Olá, ".$usuarioAtual."" ?></button></form>
				</div>
		</div>
		<!-- Fim do topo -->
		<br>
		<div class="tituloCategoria">
			<span>Painel de usuário</span>
		</div>
		<!-- Início do conteúdo -->
		<div class="conteudo">
			DADOS
		</div>
		<!-- Fim do conteúdo -->
	</body>
</html>