<?php
include 'boot.php';
include 'conexion.php';

$PDO = new conexion();




	if (isset($_GET['buscar'])) 
	{
		if (!empty($_GET['id'])|| $_GET['id']!="Ingresa ID")
			{
			$sql = $PDO->prepare("SELECT * FROM t_web WHERE id=:id");
			$sql->bindValue(':id', $_GET['id']);
			$sql->execute();
			$sql->setFetchMode(PDO::FETCH_ASSOC);
			header("HTTP/1.1 200 hay datos");
			$inf = json_encode($sql->fetchAll());
			echo "$inf";
			echo "<br><br>";
			$infd = json_decode($inf, true);
			print_r($infd);
			echo "<br><br>";
			for ($i=0; $i<count($infd); $i++){
				echo 'nombre: ' . $infd[$i]["nombre"]. "<br>";
				echo 'p_apellido: ' .  $infd[$i]["p_apellido"] . "<br>";
				echo 's_apellido: ' . $infd[$i]["s_apellido"] . "<br>";
				echo "<br>";
			}
			exit;		
			}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="row">
  <div class="col-md-2" style="background-color: green">..</div>	

  <div class="col-md-8">

<div class="card">
	<div class="card-body">
  <h2>Datos</h2>


  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Busca un dato con el id</h3>
    <form method="get">
		<input type="text" placeholder="Ingresa ID" autofocus name="id">
		<button type="submit" class="btn btn-primary" name="buscar">Buscar</button>		
	</form>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Todos los datos</h3>
      <?php


$xml = json_encode(file_get_contents("http://localhost/WebService/service.php"));
print_r($xml);
echo "<br>";
echo "<br>";

$data = json_decode(file_get_contents("http://localhost/WebService/service.php"), true);	
print_r($data);

?>
    </div>
  </div>
</div>
</div>

  </div>

  <div class="col-md-2" style="background-color: black"></div>
</div>	



</body>
</html>







