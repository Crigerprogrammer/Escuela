<?php 
  require '../php/conexion.php';
  $sql = "SELECT * FROM estudiante";
  $statement = $conn->prepare($sql);
  $statement->execute();
  $estudiantes = $statement->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Consultando Estudiantes</title>
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
      <th>Carné Estudiante</th>
      <th>Nombres</th>
      <th>Apellidos</th>
      <th>Fecha Alta</th>
      <th>Edad</th>
      <th>Editar</th>
      <th>Eliminar</th>
    </tr>
    <?php foreach($estudiantes as $estudiante): ?>
    <tr>
      <td><?= $estudiante->carne; ?></td>
      <td><?= $estudiante->nombres; ?></td>
      <td><?= $estudiante->apellidos; ?></td>
      <td><?= $estudiante->fecha_alta; ?></td>
      <td><?= $estudiante->edad; ?></td>
      <td> <button type="button" class="btn btn-warning"><a href="editarEstudiante.php?editar=<?php echo $estudiante->carne ?>"> Editar </button></td></a>
      <td> <button type="button" class="btn btn-danger"><a onclick="return confirm('Esta seguro de eliminar al Videojuego?')" href="../php/dEstudiante.php?borrar=<?php echo $estudiante->carne ?>"> Eliminar </button>  </td></a>
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