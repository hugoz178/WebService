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
	<br><br>
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
						echo '"p_apellido: " ' .  $infd[$i]["ap_paterno"] . "<br>";
						echo '"s_apellido": ' . $infd[$i]["ap_materno"] . "<br>";
						echo "<br>";
					}
					?>
					<a type="submit" href="index.php" class="btn" style="background-color: #B3E5FC">Atras</a>
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

	<br><br><br>
		<div id="map" style="height: 300px; width: 100%;">
		
	</div>
	<script type="text/javascript">
		function iniciarMap(){
			var coord = {lat:25.463841202169533 ,lng: -100.9618960436142}
			var map = new google.maps.Map(document.getElementById('map'),{
				zoom: 15,
				center: coord
			});
			var marker = new google.maps.Marker({
      		position: coord,
      		map: map
    		});
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>	
	<br><br><br>
  </div>

  <div class="col-md-2"></div>
</div>	



</body>
</html>







