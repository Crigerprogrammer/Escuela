<?php 
  require '../php/conexion.php';
  $sql = "SELECT g.nombre as nombre, g.descripcion as descripcion, p.nombres as nombres, p.apellidos as apellido FROM grado g, profesor p WHERE g.id_profesor = p.id_profesor";
  $statement = $conn->prepare($sql);
  $statement->execute();
  $grados = $statement->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Consultando Grados</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<header>
	<?php
		require 'navbar2.php';
	?>
</header>
<main>
    <table class="table table-bordered" style="width: 75% !important; margin:3% auto;">
    <tr>
      <th>Grado</th>
      <th>Descripcion</th>
      <th>Nombres Profesor</th>
      <th>Apellidos Profesor</th>
    </tr>
    <?php foreach($grados as $grado): ?>
    <tr>
      <td><?= $grado->nombre; ?></td>
      <td><?= $grado->descripcion; ?></td>
      <td><?= $grado->nombres; ?></td>
      <td><?= $grado->apellido; ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</main>
<body>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/export.js"></script>
 </body>
</html>