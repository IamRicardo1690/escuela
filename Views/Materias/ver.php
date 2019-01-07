<div class="container">
      <?php
  if(mysqli_num_rows($datos)) {
    ?>
  <div class="row">
    <div class="col-">

    </div>
    <div class="col-md-4 offset-md-4">
      <br><button type="button" class="btn btn-info pdf">Imprimir</button>
    </div>
  </div>
 
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        
        <th scope="col">Alumno</th>
        <th scope="col"></th>
        <th scope="col"></th>
         <!-- <th scope="col">Editar</th>
        <th scope="col">Eliminar</th> -->
        <th scope="col">Unidad I</th>
        <th scope="col">Unidad II</th>
        <th scope="col">Unidad III</th> 
        <th scope="col">Unidad IV</th>
        <th scope="col">Unidad V</th>
        <th scope="col">Promedio</th>
      </tr>
    </thead>
    <tbody>
       <?php
              while ($fila=mysqli_fetch_assoc($datos[0]))
              {
          ?>

                  <tr>
                      <td scope="col"><?php echo $fila['ap_p']." ".$fila['ap_m']." ".$fila['nombre'] ?></td>
                      <td scope="col"></td>
                      <td scope="col"></td>
                      <td scope="col"><?php echo $fila['calificaciones'] ?></td>

                      <td scope="col"></td>
                      <td scope="col"></td>
                      <td scope="col"></td>
                      <td scope="col"></td>
                      <td scope="col"></td>
                  </tr>
         <?php
              }
          ?>
          
    </tbody>
  </table>
<script type="text/javascript">
  $(document).ready(function(){
 $(".pdf").click(function(){
        window.location.href="<?php echo URL ?>Reportematerias/imprimematerias";
      })
  })  

</script>