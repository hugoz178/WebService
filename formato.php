<?php

include 'conexion.php';

$PDO = new conexion();




	if (isset($_GET['buscar'])) 
	{
		if (!empty($_GET['id'])|| $_GET['id']!="Ingresa ID")
			{
			$sql = $PDO->prepare("SELECT * FROM t_web WHERE id=:id");
			$sql->bindValue(':id', $_GET['id']);
			$sql->execute();
			$sql->setFetchMode(PDO::FETCH_ASSOC);
			header("HTTP/1.1 200 hay datos");
			$inf = json_encode($sql->fetchAll());
			echo "$inf";
			echo "<br><br>";
			$infd = json_decode($inf, true);
			print_r($infd);
			echo "<br><br>";
			for ($i=0; $i<count($infd); $i++){
				echo 'nombre: ' . $infd[$i]["nombre"]. "<br>";
				echo 'p_apellido: ' .  $infd[$i]["p_apellido"] . "<br>";
				echo 's_apellido: ' . $infd[$i]["s_apellido"] . "<br>";
				echo "<br>";
			}
			exit;		
			}
	}
?>
	<form method="get">
		<input type="text" placeholder="Ingresa ID" autofocus name="id">
		<button type="submit" name="buscar">Buscar</button>		
	</form>


