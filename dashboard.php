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
		<link rel="stylesheet" href="./css/estilos-dashboard.css"/>
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
					<form class="botao-login" method="get" action="sair.php"><button type="submit"><?php echo "Olá, ".$usuarioAtual."" ?></button></form>
				</div>
		</div>
		<!-- Fim do topo -->
		<br>
		<div class="tituloCategoria">
			<span>Painel de usuário</span>
		</div>
		<!-- Início do conteúdo -->
		<div class="conteudo">
			<form name="dashboard" action="action-dash.php" class="dashboard" method="post">
				<input type="submit" name="btnListar" value="Listar meus produtos"/><br>
				<input type="submit" name="btnAlterar" value="Editar / Excluir um produto"/><br>
				<input type="submit" name="btnMeusDados" value="Minha Conta"/><br><br>
				<span>Para sair, clique em seu nome de usuário no topo</span>
			</form>
		</div>
		<!-- Fim do conteúdo -->
	</body>
</html>