<?php 
include 'nav.php';
include "boot.php";
if (isset($_SESSION['correo'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script type="text/javascript">
    $(window).load(function(){
      $("#loadPage").delay(2000).fadeOut("slow");
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
  <?php 
  include "conexion.php";
  
  ?>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    .fakeimg {
      height: 200px;
      background: #aaa;
    }
  </style>

  <?php
  
  
  ?>

</head>
<meta charset="utf-8">
<title> </title>

<meta charset="utf-8">
<title> </title>

<script type="text/javascript">

  function ajax()
  {
    var req = new XMLHttpRequest();
    req.onreadystatechange = function()
    {

      if (req.readyState == 4 && req.status ==200) 
      {
        document.getElementById('chat').innerHTML = req.responseText;
      }

    }
    req.open('GET' , 'chat.php', true);
    req.send();
  }

  setIntervaL(function(){ajax();},1000);

</script>
</head>
<body onload="ajax();">
  <span id="loadPage">
    <p>Cargando...</p>
  </span>
  <div class="container" style="margin-top:10px">
    <br>
    <div class="row">

      <div class="col-sm-8">

        <h2>Escriba su experiencia aqui...</h2>
        <br>
        <div class="container">
          <form method="POST" action="f.php">
            <div class="form-group">
              <input class="form-control" type="text" name="nombre" readonly="" value=" <?php echo($_SESSION['nombre']) ?>  ">
              <br><br>
              <textarea class="form-control" rows="6" id="comment" name="mensaje" required=""></textarea>
            </div>
            <button type="submit" name="enviar" value="Enviar"class="btn btn-success">Enviar</button>
          </form>
          <iframe src="chat.php" title="iframe Example 1" width="870" height="600">
            <p>No hay experiencias.</p>
          </iframe>
          <?php
          if (
            isset($_POST['enviar'])) {
            $nombre = $_POST['nombre'];
            $mensaje = $_POST['mensaje'];

            $con = "INSERT INTO chat (usuario, mesaje) VALUES   ('$nombre',' $mensaje')";
            $ej= $conexion->query($con);

            if ($ej) {
              echo "<embed loop='false' src='beep.mp3' hidden= 'true' autoplay='true'>";
            }
          } 
          ?>


        </div>


      </div>
    </div>
  </div>
</body>
</html>

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
<?php } else{
?>

<script type="text/javascript">
  window.location.replace("http://localhost/haceru3gabriel/index.php");
</script>
<?php  }?> 