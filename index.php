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
		<a href="cerrar.php">Cerrar Sesión</a>
	</center>
	<?php 
		include_once 'formato.php';

		 ?>
</body>
</html>