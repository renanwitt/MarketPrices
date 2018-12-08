<?php 

		if(isset($_POST['campoBuscador'])){
		
			$termoBuscado = $_POST['campoBuscador'];
		
			$db = mysqli_connect("localhost", "root", "", "cliente");
			
			$sql = "SELECT * FROM anuncio WHERE titulo LIKE '%".$termoBuscado."%'";
			$resultado = mysqli_query($db, $sql);
			
			$numRegistros = mysqli_num_rows($resultado);
			
			if ($numRegistros != 0) {
				while ($produto = mysqli_fetch_object($resultado)) {
								
					echo "<div class='boxAnuncio'>
							<div class='imagemAnuncio'><img src='images/".$produto->imagem."' width='120' height='120'></div>
							<div class='tituloAnuncio'><br>".$produto->titulo."</div>
							<div class='precoAnuncio'><br>"."R$ ".$produto->preco."</div>
						</div>";
				}
			} else {
				echo "O produto '".$termoBuscado."' não foi encontrado";
			}
		}
?>

<link rel='stylesheet' href='css/estilos-resultado.css';

