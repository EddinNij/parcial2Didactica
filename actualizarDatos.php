<?php
require_once('crud.php');
$id=$_POST['id'];
echo json_encode(crud::actualizarDatos($id));
?>