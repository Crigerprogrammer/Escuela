<?php 
require ("conexion.php");

if(isset($_POST['carne'])){
    $car = $_POST['carne'];
    $nom = $_POST['nombre'];
    $ape = $_POST['apellido'];
    $fec = $_POST['fecha'];
    $eda = $_POST['edad'];


    $sql = "UPDATE estudiante SET  nombres = '".$nom."', apellidos = '".$ape."', fecha_alta = '".$fec."', edad = '".$eda."'
        WHERE carne = '".$car."' ";
    $statement = $conn->prepare($sql);

    if($statement->execute()){
        $mensaje = "Estudiante Editado Correctamente";
        echo '<div class="alert alert-success">';
        echo $mensaje;
        echo '</div>';
    } else{
    	echo "Error";
    }
}

?>