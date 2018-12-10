<? php include("conexao.php"); ?>
<html>
	<head>
		<title>Market Prices | Brazil</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="./css/estilos-home.css"/>
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
					<form class="botao-login" method="get" action="login.php"><button type="submit">LOGIN</button></form>
				</div>
		</div>
		<!-- Fim do topo -->
		<div class="buscador">
				<form name="busca" action="" method="post">
					<input type="text" name="campoBuscador" class="campoBusca" placeholder="O que você procura?"/>
				</form>
		</div>
		<div class="tituloCategoria">
			<span>Exibindo: Produtos mais pesquisados</span>
		</div>
		<!-- Início do conteúdo -->
		<div class="conteudo">
			<?php include("resultado.php"); ?>
		</div>
		<!-- Fim do conteúdo -->
	</body>
</html>