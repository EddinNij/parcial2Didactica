<?php
require_once('crud.php');
$datos=['codigo'=>$_POST['id'],'nombre'=>$_POST['txtNombre'],'fecha'=>$_POST['txtFecha']];
echo crud::actualizarDato($datos);
?>