<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h3>Ingresar clientes:</h3>
		<form method="POST" action="insertar.php">
			<table>
				<tr>
					<td>Apellido paterno: </td>
					<td><input type="text" name="txtPaterno"></td>
				</tr>
				<tr>
					<td>Apellido materno: </td>
					<td><input type="text" name="txtMaterno"></td>
				</tr>
				<tr>
					<td>Nombre: </td>
					<td><input type="text" name="txtNombre"></td>
				</tr>
				<tr>
					<td>Correo: </td>
					<td><input type="text" name="txtCorreo"></td>
				</tr>
				<tr>
					<td>Contaseña: </td>
					<td><input type="password" name="txtPsw"></td>
				</tr>
				<tr>
					<td>Veiculo: </td>
					<td><input type="text" name="txtVeiculo"></td>
				</tr>
				<input type="hidden" name="oculto" value="1">
				<tr>
					<td><input type="submit" value="INGRESAR"></td>
				</tr>
			</table>
		</form>
		<a href="index.php"> Iniciar sesion</a>
</body>
</html>