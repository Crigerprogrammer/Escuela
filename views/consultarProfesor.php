<?php 
  require '../php/conexion.php';
  $sql = "SELECT * FROM profesor";
  $statement = $conn->prepare($sql);
  $statement->execute();
  $profesores = $statement->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Consultando Profesores</title>
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
      <th>Codigo Profesor</th>
      <th>Nombres</th>
      <th>Apellidos</th>
      <th>Fecha Alta</th>
      <th>Salario</th>
      <th>Editar</th>
      <th>Eliminar</th>
    </tr>
    <?php foreach($profesores as $profesor): ?>
    <tr>
      <td><?= $profesor->id_profesor; ?></td>
      <td><?= $profesor->nombres; ?></td>
      <td><?= $profesor->apellidos; ?></td>
      <td><?= $profesor->fecha_alta; ?></td>
      <td><?= $profesor->salario; ?></td>
      <td> <button type="button" class="btn btn-warning"><a href="editarProfesor.php?editar=<?php echo $profesor->id_profesor ?>"> Editar </button></td></a>
      <td> <button type="button" class="btn btn-danger"><a onclick="return confirm('Esta seguro de eliminar al Profesor?')" href="../php/dProfesor.php?borrar=<?php echo $profesor->id_profesor ?>"> Eliminar </button>  </td></a>
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