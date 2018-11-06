
<div class="container ">

  <?php
  if(mysqli_num_rows($datos)>0) {
    ?>

<table class="table table-striped ">
<h2> <p>APLICACIONES WEB</p> </h2>
  <thead class="shead dark thead-dark">

    <tr>
      <th scope="col">Nombre del Alumno</th>
      <th scope="col">Unidad 1</th>
      <th scope="col">Unidad 2</th>
      <th scope="col">Unidad 3</th>
      <th scope="col">Unidad 4</th>
      <th scope="col">Promedio</th>
      <th scope="col">Eliminar</th>
      <th scope="col">Modificar</th>


    </tr>
  </thead>

  <tbody>

    <?php

    while ($fila=mysqli_fetch_assoc($datos)) { ?>
      <tr>
        <th scope="col"> <?php echo $fila['ap_p']." ".$fila['ap_m']." ".$fila['nombre'] ?> </th>
        <td scope="col"> Mark</td>
        <td scope="col"> Otto</td>
        <td scope="col"> @mdo</td>
        <td scope="col"> @mdo</td>
        <td scope="col"> @mdo</td>
        <th scope="col"> <a class="btn btn-outline-danger" href="<?php echo URL ?>Calificaciones/eliminar/<?php echo $fila['id_usuario'] ?>">Eliminar</a> </th>
      
        <th scope="col"> <button class="btn btn-outline-success editar" id="<?php echo $fila['id_usuario'] ?>">Modificar</button> </th>
        </tr>

<?php    }     ?>

  </tbody>
</table>
<?php
} else { ?>
  <h2>no se</h2>
<?php } ?>
</div>


<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
        <div class="modal-dialog"> 
            <div class="modal-content">
                <!-- Header--> 
                <div class="modal-header"> 
                    <button type="button" class="close" data-dismiss="modal"> 
                        <span aria-hidden="true">&times;</span> 
                        <span class="sr-only">Close</span> 
                    </button> 
                    <h4 class="modal-title" id="myModalLabel">
                        Eliminar
                    </h4> 
                </div>
                <!-- Body --> 
                <div class="modal-body">
                    Seguro que desea eliminar el registro???
                </div>
                <!-- Footer --> 
                <div class="modal-footer"> 
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button> 
                    <button type="button" class="btn btn-success" id="btn_delete">Confirmar</button> 
                </div>
            </div>
        </div>
    </div>






<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog ">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title">Actualizacion de datos</h5>
        <button type="button" class="close"
              data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body ">
        <form class="row form-signin" action="" method="post" id="actualizacion">
          <input type="text" hidden name="id" id="id" value="">
          <div class=" form-group col-xs-6 col-sm-6 col-md-4">
            <p for="nombre">Nombre</p>
            <input type="text" class="form-control "
              id="nombre" name="nombre"></input>
            <label for="nombre">Nombre</label>
          </div>
          <div class="form-group col-xs-6 col-sm-6 col-md-4">
            <p for="ap_p">Apellido Paterno</p>
            <input type="text" class="form-control"
              id="ap_p" name="ap_p"></input>
            
          </div>
          <div class="form-group col-xs-6 col-sm-6 col-md-4">
            <p for="ap_m">Apellido Materno</p>
            <input type="text" class="form-control"
              id="ap_m" name="ap_m"></input>
              
          </div>
          <div class="form-group col-xs-6 col-sm-6 col-md-4">
            <p for="edad">Edad</p>
            <input type="text" class="form-control" id="edad" name="edad"></input>
              
          </div>



        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success actualiza"
          data-dismiss="modal">Guardar</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){


    $(".editar").click(function(){
      var id=$(this).attr('id');
      $.post("<?php echo URL ?>Calificaciones/get/"+id,{},function(data){
        if(data){
          data=JSON.parse(data)
          $("#id").val(data['id_usuario'])
          $("#nombre").val(data['nombre'])
          $("#ap_p").val(data['ap_p'])
          $("#ap_m").val(data['ap_m'])
          $("#edad").val(data['edad'])
          $("#myModal").modal('show');
        }
      })
    })
    $(".actualiza").click(function(){
      var arreglo=$("#actualizacion").serializeArray();
      $.post("<?php echo URL ?>Calificaciones/edit/",{arreglo:arreglo},function(data){
        window.location.href="<?php echo URL ?>Calificaciones/ver";
      })
    })
  })
</script>