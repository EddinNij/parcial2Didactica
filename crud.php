<?php
    require_once('conexion.php');
    class crud extends conexion{
        public function seleccionarDatos(){
            $miSql="select codigo, nombre, DATE_FORMAT(fecha, '%d/ %m /%Y') as fecha from datos";
            
            $query=conexion::conectar()->prepare($miSql);
            $query->execute();
            return $query->fetchAll();
            $query->close();
        }
        public function nuevoRegistro($datos){
            $miSql='insert into datos(nombre,fecha) values(:nombre, :fecha)';
            $query=conexion::conectar()->prepare($miSql);
            return $query->execute($datos);
            $query->close();
        }
        
        public function actualizarDatos($id){
            $miSql='select codigo, nombre, fecha from datos where codigo=:id';
            $query=conexion::conectar()->prepare($miSql);
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            $query->execute();            
            return $query->fetch();
            $query->close();
        }
        public function actualizarDato($datos){
            $miSql='update datos set nombre=:nombre, fecha=:fecha where codigo=:codigo';
            $query=conexion::conectar()->prepare($miSql);  
            //$query->bindParam(":codigo", $datos['codigo'], PDO::PARAM_INT);          
            return $query->execute($datos);
            $query->close();
        }

        public function eliminarDatos($id){
            $miSql='delete from datos where codigo=:id';
            $query=conexion::conectar()->prepare($miSql);
            $query->bindParam(":id", $id, PDO::PARAM_INT);            
            return $query->execute();
            $query->close();
        }
        
    }

?>