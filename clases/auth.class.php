<?php
require_once 'conexion/conexion.php';


class auth extends conexion{

    public function login($json){
      
        
        $datos = json_decode($json,true);
        if(!isset($datos['usuario']) || !isset($datos['contrasena'])){
            //Error al ingresar los campos
            echo "Error al ingresar los datos.";
        }else{
            //Se ingreso al login
            $usuario = $datos['usuario'];
            $contrasena = $datos['contrasena'];
            $datos = $this->obtenerDatosUsuario($usuario);

            $conexion = new conexion;
            $query = "SELECT * FROM usuario WHERE usuario = '$usuario'";
            print_r($conexion->obtenerDatos($query));

            if($datos){
                //Comprobar la contraseña
                if($contrasena == $datos[0]['contrasena']){
                    echo "";
                }else{
                    echo "La contraseña es incorrecta."."\n";
                }
            }

        }

    }


    private function obtenerDatosUsuario($user){
        $query = "SELECT id,usuario,nombre,apellido,contrasena FROM usuario WHERE usuario = '$user'";
        $datos = parent::obtenerDatos($query);
        if(isset($datos[0]["id"])){
            return $datos;
        }else{
            return 0;
        }
    }

}


?>