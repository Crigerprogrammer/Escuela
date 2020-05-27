<?php 
require ("conexion.php");

if(isset($_POST['carne'])){
    $car = $_POST['carne'];
    $nom = $_POST['nombre'];
    $ape = $_POST['apellido'];
    $fec = $_POST['fecha'];
    $eda = $_POST['edad'];


    $sql = "INSERT INTO estudiante(carne, nombres, apellidos, fecha_alta, edad)
            VALUES(".$car.",'".$nom."','".$ape."','".$fec."',".$eda.")";
    $statement = $conn->prepare($sql);

    if($statement->execute()){
        $mensaje = "Estudiante Agregado Correctamente";
        echo '<div class="alert alert-success">';
        echo $mensaje;
        echo '</div>';
    } else{
    	echo "Error";
    }
}

?>