<?php
session_start();
session_destroy();
include "conexion.php";
if (isset($_POST['enviar'])) {
  $nombre = $_POST['nombre'];
  $usuario = $_POST['usuario'];
  $password = $_POST['password'];
  $correo = $_POST['correo'];
  $telefono = $_POST['telefono'];
  $respuesta = $_POST['respuesta'];

  $con = "INSERT INTO usuarios (usuario, nombre,correo, contrasena, telefono, tipo, respuesta) VALUES ('$usuario','$nombre','$correo','$password','$telefono', 'usuario', '$respuesta')";
  $ej= $conexion->query($con);

  if ($ej) {
    echo "<embed loop='false' src='beep.mp3' hidden= 'true' autoplay='true'>";
    header('location: index.php');
  }
} 
?>