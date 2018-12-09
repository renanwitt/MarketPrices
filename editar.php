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
					<form class="botao-login" method="get" action="login.php"><button type="submit"><?php echo $usuarioAtual ?></button></form>
				</div>
		</div>
		<!-- Fim do topo -->
		<br>
		<div class="tituloCategoria">
			<span>Editar anúncio</span>
		</div>
		<!-- Início do conteúdo -->
		<div class="conteudo">
			<br>
			<form action="" method="post" enctype="multipart/form-data">
				<input type="text" name="idAnuncio" class="campos" placeholder="ID do anúncio"/>
			</form>
			<?php include("alteracao.php"); ?>
		</div>
		<!-- Fim do conteúdo -->
	</body>
</html>