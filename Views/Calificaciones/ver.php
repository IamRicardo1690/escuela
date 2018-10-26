
<div class="container ">

  <?php
  if(mysqli_num_rows($datos)>0) {
    ?>

<table class="table table-striped">
<h2> <p>APLICACIONES WEB</p> </h2>
  <thead class="shead dark">

    <tr>
      <th scope="col">Nombre del Alumno</th>
      <th scope="col">Unidad 1</th>
      <th scope="col">Unidad 2</th>
      <th scope="col">Unidad 3</th>
      <th scope="col">Unidad 4</th>
      <th scope="col">Promedio</th>
      <th scope="col">Acciones</th>


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
        <th scope="col"> <a class="btn btn-info btn-danger" href="<?php echo URL ?>Calificaciones/eliminar/<?php echo $fila['id_usuario'] ?>">Eliminar</a> </th>
        </tr>

<?php    }     ?>

  </tbody>
</table>
<?php
} else { ?>
  <h2>no se</h2>
<?php } ?>
</div>
