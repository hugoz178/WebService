<?php
include 'conexion.php'; 
$correo=$_POST['correo'];
$password=$_POST['password'];
$respuesta=$_POST['respuesta'];
$respuesta2="";

$sql = "UPDATE usuarios SET contrasena='$password' WHERE correo='$correo' and respuesta = '$respuesta'";

$procesonombre = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
while ($nombreconsulta = mysqli_fetch_array($procesonombre)) {
	$respuesta2 = $nombreconsulta['respuesta'];
}
$conexion->query($sql);
echo $respuesta;
echo $respuesta2;

if ($respuesta2==$respuesta) {
	header("location:index.php");
}else{
	header("location:recuperar.php");
}

?>