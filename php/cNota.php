<?php 
require ("conexion.php");

if(isset($_POST['estudiante'])){
    $est = $_POST['estudiante'];
    $cur = $_POST['curso'];
    $not = $_POST['nota'];


    $sql = "INSERT INTO nota(carne, id_curso , nota)
            VALUES('".$est."','".$cur."','".$not."')";
    $statement = $conn->prepare($sql);

    if($statement->execute()){
        $mensaje = "Nota Agregada Correctamente";
        echo '<div class="alert alert-success">';
        echo $mensaje;
        echo '</div>';
    } else{
    	echo "Error";
    }
}

?>