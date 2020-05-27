<?php 
  require '../php/conexion.php';
  require '../php/cCurso.php';
  $sql = "SELECT * FROM grado";
  $statement = $conn->prepare($sql);
  $statement->execute();
  $grados = $statement->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrando Curso</title>
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
        <h2> Nuevo Curso</h2>  
        <div class="form-group">
            <div class="center">
                <label for="campoNombre">Nombre Curso</label>
            </div>
            <div class="less">
                <input 
                  type="text" 
                  class="form-control" 
                  id="nombre" 
                  name="curso" 
                  required
                >
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
          <!-- Boton para enviar los datos a la base de datos -->
              <a onclick="return confirm('Esta seguro de registrar el Curso')">
                <button type="submit" 
                value="Registrar Inventario" 
                name ="send" 
                class="btn btn-info">Registrar Curso </button>
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