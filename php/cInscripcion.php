<?php 
require ("conexion.php");

if(isset($_POST['estudiante'])){
    $est = $_POST['estudiante'];
    $gra = $_POST['grado'];
    $fec = $_POST['fecha'];
    $mon = $_POST['monto'];


    $sql = "INSERT INTO inscripcion(carne, fecha_inscripcion , id_grado, monto)
            VALUES('".$est."','".$fec."','".$gra."','".$mon."')";
    $statement = $conn->prepare($sql);

    if($statement->execute()){
        $mensaje = "Inscripcion Agregada Correctamente";
        echo '<div class="alert alert-success">';
        echo $mensaje;
        echo '</div>';
    } else{
    	echo "Error";
    }
}

?>