<?php
require_once('crud.php');
$id=$_POST['id'];
echo crud::eliminarDatos($id);
?>