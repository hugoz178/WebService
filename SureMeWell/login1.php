<?php
session_start();
include 'conexion.php'; 
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];

$proceso=$conexion->query("SELECT * FROM usuarios WHERE correo='$correo' AND contrasena = '$contrasena'");

$procesonombre = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' AND contrasena = '$contrasena'");
while ($nombreconsulta = mysqli_fetch_array($procesonombre)) {
	$nombre = $nombreconsulta['nombre'];
}

$procesoadmin = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' AND contrasena = '$contrasena'");
while ($adminconsulta = mysqli_fetch_array($procesoadmin)) {
	$tipo = $adminconsulta['tipo'];
}

if($f2=mysqli_fetch_array($proceso)){
	echo $_SESSION['correo']=$correo; 
	echo "<br>". $_SESSION['nombre']=$nombre;
	echo "<br>". $_SESSION['tipo']=$tipo;
	header("location:index.php");

}else{
	header("location:index.php");
}

?>