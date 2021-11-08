<?php  
	session_start();
	if (!isset($_SESSION['nombre'])) {
		header('Location: login.php');
	}elseif(isset($_SESSION['nombre'])){
		include 'model/conexion.php';
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
<body style="overflow-x:hidden; background-color: #494949;">
	<center>
		<h1 style="font-weight: bold; color: white;">Bienvenido <?php echo $_SESSION['nombre'] ?></h1>
		<a href="cerrar.php" style="font-weight: bold; color: #00BCD1">Cerrar Sesión</a>
	</center>
	<?php 
		include_once 'formato.php';

		 ?>
 
</body>
</html>
