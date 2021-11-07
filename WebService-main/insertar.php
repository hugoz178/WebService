<?php  
	if (!isset($_POST['oculto'])) {
		exit();
	}

	include 'model/conexion.php';
	$paterno = $_POST['txtPaterno'];
	$materno = $_POST['txtMaterno'];
	$nombre = $_POST['txtNombre'];
	$correo = $_POST['txtCorreo'];
	$psw = $_POST['txtPsw'];
	$veiculo = $_POST['txtVeiculo'];


	$sentencia = $bd->prepare("INSERT INTO clientes(ap_paterno,ap_materno,nombre,psw,veiculo,correo) VALUES (?,?,?,?,?,?);");
	$resultado = $sentencia->execute([$paterno,$materno,$nombre,$psw,$veiculo,$correo]);

	if ($resultado === TRUE) {
		//echo "Insertado correctamente";
		header('Location: index.php');
	}else{
		echo "Error";
		
	}
?>

