
<?php


require_once "clases/conexion/conexion.php";

$conexion = new conexion;

$query = "SELECT * FROM usuario";

print_r($conexion->obtenerDatos($query));



?>


hola index