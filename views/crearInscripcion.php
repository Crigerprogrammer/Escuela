<?php 
  require '../php/conexion.php';
  require '../php/cInscripcion.php';
  $sql = "SELECT * FROM estudiante";
  $statement = $conn->prepare($sql);
  $statement->execute();
  $estudiantes = $statement->fetchAll(PDO::FETCH_OBJ);

  $sql2 = "SELECT * FROM grado";
  $statement2 = $conn->prepare($sql2);
  $statement2->execute();
  $grados = $statement2->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscripcion</title>
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
        <h2> Nueva Inscripcion</h2>  
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
                <label for="campoDescripcion">Grado</label>
            </div>
            <div class="less">
                <select name="grado" 
                id="plataforma" 
                class="form-control">
                <?php foreach($grados as $grado): ?>
                  <option value="<?= $grado->id_grado; ?>" class="form-control"><?= $grado->nombre; ?></option>
                <?php endforeach; ?>
            </select>
            </div>
        </div>
        <div class="form-group">
            <div class="center">
                <label for="campoNombre">Fecha Inscripcion</label>
            </div>
            <div class="less">
                <input 
                  type="date" 
                  class="form-control" 
                  name="fecha" 
                  required
                >
            </div>
        </div>
        <div class="form-group">
            <div class="center">
                <label for="campoNombre">Monto a Pagar</label>
            </div>
            <div class="less">
                <input 
                  type="number" 
                  class="form-control" 
                  name="monto" 
                  required
                >
            </div>
        </div>
       
        <div class="form-group">
            <div class="center">
          <!-- Boton para enviar los datos a la base de datos -->
              <a onclick="return confirm('Esta seguro de registrar la inscripcion')">
                <button type="submit" 
                value="Registrar Inventario" 
                name ="send" 
                class="btn btn-info">Registrar Inscripcion </button>
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