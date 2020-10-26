<?php
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


    <title>index</title>
    
    
  </head>
  <body>
    <h1>USAC - EFPEM</h1>
    <H1>Didáctica de la programación</H1>
    <h1>Evaluación parcial II</h1>
    
    <center><h2>CRUD - PHP</h2></center>
    <!-- Button trigger modal -->
<button type="button" class="fa fa-plus-circle btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
  Nuevo registro
</button>
<br><br><br>
    
    <!-- espacio para la tabla -->
    <div class="row">
      <div class="col-sm-12">
        <div id="tabla">
      </div>
    </div>
    </div>          
    <!-- fin de la tabla  -->    
<!-- modal nuevo -->


<!-- Modal -->
<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Nuevo registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- formulario -->
        <form id="frmNuevo" onsubmit="return nuevoRegistro()" method="post">
       
        <div class="form-group">
    <label for="formGroupExampleInput">Ingresa tu nombre</label>
    <input type="text" class="form-control" name="txtNombre" placeholder="Ingresa tu nombre" required="">
  </div>
        
  <div class="form-group">
    <label for="example-date-input">Fecha</label>  
    <input class="form-control" type="date"  name="txtFecha" required="">  
  </div>       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
        <!-- fin del formulario -->
      </div>
    </div>
  </div>
</div>

<!-- fin modal nuevo -->

<!-- modal actualizar -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="modalActualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Actualizar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <!-- formulario -->
         <form id="frmActualizar" onsubmit="return actualizarDato()" method="post">         
         <input type="text" name="id" id="ida" hidden="">
       <div class="form-group">
   <label for="formGroupExampleInput">Editar nombre</label>
   <input type="text" class="form-control" name="txtNombre" id="txtNombrea" placeholder="Ingresa tu nombre" required="">
 </div>
       
 <div class="form-group">
   <label for="example-date-input">Editar fecha</label>  
   <input class="form-control" type="date"  name="txtFecha" id="txtFechaa" required="">  
 </div>     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- fin modal actualizar -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    
    <script src="crud.js"></script>
    <script src="sweetalert.min.js"></script>
    <script type="text/javascript">
        mostrarTabla();
       
    </script>
   
    

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    
  </body>
</html>