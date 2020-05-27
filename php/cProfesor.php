<?php 
require ("conexion.php");

if(isset($_POST['nombre'])){
    $nom = $_POST['nombre'];
    $ape = $_POST['apellido'];
    $fec = $_POST['fecha'];
    $sal = $_POST['salario'];


    $sql = "INSERT INTO profesor(nombres, apellidos , fecha_alta, salario)
            VALUES('".$nom."','".$ape."','".$fec."',".$sal.")";
    $statement = $conn->prepare($sql);

    if($statement->execute()){
        $mensaje = "Profesor Agregado Correctamente";
        echo '<div class="alert alert-success">';
        echo $mensaje;
        echo '</div>';
    } else{
    	echo "Error";
    }
}

?>