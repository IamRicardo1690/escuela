
<?php
session_start();
?>
<nav class="navbar navbar-expand-md navbar-dark fixed-top navbar-light" style="background-color: #000000;">
  <a class="navbar-brand" href="#">Escuela Preparatoria Oficial No. 41</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">

      <?php
    if(isset($_SESSION['id_usuario']))
    {
        if (isset($_SESSION['id_tipo_usuario']) AND $_SESSION['id_tipo_usuario']== 1)
        {
        echo $_SESSION['nombre'];
        ?>



      <li class="nav-item dropdown" style="margin-left:1em;">
        <a class="nav-link dropdown-toggle  " data-toggle="dropdown" href="#" id="dropdown01" role="button" aria-haspopup="true" aria-expanded="false">Calificaciones</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="<?php echo URL; ?>Calificaciones/ver">Ver</a>
            <a class="dropdown-item" href="#">Acentar</a>
            <a class="dropdown-item" href="#">Modificar</a>
      </li>
      <?php
      }
      else
if (isset($_SESSION['id_tipo_usuario']) AND $_SESSION['id_tipo_usuario']== 2)
{
echo $_SESSION['nombre'];
?>


      <li class="nav-item dropdown" style="margin-left:1em;">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="dropdown02" role="button" aria-haspopup="true" aria-expanded="false">Materias</a>
        <div class="dropdown-menu" aria-labelledby="dropdown02">
            <a class="dropdown-item" href="#">Asignar</a>
            <a class="dropdown-item" href="#">Calificaciones</a>
            <a class="dropdown-item" href="#">Reportes</a>
      </li>
      <?php
      }
      else
      if (isset($_SESSION['id_tipo_usuario']) AND $_SESSION['id_tipo_usuario']== 3)
      {
      echo $_SESSION['nombre'];
      ?>

      <li class="nav-item dropdown" style="margin-left:1em;">
        <a class="nav-link dropdown-toggle"  data-toggle="dropdown" href="#" id="dropdown03" role="button" aria-haspopup="true" aria-expanded="false">Reportes</a>
          <div class="dropdown-menu" aria-labelledby="dropdown03">
            <a class="dropdown-item" href="#">Materias</a>
            <a class="dropdown-item" href="#">Grupos</a>
            <a class="dropdown-item" href="#">Aprobacion</a>

    <?php }
      }
      ?>
      </li>

   </ul>

    <form class="form-inline my-2 my-lg-0" style="margin-left:1em;">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

    <form class="form-inline my-2 my-lg-0" style="margin-left:1em;">
      <a class="btn btn-outline-primary" href="<?php echo URL; ?>Home/index">Home</a>
    </form>

<!--de aqui para arriba tienes un desmadre-->

<!--adentro de este pones otras condiciones iguales para validar que tipo menu quieres para el usuario-->
<?php if (isset($_SESSION['id_tipo_usuario']))
{
?>
    <form class="form-inline my-2 my-lg-0" style="margin-left:1em;">
      <a class="btn btn-outline-danger" href="<?php echo URL; ?>Login/logout">Salir</a>
    </form>
<?php
}
else
//esta parte es el nav para los que no esten logueados
{
?>
    <form class="form-inline my-2 my-lg-0" style="margin-left:1em;">
        <a class="btn btn-outline-primary" href="<?php echo URL; ?>Login">Login</a>
    </form>
    <form class="form-inline my-2 my-lg-0" style="margin-left:1em;">
      <a class="btn btn-outline-primary" href="<?php echo URL; ?>Login/Registrar">Registro</a>
    </form>

<?php
}
?>

</div>
</div>
</nav>
