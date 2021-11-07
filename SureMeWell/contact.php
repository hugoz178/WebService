<?php include 'nav.php';
if (isset($_SESSION['correo'])) {
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
  <title>Contáctanos</title>
</head>
<body style="overflow-x:hidden">
  <span id="loadPage">
    <p>Cargando...</p>
  </span>
  <body style="overflow-x:hidden">
    

    <br>

    <div class="row">
      
      <div class="col-sm-1"></div>
      <div class="col-sm-10">

        <table class="table">
          <h1 class="display-4" style="font-weight: bold;">Desarrolladores</h1>
          <tbody>
            <tr>
              <td>
                <div class="card" style="width:350px;height:100px;">
                  <img src="img/Pain.jpeg" style="width:350px;height:350px;" onmouseenter="bigImg(this)" onmouseleave="normalImg(this)">
                  <h3 style="text-align: center;">Hugo Hernández López</h3>
                  <p style="text-align: center;">hugo_hernandez@outlook.com</p>
                </div>
              </td>
              <td>
                <div class="card" style="width:350px;height:100px;">
                  <img src="img/Naruto.jpeg" onmouseenter="bigImg(this)" onmouseleave="normalImg(this)" style="width:350px;height:350px;">
                  <h3 style="text-align: center;">Diego Adrián Fernández Adán</h3>
                  <p style="text-align: center;">diego_fernandez@outlook.com</p>
                </div>
              </td>
              <td>
                <div class="card" style="width:350px;height:100px;">
                  <img src="img/Obito.jpeg" onmouseenter="bigImg(this)" onmouseleave="normalImg(this)" style="width:350px;height:350px;">
                  <h3 style="text-align: center;">David Emanuel Celestino Narváez</h3>
                  <p style="text-align: center;">david_celestino@outlook.com</p>
                </div>
              </td>
            </tr>
          </tbody>
        </table>

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

      </div>
      <div class="col-sm-1"></div>

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