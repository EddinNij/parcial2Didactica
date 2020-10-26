<?php
class conexion{
    public function conectar(){
        $usuario='id13722643_user';
        $contrasena='Oh*U<%%z';
        $conectar=new pdo('mysql:host=localhost;dbname=id13722643_parcial2', $usuario, $contrasena);//instancia de PDO
        return $conectar;       
    }
}
?>