<?php require '../php/cProfesor.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro Profesor</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<header>
	<?php
		require 'navbar2.php';
	?>
</header>
      <form method="post" name="crearEstudiante" enctype="multipart/form-data">
        <h2> Nuevo Profesor</h2>  
        <div class="form-group">
            <div class="center">
                <label for="campoNombre">Nombres</label>
            </div>
            <div class="less">
                <input 
                  type="text" 
                  class="form-control" 
                  name="nombre"
                  placeholder="Jonathan"  
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
                  placeholder="Ejem: Trejo"  
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
                  required
                >
            </div>
        </div>
        <div class="form-group">
            <div class="center">
                <label for="campoNombre">Salario</label>
            </div>
            <div class="less">
                <input 
                  type="number" 
                  class="form-control" 
                  name="salario"  
                  required
                >
            </div>
        </div>
 
        <div class="form-group">
            <div class="center">
          <!-- Boton para enviar los datos a la base de datos -->
              <a onclick="return confirm('Esta seguro de registrar al Profesor')">
                <button type="submit" 
                value="Registrar Estudiante" 
                name ="send" 
                class="btn btn-info">Registrar Profesor </button>
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