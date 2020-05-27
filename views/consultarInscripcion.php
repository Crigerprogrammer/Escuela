<?php 
  require '../php/conexion.php';
  $sql = "SELECT e.carne as carne, e.nombres as nombres, e.apellidos as apellidos, i.fecha_inscripcion as fecha, g.nombre as grado, i.monto as monto
FROM estudiante e, inscripcion i, grado g WHERE i.carne = e.carne AND i.id_grado = g.id_grado";
  $statement = $conn->prepare($sql);
  $statement->execute();
  $inscripciones = $statement->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Consultando Incripciones</title>
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
      <th>Carne</th>
      <th>Nombres</th>
      <th>Apellidos</th>
      <th>Fecha Inscripcion</th>
      <th>Grado</th>
      <th>Monto</th>
    </tr>
    <?php foreach($inscripciones as $inscripcion): ?>
    <tr>
      <td><?= $inscripcion->carne; ?></td>
      <td><?= $inscripcion->nombres; ?></td>
      <td><?= $inscripcion->apellidos; ?></td>
      <td><?= $inscripcion->fecha; ?></td>
      <td><?= $inscripcion->grado; ?></td>
      <td><?= $inscripcion->monto; ?></td>
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