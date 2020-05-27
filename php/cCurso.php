<?php 
require ("conexion.php");

if(isset($_POST['curso'])){
    $cur = $_POST['curso'];
    $grad = $_POST['grado'];


    $sql = "INSERT INTO curso(nombre_curso, id_grado)
            VALUES('".$cur."',".$grad.")";
    $statement = $conn->prepare($sql);

    if($statement->execute()){
        $mensaje = "Curso Agregado Correctamente";
        echo '<div class="alert alert-success">';
        echo $mensaje;
        echo '</div>';
    } else{
    	echo "Error";
    }
}

?>