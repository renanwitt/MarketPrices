<?php 

		if(isset($_POST['campoBuscador'])){
		
			$termoBuscado = $_POST['campoBuscador'];
		
			$db = mysqli_connect("localhost", "root", "", "cliente");
			
			$sql = "SELECT * FROM anuncio WHERE titulo LIKE '%".$termoBuscado."%'";
			$resultado = mysqli_query($db, $sql);
			
			$numRegistros = mysqli_num_rows($resultado);
			
			if ($numRegistros != 0) {
				while ($produto = mysqli_fetch_object($resultado)) {
				echo $produto->titulo . " (R$ ".$produto->preco.") <br />";
				echo "<img src='images/".$produto->imagem."' width='120' height='120'>";
				}
			} else {
				echo "O produto '".$termoBuscado."' não foi encontrado";
			}
			
			/*while($row = mysql_fetch_assoc($sql)){
					
					echo "<div class='boxResultado'>
								<div class='imagem'>".$row['imagem']."</div>
								<div class='titulo'>".$row['titulo']."</div>
								<div class='preco'>".$row['preco']."</div>
						</div>";
					
			}*/
		}
?>


