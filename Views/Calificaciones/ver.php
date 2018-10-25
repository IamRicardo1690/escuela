
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
      <th scope="col">Unidad 4 </th>
      <th scope="col">Promedio </th>
    </tr>
  </thead>

  <tbody>

    <?php

    while ($fila=mysqli_fetch_assoc($datos)) { ?>
      <tr>
        <th scope="col"> <?php echo $fila['ap_p']." ".$fila['ap_m']." ".$fila['nombre'] ?> </th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
      </tr>

<?php    }     ?>

  </tbody>
</table>
<?php
} else { ?>
  <h2>no se</h2>
<?php } ?>
</div>
