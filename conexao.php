<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "market";
    $conn = mysqli_connect($host, $username, $password, $database);
	
	if (!$conn) {
		echo "ERRO DE CONEXÃO.";
      	die("Connection failed: " . mysqli_connect_error());
	}else{
			echo "CONECTADO";

	}
	

?>