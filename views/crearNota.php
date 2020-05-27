<?php 
  require '../php/conexion.php';
  require '../php/cNota.php';
  $sql = "SELECT * FROM estudiante";
  $statement = $conn->prepare($sql);
  $statement->execute();
  $estudiantes = $statement->fetchAll(PDO::FETCH_OBJ);

  $sql2 = "SELECT * FROM curso";
  $statement2 = $conn->prepare($sql2);
  $statement2->execute();
  $cursos = $statement2->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrando Notas</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<header>
	<?php
		require 'navbar2.php';
	?>
</header>
<body>
    <main>        
      <!-- Formulario para registro de nuevo Viodejuego -->
      <form method="post" name="crearVideojuego" enctype="multipart/form-data">
        <h2> Nueva Nota</h2>  
        <div class="form-group">
            <div class="center">
                <label for="campoDescripcion">Alumno</label>
            </div>
            <div class="less">
                <select name="estudiante" 
                id="plataforma" 
                class="form-control">
                <?php foreach($estudiantes as $estudiante): ?>
                  <option value="<?= $estudiante->carne; ?>" class="form-control"><?= $estudiante->carne . ' ' . $estudiante->nombres . ' ' . $estudiante->apellidos;?></option>
                <?php endforeach; ?>
            </select>
            </div>
        </div>
        <div class="form-group">
            <div class="center">
                <label for="campoDescripcion">Curso</label>
            </div>
            <div class="less">
                <select name="curso" 
                id="plataforma" 
                class="form-control">
                <?php foreach($cursos as $curso): ?>
                  <option value="<?= $curso->id_curso; ?>" class="form-control"><?= $curso->nombre_curso; ?></option>
                <?php endforeach; ?>
            </select>
            </div>
        </div>
        <div class="form-group">
            <div class="center">
                <label for="campoNombre">Nota</label>
            </div>
            <div class="less">
                <input 
                  type="number" 
                  class="form-control" 
                  name="nota" 
                  required
                >
            </div>
        </div>
       
        <div class="form-group">
            <div class="center">
          <!-- Boton para enviar los datos a la base de datos -->
              <a onclick="return confirm('Esta seguro de registrar el la nota')">
                <button type="submit" 
                value="Registrar Inventario" 
                name ="send" 
                class="btn btn-info">Registrar Nota </button>
              </a>
            </div>
        </div>
      </form>
    <!-- Final formulario de Videojuego-->
    </main>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/export.js"></script>
 </body>
</html>