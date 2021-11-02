<?php

$xml = json_encode(file_get_contents("http://localhost/WebService/service.php"), true);
print_r($xml);
echo "<br>";
echo "<br>";

$data = json_decode(file_get_contents("http://localhost/WebService/service.php"), true);	
print_r($data);

echo "<br>";
echo "<br>";
for ($i=0; $i<count($data); $i++){
	echo 'Nombre: ' . $data[$i]["nombre"]. "<br>";
	echo 'Apellido Paterno: ' .  $data[$i]["p_apellido"] . "<br>";
	echo 'Apellido Materno: ' . $data[$i]["s_apellido"] . "<br>";
	echo "<br>";
}

?>