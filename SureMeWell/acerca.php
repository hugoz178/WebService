<!DOCTYPE html>
<html>
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
  <script src="https://unpkg.com/scrollreveal"></script>
  <meta charset="utf-8">
  <title>Acerca de</title>
</head>
<span id="loadPage">
  <p>Cargando...</p>
</span>
<?php 
  include 'nav.php';
  include 'boot.php'; 
  ?>
<body style="overflow-x:hidden">

  
  <link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">
  <div class="bg-image">
    <img
    src="https://images.pexels.com/photos/132657/pexels-photo-132657.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260"
    class="img-fluid"
    alt="Imagen principal de automovil"
    />
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <p class="textacerca text-white mb-10" style="font-size: 500%; font-family: Cabin;">Acerca de nosotros</p>
      </div>
    </div>
  </div>

  <br><br><br><br>

  <center>

    <div class="topp card" style="width:1100px; height:220px; border: 5px; border-style: solid; border-color: #43a047; padding-top: 35px;" id="recuadro3" onmouseenter="bigImg(this)" onmouseleave="normalImg(this)">
      <h1 class="text-black display-4">En SureMeWell somos una empresa la cual proporciona seguridad para tu automóvil</h1>
    </div>
    <br><br>
    <div class="row">

      <div class="col-sm-1" ></div>

      <div class="col-sm-10">

        <div class="row">


          <div class="first card col " style="margin-right: 20px; width:400px;height:300px; border-color: #43a047; border-radius:30px;" id="vision">
            <h1 class="display-4 text-black" style="padding-top: 10%; font-weight: bold;">Vision</h1>
            <p class="text-white" style="padding-top: 10%;">La aseguradora global de confianza</p>
          </div>

          <div class="second card col " style="margin-right: 20px; width:400px;height:300px;border-color: #43a047; border-radius:30px;" id="mision">
            <h1 class="display-4 text-black" style="padding-top: 10%; font-weight: bold;">Misión</h1>
            <p style="text-align: justify;" class="text-white">Somos un equipo multinacional que trabaja para avanzar constantemente en el servicio y desarrollar la mejor relación con nuestros clientes, distribuidores, proveedores, accionistas y la sociedad</p>
          </div>
          <div class="third card col " style="width:400px;height:300px;border-color: #43a047; border-radius:30px; padding-top: 3%" id="valores">
            <h1 class="display-4 text-black" style="font-weight: bold;">Valores</h1>
            <p class="text-white">Solvencia</p>
            <p class="text-white">Integridad</p>
            <p class="text-white">Vocación de servicio</p>
            <p class="text-white">Equipo comprometido</p>
          </div>
        </div>
      </div>

      <div class=".col-sm-1" ></div>

    </div>

    <br><br>

    <div class="row">

      <div class="col-sm-2"></div>

      <div class="col-sm-4">

        <div class="fourth card" style="border-bottom: solid; border-color: #43a047;" id="recuadro1">
          <h1 class="text-black">Mantén presionado aquí para mostrar información</h1>
        </div>

      </div>

      <div class="fourth col-sm-4" style="border-bottom: solid; border-color: #43a047;" id="recuadro2">
        <h1 class="text-black">Mantén presionado aquí para mostrar información</h1>  
      </div>

      <div class="col-sm-2"></div>
    </div>
    <br><br><br><br>

    <div class="d-flex justify-content-center align-items-center h-100">
      <p class="map text-black" style="font-size: 300%; font-family: Cabin;">¿En dónde nos ubicamos?</p>
    </div>

    <div id="map" class="map" style="height: 300px; width: 30%; margin-bottom: 20px;"> 
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

    <!-- Descripción larga-->
    <script>
      ScrollReveal().reveal('.first', { 
        distance: '60px',
        origin: 'left',
        duration: 500,
        delay: 500,
        easing: 'ease-in',
        reset: true
      });

      ScrollReveal().reveal('.second', { 
        duration: 500,
        delay: 500,
        easing: 'ease-in',
        reset: true
      });
      ScrollReveal().reveal('.third', { 
        distance: '60px',
        origin: 'right',
        duration: 500,
        delay: 500,
        easing: 'ease-in',
        reset: true 
      });
      ScrollReveal().reveal('.topp', {
        distance: '60px',
        origin: 'top',
        duration: 500,
        delay: 500,
        easing: 'ease-in',
        reset: true
      });
      ScrollReveal().reveal('.fourth', {
        distance: '60px',
        origin: 'bottom',
        duration: 500,
        delay: 500,
        easing: 'ease-in',
        reset: true
      });
      ScrollReveal().reveal('.textacerca', {
        duration: 500,
        delay: 1500,
        easing: 'ease-in',
        reset: true
      });
      ScrollReveal().reveal('.map', {
        distance: '60px',
        origin: 'bottom',
        duration: 500,
        delay: 500,
        easing: 'ease-in',
        reset: true
      });

      addEventListener('DOMContentLoaded',inicio,false);


      function inicio()
      {
        document.getElementById('recuadro3').addEventListener('mouseover',entrada,false);
        document.getElementById('recuadro3').addEventListener('mouseout',salida,false);
      }

//Cuando el cursor está dentro del recuadro
function entrada()
{
  document.getElementById('recuadro3').style.borderRadius='100px';
  document.getElementById('recuadro3').style.background='#00000';
}

//Cuando el cursor sal del recuadro
function salida() 
{
  document.getElementById('recuadro3').style.borderRadius='0px';
  document.getElementById('recuadro3').style.background='#00000';
}

//Está función es para hacer mas grande el recuadro y que vuelva a su tamaño normal
function bigImg(x) 
{
  x.style.height = "220px";
  x.style.width = "1200px";
}

function normalImg(x) {
  x.style.height = "220px";
  x.style.width = "1100px";
}
</script>


<!--Misión,ValoresyVisión -->
<script>
  addEventListener('DOMContentLoaded',iniciod,false);

  function iniciod()
  {
    document.getElementById('vision').addEventListener('mouseover',entradav,false);
    document.getElementById('vision').addEventListener('mouseout',salidav,false);
    document.getElementById('mision').addEventListener('mouseover',entradam,false);
    document.getElementById('mision').addEventListener('mouseout',salidam,false);
    document.getElementById('valores').addEventListener('mouseover',entradava,false);
    document.getElementById('valores').addEventListener('mouseout',salidava,false);
  }

//Cuando el cursor está dentro del recuadro
function entradav()
{
  document.getElementById('vision').style.borderRadius='30px';
  document.getElementById('vision').style.background='#2e7d32';
}

function entradam()
{
  document.getElementById('mision').style.borderRadius='30px';
  document.getElementById('mision').style.background='#2e7d32';
}

function entradava()
{
  document.getElementById('valores').style.borderRadius='30px';
  document.getElementById('valores').style.background='#2e7d32';
}

//Cuando el cursor sale del recuadro
function salidav() 
{
  document.getElementById('vision').style.borderRadius='30px';
  document.getElementById('vision').style.background='#0000';
  document.getElementById('vision').style.color='#782647';
}

function salidam()
{
  document.getElementById('mision').style.borderRadius='30px';
  document.getElementById('mision').style.background='#0000';  
}

function salidava()
{
  document.getElementById('valores').style.borderRadius='30px';
  document.getElementById('valores').style.background='#0000';  
}
</script>

<!--InformacionDeLaEmpresa-->
<script>
  addEventListener('DOMContentLoaded',inicio,false);

  function inicio()
  {
    document.getElementById('recuadro1').addEventListener('mousedown',presion1,false);
    document.getElementById('recuadro1').addEventListener('mouseup',presion3,true);
    document.getElementById('recuadro2').addEventListener('mousedown',presion2,false);
    document.getElementById('recuadro2').addEventListener('mouseup',presion4,true);
  }

//Texto que se muestra cuando se mantiene presionado
function presion1()
{
  document.getElementById('recuadro1').innerHTML='<h1 class="text-black display-4" style="font-weight:bold;">Desde 2018 ofreciendo servicio de seguros</h1>';
}

//Texto que se muestra cuando se mantiene presionado
function presion2()
{
  document.getElementById('recuadro2').innerHTML='<h1 class="text-black display-4" style="font-weight:bold;">Somos una empresa mexicana</h1>';
}

//Texto que se muestra cuando se suelta el boton
function presion3()
{
  document.getElementById('recuadro1').innerHTML='<h1 class="text-black">Presiona nuevamente para seguir leyendo</h1>';
} 

//Texto que se muestra cuando se suelta el boton
function presion4()
{
  document.getElementById('recuadro2').innerHTML='<h1 class="text-black">Presiona nuevamente para seguir leyendo</h1>';
}   
</script>



</center>

</body>
</html>

