<?php  
	session_start();
	if (!isset($_SESSION['nombre'])) {
		header('Location: login.php');
	}elseif(isset($_SESSION['nombre'])){
		include 'WebService-main/model/conexion.php';
		$sentencia = $bd->query("SELECT * FROM clientes;");
		$clientes = $sentencia->fetchAll(PDO::FETCH_OBJ);
		//print_r($clientes);
	}else{
		echo "Error en el sistema";
	}


	
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h1>Bienvenido: <?php echo $_SESSION['nombre'] ?></h1>
		<a href="WebService-main/cerrar.php">Cerrar Sesión</a>
	</center>
	<?php 
		include_once 'formato.php';

		 ?>
	<br><br><br>
		<div id="map" style="height: 300px; width: 30%;">
		
	</div>
	<script type="text/javascript">
		function iniciarMap(){
			var coord = {lat:25.463841202169533 ,lng: -100.9618960436142}
			var map = new google.maps.Map(document.getElementById('map'),{
				zoom: 15,
				center: coord
			});
			var marker = new google.maps.Marker({
      		position: coord,
      		map: map
    		});
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>	 
</body>
</html>