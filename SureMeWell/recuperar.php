<?php
//Aquí se realiza el index, así como el registro de la aplicación
include 'boot.php';
?>
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
  <?php include'nav.php'; ?>
  <br><br>
  <form style="padding-left: 100px; padding-right: 100px;" method="POST" action="rec1.php" class="needs-validation">
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
     
      <div class="col">
        <div class="form-outline">
          <label class="form-label" >Correo</label>
          <input type="email" name="correo" id="validationTooltip02" class="form-control" required="" style="border-bottom: solid;"/>

        </div>
      </div>
       <div class="col">
        <div class="form-outline">
          <label class="form-label" >Respuesta de recuperacion</label>
          <input type="text" name="respuesta" id="validationTooltip02" class="form-control" required="" style="border-bottom: solid;"/>

        </div>
      </div>
     <!-- Phone -->
     <div class="col form-outline mb-4">
      <label class="form-label" >Nueva Contraseña</label>
      <input type="text" name="password" id="validationTooltip04" class="form-control" required="" style="border-bottom: solid;"/>

    </div>
    </div>

    
  <!-- Submit button -->
  <button type="submit" name="enviar" class="btn btn-primary btn-block mb-4">Actualizar </button>

</form>
</body>
</html>