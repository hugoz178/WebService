<?php
include 'boot.php';
include 'conexion.php';

$PDO = new conexion();


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: #F5F5F5">
<div class="row">

  <div class="col-md-2"></div>	

  <div class="col-md-8">
	<br><br><br><br><br><br>
<div class="card">
	<div class="card-body">
  <h2>Nuestros Datos</h2>


  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Buscar</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Busca un dato con el id</h3>
    <form method="post">
		<input type="text" placeholder="Ingresa ID" autofocus name="id">
		<button type="submit" class="btn btn-primary" name="buscar">Buscar</button>		
	</form>
    	<?php
			if (isset($_POST['buscar'])) 
			{
				if (!empty($_POST['id'])|| $_POST['id']!="Ingresa ID")
					{
					$sql = $PDO->prepare("SELECT * FROM clientes WHERE id=:id");
					$sql->bindValue(':id', $_POST['id']);
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
						echo '"nombre": ' . $infd[$i]["nombre"]. "<br>";
						echo '"ap_paterno: " ' .  $infd[$i]["ap_paterno"] . "<br>";
						echo '"ap_materno": ' . $infd[$i]["ap_materno"] . "<br>";
						echo '"vehiculo": ' . $infd[$i]["vehiculo"] . "<br>";
						echo "<br>";
					}
					?>
					<a type="submit" href="formato.php" class="btn" style="background-color: #B3E5FC">Atras</a>
					<?php
					exit;		
					}
			}
    	?>
    	<br>
    </div>


  </div>
    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home2">Datos</a></li>
  </ul>

  <div class="tab-content">
    <div id="home2" class="tab-pane fade in active">
      <h3>Todos los datos</h3>
        <?php
			$xml = json_encode(file_get_contents("http://localhost/WebService/service.php"));
			print_r($xml);
    	?>

    </div>

  </div>
</div>
</div>

  </div>

  <div class="col-md-2"></div>
</div>	



</body>
</html>







