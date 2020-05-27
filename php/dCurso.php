<?php 
require ("conexion.php");


if(isset($_GET['borrar'])){
    $id = $_GET['borrar'];

    $sql = "DELETE FROM curso WHERE id_curso = '$id'";
    $statement = $conn->prepare($sql);
    $statement->execute();
}

if($statement->execute()){
    $mensaje = "Eliminado correctamente";
    echo '<div class="alert alert-danger">';
    echo $mensaje;
    echo '</div>';
    header("location:../views/consultarCurso.php");
}

