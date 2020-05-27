<?php 
require ("conexion.php");

if(isset($_POST['nombre'])){
    $cod = $_POST['codigo'];
    $nom = $_POST['nombre'];
    $ape = $_POST['apellido'];
    $fec = $_POST['fecha'];
    $sal = $_POST['salario'];


    $sql = "UPDATE profesor SET  nombres = '".$nom."', apellidos = '".$ape."', fecha_alta = '".$fec."', salario = '".$sal."'
        WHERE id_profesor = '".$cod."' ";
    $statement = $conn->prepare($sql);

    if($statement->execute()){
        $mensaje = "Profesor Editado Correctamente";
        echo '<div class="alert alert-success">';
        echo $mensaje;
        echo '</div>';
    } else{
    	echo "Error";
    }
}

?>