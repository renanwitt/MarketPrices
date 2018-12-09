<?php 
	if(isset($_POST['btnEditar'])){
		$id = $_POST['id'];
		$novoTitulo = $_POST['titulo'];
		$novoPreco = $_POST['preco'];
		
		$db = mysqli_connect("localhost", "root", "", "cliente");
		
		$alterar = "UPDATE anuncio SET titulo='$novoTitulo', preco='$novoPreco' WHERE Prod_id='$id'";
		$confirma = mysqli_query($db,$alterar);
		
		echo "OOOOOO";
		header('Location: editar.php');
	}
	
	
	if(isset($_POST['btnExcluir'])){
		$id = $_POST['id'];
		
		$db = mysqli_connect("localhost", "root", "", "cliente");
		
		$excluir = "DELETE FROM anuncio WHERE Prod_id='$id'";
		$confirma = mysqli_query($db,$excluir);
		
		header('Location: editar.php');
	}

?>