
<?php
session_start();
?>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">EPO 41</a>
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
      <a class="dropdown-item" href="#">Ver</a>
      <a class="dropdown-item" href="#">Acentar</a>
      <a class="dropdown-item" href="#">Modificar</a>
    </li>
      <a class="btn btn-outline-danger" style="position: relative; left: 455%;" href="<?php echo URL; ?>Login/logout">Salir</a>
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
      </li>
      <a class="btn btn-outline-danger" style="position: relative; left: 455%;" href="<?php echo URL; ?>Login/logout">Salir</a>
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
      <a class="dropdown-item" href="#">Materia</a>
      <a class="dropdown-item" href="#">Grupo</a>
      <a class="dropdown-item" href="#">Aprobacion</a>

    <?php }
      }
      ?>
      </li>
      <a class="btn btn-outline-danger" style="position: relative; left: 455%;" href="<?php echo URL; ?>Login/logout">Salir</a>
   </ul>



    <form class="form-inline my-2 my-lg-0" style="margin-left:1em;">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>



  <form class="form-inline my-2 my-lg-0" style="margin-left:1em;">
    <a class="btn btn-outline-primary" href="<?php echo URL; ?>Login">Login</a>

    </form>

  </div>

    <form class="form-inline my-2 my-lg-0" style="margin-left:1em;">
      <a class="btn btn-outline-primary" href="<?php echo URL; ?>Login/Registrar">Registro</a>

      </form>

  </div>
</div>
</div>
</nav>
