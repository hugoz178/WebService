<?php
//Aquí se realiza el index, así como el registro de la aplicación
//Se realiza la comprobación de si hay sesión iniciada o no y en caso de que haya se mostrará un index diferente
include'nav.php';
include'conexion.php';
if (isset($_SESSION['correo'])) {
?>
<!DOCTYPE html>
<html>
<head>
  <?php include 'boot.php'; ?>
  <title>SureMeWell</title>
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
</head>
<body style="overflow-x: hidden; background-color: black;">
  <span id="loadPage">
    <p>Cargando...</p>
  </span>

  <div class="row">
    <div class="col-md" style="background-color: black;">
      <img class="img-fluid" src="https://images.pexels.com/photos/21694/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260">
    </div>
    <div class="col-md-2" style="background-color: black;">

    </div>
    
    <?php 

//ADMINISTRADOR


    error_reporting(0);
    $tipo = $_SESSION['tipo'];
    $admin='admin';
    if ($tipo==$admin) 
    { 
      ?> 
      <div class="col-md-5">
        <h1 style="color: gold;">Administrador</h1>
        <iframe src="table.php" height="600" width="650">

        </iframe>
        
      </div>
      <div class="col-md-1">

      </div>

  <?php 

  //REGISTRO 


} else{?> 
    <div class="col-md" style="background-color: black;">
      <center>
        <label style="font-family: 'Bebas Neue', cursive; color: white; font-size: 170%; text-align: center; margin-top: 40px;">Gran parte de lo que ocurrirá no se puede asegurar <br> nosotros te ayudamos con lo posible</label>
        <hr style="color: white; margin-right: 60px; margin-left: 60px;">
      </center>
      <center>
        <label style="font-family: 'Georama'; font-size: 130%; color: white; padding-top: 20px;">Elige tu plan a estos años:</label>
      </center>

      <div class="row">
        <div class="col-md">
          <a href="planes.php"><img src="https://img.icons8.com/carbon-copy/200/ffffff/1.png" style="float: right;"></a>
        </div>
        <div class="col-md">
          <a href="planes.php"><img src="https://img.icons8.com/carbon-copy/200/ffffff/5.png" style="float: left;"></a>
        </div>
      </div>

      <div class="row">
        <div class="col-md">
          <a href="planes.php"><img src="https://img.icons8.com/carbon-copy/200/ffffff/10.png" style="float: right;"></a>
        </div>
        <div class="col-md">
         <a href="planes.php"><img src="https://img.icons8.com/carbon-copy/200/ffffff/20.png" style="float: left;"></a>
        </div>
      </div>

    </div>
    <div class="col-md-1" style="background-color: black;">
    </div>
  </div>


</body>
</html>

<?php  
}} else {
  session_destroy();
?>

<!-- Index en caso de que no haya sesión iniciada -->
<!DOCTYPE html>
<html>
<head>
  <title>Inicio</title>
  <!-- En este apartado estan los scripts de la página de carga -->
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
</head>
<body>
  <span id="loadPage">
    <p>Cargando...</p>
  </span>
  
  <br><br>
  <form style="padding-left: 100px; padding-right: 100px;" method="POST" action="reg.php" class="needs-validation">
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
      <div class="col">
        <div class="form-outline">
          <label class="form-label" >Nombre</label>
          <input type="text" name="nombre" id="validationTooltip01" class="form-control" required="" style="border-bottom: solid;" />

        </div>
      </div>
      <div class="col">
        <div class="form-outline">
          <label class="form-label" >Usuario</label>
          <input type="text" name="usuario" id="validationTooltip02" class="form-control" required="" style="border-bottom: solid;"/>

        </div>
      </div>
    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
      <label class="form-label" >Correo</label>
      <input type="email" name="correo" id="validationTooltipUsername" class="form-control" required="" style="border-bottom: solid;"/>

    </div>

    <div class="row">
     <!-- Phone -->
     <div class="col form-outline mb-4">
      <label class="form-label" >Teléfono</label>
      <input type="number" name="telefono" id="validationTooltip04" class="form-control" required="" style="border-bottom: solid;"/>

    </div>

    <!-- Password input -->
    <div class="col form-outline mb-4">
      <label class="form-label" for="form3Example4">Contraseña</label>
      <input type="password" name="password" id="validationTooltip03" class="form-control" required="" style="border-bottom: solid;"/>

    </div>
    <div class="row">
      <div class="col-md form-outline mb-4">
        <label class="form-label" for="form3Example4">Pregunta de seguridad: <br>¿Qué es lo más preciado para ti?</label>
      <input type="password" name="respuesta" id="validationTooltip03" class="form-control" required="" style="border-bottom: solid;"/>
      </div>
    </div>

  </div>
  <a class="justify-content-center mb-4" href="terminos.php">Leer términos y condiciones</a>
  <!-- Checkbox -->
  <div class="form-check d-flex mb-4">

    <input
    class="form-check-input me-2"
    type="checkbox"
    value=""
    id="form2Example3"
    required
    />

    <label class="form-check-label" for="form2Example3">
      Acepto los términos y condiciones
    </label>
  </div>

  <!-- Submit button -->
  <button type="submit" name="enviar" class="btn btn-primary btn-block mb-4">Registrarse</button>

</form>

<script type="text/javascript">
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (() => {
    'use strict';

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation');

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach((form) => {
    form.addEventListener('submit', (event) => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
})();
</script>
</body>
</html>
<?php 
} 
?>

<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LfL1REbAAAAAFFkgNk5IVAysxesczVGj3YPb9O5"></script>
<script>
 function onSubmit(token) {
   document.getElementById("demo-form").submit();
 }
</script>

</body>
<script>
  function onClick(e) {
    e.preventDefault();
    grecaptcha.ready(function() {
      grecaptcha.execute('6LfL1REbAAAAAFFkgNk5IVAysxesczVGj3YPb9O5', {action: 'submit'}).then(function(token) {
              // Add your logic to submit to your backend server here.
            });
    });
  }
</script>
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