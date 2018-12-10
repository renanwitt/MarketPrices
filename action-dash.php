<?php 
	if(isset($_POST['btnListar'])){
		header("location: listar.php");
	}
	
	if(isset($_POST['btnAlterar'])){
		header("location: editar.php");
	}
	
	if(isset($_POST['btnMeusDados'])){
		header("location: minha-conta.php");
	}

?>