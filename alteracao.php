<?php	
	if(isset($_POST['idAnuncio'])){
		$idProduto = $_POST['idAnuncio'];
		$idUsuario = $_SESSION['id'];
		
		$db = mysqli_connect("localhost", "root", "", "cliente");
		
		$consulta = "SELECT * FROM anuncio WHERE Prod_id='$idProduto' AND id_user='$idUsuario'";
		$resultado = mysqli_query($db, $consulta);
		
		$registrosEncontrados = mysqli_num_rows($resultado);
		
		if($registrosEncontrados != 0){
			while($produto = mysqli_fetch_object($resultado)){
				echo "<form name='alteracaoForm' action='confirma-edicao.php' method='post' enctype='multipart/form-data'>
						<input type='hidden' name='id' value='".$produto->Prod_id."'/>
						<span>Título:</span><br>
						<input type='text' name='titulo' class='campos' value='".$produto->titulo."'/><br>
						<span>Imagem:</span><br>
						<div class='imagemAnuncio'><img src='images/".$produto->imagem."' width='80' height='80'></div>
						<input type='file' name='image' class='campos'/><br>
						<span>Preço:</span><br>
						<input type='number' step='0.01' name='preco' class='campos' value='".$produto->preco."'/><br><br>
						<input type='submit' name='btnEditar' class='btnEditar' value='Editar'/>
						<input type='submit' name='btnExcluir' class='btnExcluir' value='Excluir'/>
						
					</form>";
					
					include ("confirma-edicao.php");
					
					
			}
		}else{
			echo "Produto informado não foi encontrado";
		}
	}
?>

<link rel='stylesheet' href='css/estilos-resultado.css';
