<?php 
	if(isset($_POST['btnRecuperar'])){
		
		$email = $_POST['email'];
		$nomeRemetente = "Market Prices";
		
		$db = mysqli_connect("localhost", "root", "","cliente");

		
		$consulta = "SELECT * FROM usuario WHERE email='$email'";
		$resultado = mysqli_query($db,$consulta);
		
		$linhas = mysqli_num_rows($resultado);
		
		if($linhas != 0){
			while($login = mysqli_fetch_object($resultado)){
				$emailRemetente = "suporte@marketprices.com.br";
				$emailDestino = $login->email;
				$assunto = "Recuperação de senha";
				$senhaEnviar = $login->senha;
				
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: $nomeRemetente <$emailDestino>';
				
				mail($emailDestino, $assunto, $senhaEnviar);
				
			}
		}else{
			echo '<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("Usuário inexistente.")</SCRIPT>';
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
				<input type="submit" name="btnRecuperar" id="botao" value="Recuperar senha"/><br><br>
				<span>A senha será enviada para o seu e-mail</span>
			</form>
		</div>
	</body>
</html>