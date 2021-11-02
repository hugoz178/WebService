<?php
$data = json_decode(file_get_contents("http://localhost/WebService/service.php"), true);
print_r($data);	
echo "<br>";
echo "<br>";
for ($i=0; $i<count($data); $i++){
	echo $data[$i]["nombre"]."<br>";
	echo $data[$i]["p_apellido"]."<br>";
	echo $data[$i]["s_apellido"]."<br>";
	echo "<br>";
}

?>