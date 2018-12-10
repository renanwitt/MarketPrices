<?php 
	
	session_start();
	
	if(isset($_POST['btnListar'])){
		$idUsuario = $_SESSION['id'];
		
		echo $idUsuario;
		
		$db = mysqli_connect("localhost", "root", "", "cliente");
		
		$consulta = "SELECT * FROM anuncio WHERE id_user='$idUsuario'";
		$resultado = mysqli_query($db, $consulta);
		
		$registrosEncontrados = mysqli_num_rows($resultado);
		
		if($registrosEncontrados != 0){
			while($produto = mysqli_fetch_object($resultado)){
				echo $produto->Prod_id;
				echo $produto->imagem;
				echo $produto->titulo;
			}
		}else{
			echo "Você não tem produtos cadastrados."; 
		}
	}

?>