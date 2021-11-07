<?php 
include 'conexion.php';
include 'boot.php'; 
?>
<body style="background-color: black;">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Usuario</th>
      <th scope="col">Telefono</th>
      <th scope="col">Correo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
      $sql="SELECT * FROM usuarios";
      $result=mysqli_query($conexion,$sql);
      while ($mostrar=mysqli_fetch_array($result)) {
        ?>
        <tr>
          <td><?php echo $mostrar['nombre']?></td>
          <td><?php echo $mostrar['usuario']?></td>
          <td><?php echo $mostrar['telefono']?></td>
          <td><?php echo $mostrar['correo']?></td>
          <?php
        }
        ?>
      </tr>
    </tr>
  </tbody>
</table>
</body>