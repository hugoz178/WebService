<?php 
include ("boot.php");
include 'nav.php';
?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'boot.php'; ?>
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
			$("#loadPage").delay(500).fadeOut("slow");
		});
	</script>
	<style type="text/css">
		#loadPage{
			display: block;
			background: #333;
			color: white;
			width: 100%;
			height: 100%;
			position: fixed;
			top: 0;
			left: 0;
			z-index: 1000;
		}
		#loadPage p{
			display: block;
			width: 100px;
			height: 100px;
			font-size: 30px;
			position: absolute;
			top: 0;
			left: 0;
			bottom: 0;
			right: 0;
			margin: auto;
		}
	</style>
	<meta charset="utf-8">
	<title>Mapa del sitio</title>
</head>
<body style="background-color: white;">
	<span id="loadPage">
		<p>Cargando...</p>
	</span>
	<!--Navbar-->
	
	<br><br>
	<link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<div class="container">
		<center>
			<h1 style="font-family: Cabin; font-size: 400%;"><u>Mapa de SureMeWell</u></h1><br><br>
		</center>
		<div class="row">
			<div class="col">
				<center>
					<div>
						<label style="font-family: Montserrat; font-size: 150%;">Principal</label> <br>
						<label style="font-family: Cabin; font-size: 120%;"><a href="seguros.php" style="color: black;">Tipos de seguros</a></label> <br>
						<label style="font-family: Cabin; font-size: 120%;"><a href="regitros.php" style="color: black;">Registros</a></label> <br>
						<label style="font-family: Cabin; font-size: 120%;"><a href="estados.php" style="color: black;">Estado de cuenta</a></label> <br>
						<label style="font-family: Cabin; font-size: 120%;"><a href="cancelaciones.php" style="color: black;">Cancelaciones</a></label> <br>
						<label style="font-family: Cabin; font-size: 120%;"><a href="ayuda.php" style="color: black;">Ayuda</a></label> <br>
					</div>
					<div style="padding-top: 10%">
						<label style="font-family: Montserrat; font-size: 150%;">Redes sociales</label> <br>
						<label style="font-family: Cabin; font-size: 120%;"><a href="facebook" style="color: black;">Facebook</a></label> <br><label style="font-family: Cabin; font-size: 120%;"><a href="twitter" style="color: black;">Twitter</a></label> <br>
						<label style="font-family: Cabin; font-size: 120%;"><a href="intagram" style="color: black;">Instagram</a></label>
					</div>
				</center>
			</div>
			<div class="col">
				<center>
					<div>
						<label style="font-family: Montserrat; font-size: 150%;">Sobre nosotros</label> <br>
						<label style="font-family: Cabin; font-size: 120%;"><a href="nosotros" style="color: black;">Acerca de nosotros</a></label> <br>
						<label style="font-family: Cabin; font-size: 120%;"><a href="contactanos" style="color: black;">Contáctanos</a></label> 
					</div>
					<div style="padding-top: 10%;">
						<label style="font-family: Montserrat; font-size: 150%;">Contenido</label> <br>
						<label style="font-family: Cabin; font-size: 120%;"><a href="nosotros" style="color: black;">Video promocionales</a></label> <br>
						<label style="font-family: Cabin; font-size: 120%;"><a href="infografias" style="color: black;">Infografías</a></label> <br>
						<label style="font-family: Cabin; font-size: 120%;"><a href="comparativos" style="color: black;">Cuadros comparativos</a></label>
					</div>
				</center>
			</div>
		</div>
	</div>
</body>
</html>

<?php 
if (isset($_SESSION['correo'])) {
?>
<script type="text/javascript">
  var base_url = 'cerrarsesion.php';
var timeout;
document.onmousemove = function(){ 
    clearTimeout(timeout); 
    contadorSesion(); //aqui cargamos la funcion de inactividad
} 

function contadorSesion() {
   timeout = setTimeout(function () {
        $.confirm({
            title: 'Alerta de Inactividad!',
            content: 'La sesión esta a punto de expirar.',
            autoClose: 'expirar|10000',//cuanto tiempo necesitamos para cerrar la sess automaticamente
            type: 'red',
            icon: 'fa fa-spinner fa-spin',
            buttons: {
                expirar: {
                    text: 'Cerrar Sesión',
                    btnClass: 'btn-black',
                    action: function () {
                        salir();
                    }
                },
                permanecer: function () {
                    contadorSesion(); //reinicia el conteo
                }
            }
        });
    }, 60000);//1 minuto de actividad
}

function salir() {
    window.location.href = base_url; //esta función te saca
}
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
<?php } ?>