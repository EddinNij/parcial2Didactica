<?php
    require_once('crud.php');
    $objetoCrud=new crud();
    $datos=$objetoCrud->seleccionarDatos();
    $cabeceraTabla='<table class="table table-hover table-dark table-bordered">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Nombre</th>
        <th scope="col">Fecha</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
        
      </tr>
    </thead>
    <tbody>';
    $cuerpoTabla="";
    foreach ($datos as $key => $contenido) {
      $cuerpoTabla=$cuerpoTabla."<tr>
                <td>".$contenido['codigo']."</td>
                <td>".$contenido['nombre']."</td>
                <td>".$contenido['fecha']."</td>    
                <td><button type='button' class='fas fa-edit btn btn-success' data-toggle='modal' data-target='#modalActualizar' onClick='actualizarDatos(".$contenido['codigo'].")'>
                Editar
              </button></td> 
                   
                <td><button type='button' class='fas fa-trash-alt btn btn-danger' data-toggle='modal' id='id' onClick='eliminarDatos(".$contenido['codigo'].")'>
                Eliminar
              </button></td>  
                        
            </tr>"  ;
    }
    echo $cabeceraTabla.$cuerpoTabla."</tbody></table>";
    
    

?>