<?php 
include "conexion.php"; 

$consulta = "SELECT * FROM chat ORDER BY id DESC";
$ejecutar= $conexion->query($consulta);
while ($fila= $ejecutar->fetch_array()):
	?>
	<div>

		<h2><span style="color: #008f39;"><?php echo $fila['usuario'];?>: </span></h2>
		<p><span style="color: #848484"><?php echo $fila['mesaje']; ?></span></p>
		<span style="float: right;"><?php echo NF($fila['fecha']); ?></span>
		
	</div>
	<?php
endwhile;
?>