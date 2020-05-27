<?php 
  require '../php/conexion.php';
  $sql = "SELECT e.carne as carne, e.nombres as nombres, e.apellidos as apellidos, c.nombre_curso as curso, n.nota as nota 
FROM estudiante e, curso c, nota n WHERE n.carne = e.carne AND n.id_curso = c.id_curso";
  $statement = $conn->prepare($sql);
  $statement->execute();
  $notas = $statement->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Consultando Notas</title>
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
      <th>Curso</th>
      <th>Nota</th>
    </tr>
    <?php foreach($notas as $nota): ?>
    <tr>
      <td><?= $nota->carne; ?></td>
      <td><?= $nota->nombres; ?></td>
      <td><?= $nota->apellidos; ?></td>
      <td><?= $nota->curso; ?></td>
      <td><?= $nota->nota; ?></td>
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