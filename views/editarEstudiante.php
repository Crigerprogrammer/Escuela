<?php 
    require '../php/conexion.php';
    require '../php/eEstudiante.php';

    if(isset($_GET['editar'])){
        $id_editar = $_GET['editar'];

        $sql = "SELECT * FROM estudiante WHERE carne = '$id_editar'";
        $statement = $conn->prepare($sql);
        $statement->execute();
        $estudiantes = $statement->fetchAll(PDO::FETCH_OBJ);
    }
    foreach($estudiantes as $estudiante):
      $car = $estudiante->carne;
      $nom = $estudiante->nombres;
      $ape = $estudiante->apellidos;
      $fec = $estudiante->fecha_alta;
      $eda = $estudiante->edad;
      endforeach;
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Estudiante</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<header>
	<?php
		require 'navbar2.php';
	?>
</header>
      <form method="post" name="crearEstudiante" enctype="multipart/form-data">
        <h2> Editar Estudiante</h2>  
        <div class="form-group ocultar">
            <div class="center ocultar">
                <label for="campoNombre">Carne</label>
            </div>
            <div class="less ocultar">
                <input 
                  type="number" 
                  class="form-control" 
                  name="carne"  
                  value="<?php echo $car; ?>"
                  required
                >
            </div>
        </div>
        <div class="form-group">
            <div class="center">
                <label for="campoNombre">Nombres</label>
            </div>
            <div class="less">
                <input 
                  type="text" 
                  class="form-control" 
                  name="nombre"
                  value="<?php echo $nom; ?>"  
                  required
                >
            </div>
        </div>
        <div class="form-group">
            <div class="center">
                <label for="campoNombre">Apellidos</label>
            </div>
            <div class="less">
                <input 
                  type="text" 
                  class="form-control" 
                  name="apellido"
                  value="<?php echo $ape; ?>" 
                  required
                >
            </div>
        </div>
        <div class="form-group">
            <div class="center">
                <label for="campoNombre">Fecha Alta</label>
            </div>
            <div class="less">
                <input 
                  type="date" 
                  class="form-control" 
                  name="fecha"  
                  value="<?php echo $fec; ?>"
                  required
                >
            </div>
        </div>
        <div class="form-group">
            <div class="center">
                <label for="campoNombre">Edad</label>
            </div>
            <div class="less">
                <input 
                  type="number" 
                  class="form-control" 
                  name="edad"  
                  value="<?php echo $eda; ?>"
                  required
                >
            </div>
        </div>
 
        <div class="form-group">
            <div class="center">
          <!-- Boton para enviar los datos a la base de datos -->
              <a onclick="return confirm('Esta seguro de Editar al Estudiante')">
                <button type="submit" 
                value="Registrar Estudiante" 
                name ="send" 
                class="btn btn-info">Editar Estudiante </button>
              </a>
            </div>
        </div>
      </form>
    </main>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/export.js"></script>
 </body>
</html>