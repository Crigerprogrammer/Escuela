<?php 
  require '../php/conexion.php';
  $sql = "SELECT c.id_curso as codigo, c.nombre_curso as nombre_curso, g.nombre as nombre_grado FROM curso c, grado g WHERE c.id_grado = g.id_grado ";
  $statement = $conn->prepare($sql);
  $statement->execute();
  $cursos = $statement->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Consultando Cursos</title>
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
      <th>Codigo del Curso</th>
      <th>Nombre Curso</th>
      <th>Grado donde se Imparte</th>
      <th>Eliminar</th>
    </tr>
    <?php foreach($cursos as $curso): ?>
    <tr>
      <td><?= $curso->codigo; ?></td>
      <td><?= $curso->nombre_curso; ?></td>
      <td><?= $curso->nombre_grado; ?></td>
      <td> <button type="button" class="btn btn-danger"><a onclick="return confirm('Esta seguro de eliminar al Estudiante?')" href="../php/dCurso.php?borrar=<?php echo $curso->codigo ?>"> Eliminar </button>  </td></a>
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