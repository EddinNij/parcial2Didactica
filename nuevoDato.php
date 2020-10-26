<?php
    require_once('crud.php');
    $datos=['nombre'=>$_POST['txtNombre'],'fecha'=>$_POST['txtFecha']];
    echo crud::nuevoRegistro($datos);
    
?>