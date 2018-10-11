<div class="container">
    <div class="row justify-content-center"><div></div>
        <div class="col-sm-6">
            <h4 class="row justify-content-center">Sign In to TESVB </h4><span class="glyphicon glyphicon-pencil"></span>
          <form class="form-signin" method="post" action="<?php echo URL ?>login/verify" id="form_login">

          <div class="form-group ">
            <label for="exampleInputEmail1">Usuario</label>
            <input type="text" class="form-control" placeholder="Nombre de Usuario" id="usuario" name="usuario">

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control"  id="exampleInputPassword1" placeholder="Password" id="contraseña" name="contraseña">
          </div>
            <label class="form-check-label" for="exampleCheck1">Check me out</label>

          <div class="form-group">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">


       <button type="submit" name="login-submit" tabindex="6" class="form-control btn btn-success" id="entrar">Submit</button>

          </div>
          </div>
          </div>

        </form>
        </div>

    </div>

</div>
