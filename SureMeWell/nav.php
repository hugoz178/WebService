<?php 
session_start();
include 'boot.php'; 
?>
<?php  
if (isset($_SESSION['correo'])) {
?>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black; padding-right: 5%; padding-left: 5%;">
<?php  
}else{
?>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #00C851; padding-right: 5%; padding-left: 5%;">  
<?php  
}
?>
  <!-- Navbar brand -->
  <a class="navbar-brand " href="index.php" style="font-weight: bold;">SureMeWell</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="basicExampleNav">

  <!-- Links -->
  <ul class="navbar-nav mr-auto">
    
    <li class="nav-item">
      <a class="nav-link" href="acerca.php" style="padding-right: 15px;">Acerca de nosotros</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="mapa.php">Mapa del sitio</a>
    </li>

    <?php  
    if (isset($_SESSION['correo'])) {
      $tipo = $_SESSION['tipo'];
      if ($tipo == 'usuario'){
    ?>

    <li class="nav-item">
      <a class="nav-link" href="contact.php" style="padding-right: 15px; padding-left: 15px;">Contáctanos</a>
    </li>
    <?php  
      }
    ?>
    <li class="nav-item">
      <a class="nav-link" href="f.php" style="padding-right: 15px;">Tu experiencia</a>
    </li>

    <?php  
    }
    ?>

  </ul>
  <!-- Links -->

  <?php  
  if (isset($_SESSION['correo'])) {
    ?>
    <ul class="navbar-nav">
      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a
        class="nav-link dropdown-toggle"
        
        id="navbarDropdownMenuLink"
        role="button"
        data-mdb-toggle="dropdown"
        aria-expanded="false">
      </a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

        <a class="dropdown-item" href="cerrarsesion.php">Cerrar sesión</a>

      </ul>
    </li>
  </ul>

  <label style="font-weight: bold; padding-top: 5px; color: white;"><?php echo $_SESSION['nombre'];?></label>
  
  <?php
} else{
  ?>

  <!-- Inicio de sesion -->
<ul class="navbar-nav">
      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a
        class="nav-link dropdown-toggle"
        
        id="navbarDropdownMenuLink"
        role="button"
        data-mdb-toggle="dropdown"
        aria-expanded="false">
      </a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

        <a class="dropdown-item" href="recuperar.php" style="color: blue;">¿Olvidaste tu contraseña?</a>

      </ul>
    </li>
  </ul>
  <form action="login1.php" method="POST" class="form-inline "class="needs-validation" novalidate>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">

      </li>
    </ul>

    <div class="md-form my-0">
      <input class="form-control mr-sm-2" name="correo" id="correo" type="email" placeholder="Correo">
      <input class="form-control mr-sm-2" name="contrasena" id="contrasena"  type="password" placeholder="Contraseña"> 
      <input type="submit" class="btn white-text" style="background-color: #00e676; margin-left: 20px; margin-top: 10px;" value="Entrar">
    </div>

  </form>

  <?php  
include'boot.php'; }
?>

</div>

</nav>