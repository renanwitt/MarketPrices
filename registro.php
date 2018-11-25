<?php
if(isset($_POST['botao'])){
     
    $db = mysqli_connect("localhost", "root", "", "cliente");	
     
    $razao = $_POST['razao'];
    $fantasia = $_POST['fantasia'];
	$endereco = $_POST['endereco'];
	$numero = $_POST['numero'];
	$complemento = $_POST['complemento'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	$sql = "INSERT INTO usuario (razao, fantasia, endereco, numero, complemento, telefone, email, senha) 
	VALUES ('$razao', '$fantasia', '$endereco', '$numero', '$complemento', '$telefone', '$email', '$senha')";
	
	$entrou = mysqli_query ($db, $sql);
	
	if($entrou){
		header('Location: dashboard.php');
	}else{
		header('Location: cadastro.php');
	}
}
?>