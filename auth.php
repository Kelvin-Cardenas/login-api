<?php
require_once 'clases/auth.class.php';

$_auth = new auth; 


if($_SERVER['REQUEST_METHOD'] == "POST"){
    //Recibir datos
    $postBody = file_get_contents("php://input");

    //Enviar datos al manejador
    $datosArray = $_auth->login($postBody);
    print_r(json_encode($datosArray));

}else{
    echo "Metodo no permitido";
}


?>