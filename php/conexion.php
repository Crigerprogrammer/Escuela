<?php 
$servername = '(localdb)\VIDEOJUEGOS';
try  
{  
    $conn = new PDO( "sqlsrv:server=$servername ; Database=escuela", "videojuego", "123456");  
}  catch(PDOExcepction $e) {
    echo $e;
}


