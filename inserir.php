<?php 
	session_start();
		if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true)){
			unset($_SESSION['usuario']);
			unset($_SESSION['senha']);
			header('location:login.php');
  }
	$usuarioAtual = $_SESSION['id'];

	$msg = "";
	if(isset($_POST['btnInserir'])){
    $target = "images/".basename($_FILES['image']['name']);
     
    $db = mysqli_connect("localhost", "root", "", "cliente");
     
    $imagem = $_FILES['image']['name'];
    $titulo = $_POST['titulo'];
    $preco = $_POST['preco'];
	
		if(empty($titulo) || empty($preco)){
			echo '<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("Opa! Parece que você esqueceu de preencher algum campo.")</SCRIPT>';
			header('Location: inserir.php');
			return;
		}
		
     
    $sql = "INSERT INTO anuncio (titulo, imagem, preco, id_user) VALUES ('$titulo', '$imagem', '$preco', $usuarioAtual)";
    mysqli_query($db, $sql);
     
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        $msg = "Image uploaded!!!!";
        echo 'OK';
    }else{
        $msg = "Problema";
        //echo 'NAO';
    }
	}
	
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
			<span>Inserir anúncio</span>
		</div>
		<!-- Início do conteúdo -->
		<div class="conteudo">
			<br>
			<form action="" method="post" enctype="multipart/form-data">
				<input type="text" name="titulo" class="campos" placeholder="Título"/><br>
				<input type="file" name="image" class="campos"/><br>
				<input type="number" step="0.01" name="preco" class="campos" placeholder="Preço"/><br><br>
				<input type="submit" name="btnInserir" class="btnInserir" value="Inserir"/>
			</form>
		</div>
		<!-- Fim do conteúdo -->
	</body>
</html>