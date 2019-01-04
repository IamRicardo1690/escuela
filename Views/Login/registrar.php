<form id="form-reg" class="" action="<?php echo URL ?>login/guardar" method="post">
<div class="container">
        <div class="row center-form justify-content-center">
        <div class="registrar center-form col-sm-8" >
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    	<center>	<h3 class="panel-title">Bienvenido Por Favor Registrese</h3> </center>
			 			</div>
			 			<div class="panel-body">
			    		<form class="form-signin" role="form">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-4">
			    					<div class="form-group">
                      <p> <h6>Nombre</h6></p>
			                <input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-4">
			    					<div class="form-group">
                      <p> <h6>Apellido paterno</h6></p>
			    						<input type="text" name="ap_p" id="ap_p" class="form-control input-sm" placeholder="Apellido paterno">
			    					</div>
			    				</div>
                  <div class="col-xs-6 col-sm-6 col-md-4">
                    <div class="form-group">
                      <p> <h6>Apellido materno</h6></p>
                      <input type="text" name="ap_m" id="ap_m" class="form-control input-sm" placeholder="Apellido matarno">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-4">
                    <div class="form-group">
                      <p> <h6>Edad</h6></p>
                      <input type="int" name="edad" id="edad" class="form-control input-sm" placeholder="Edad">
                    </div>
                  </div>


  <div class="col-xs-6 col-sm-6 col-md-4">
			    			<div class="form-group">
                  <p> <h6>Sexo</h6></p>

                  <select class="form-control" name="id_sexo">
                    <option value="">Selecciona</option>
                      <?php
                      if (isset($datos)){
                        while ($fila = mysqli_fetch_assoc($datos[0])) { ?>
                          <option value="<?php echo $fila['id_sexo']?>"> <?php echo $fila["descripcion"] ?> </option>
                      <?php  }
                      } ?>

                  </select>

			    </div>
  </div>
  <div class="col-xs-6 col-sm-6 col-md-4">
                <div class="form-group">
                  <p> <h6>Usuario</h6></p>

                  <select class="form-control" name="id_tipo_usuario">
                    <option value="">Selecciona</option>
                      <?php
                      if (isset($datos)){
                        while ($fila = mysqli_fetch_assoc($datos[1])) { ?>
                          <option value="<?php echo $fila['id_tipo_usuario']?>"> <?php echo $fila["descripcion"] ?> </option>
                      <?php  }
                    } ?>
                    </select>
                </div>
              </div>



			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
                      <p><h6>Nombre de usuario</h6></p>
			    						<input type="nickname" name="nickname" id="nickname" class="form-control input-sm" placeholder="Nickname">
			    					</div>
			    				</div>

			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
                      <p> <h6>Contraseña</h6></p>
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>

                <div class="center-form col-xs-4 col-sm-4 col-md-4">

			    			    <center> <input type="submit" value="Registrar" class="form-control btn btn-success" id="registar"> </center>

                </div>

			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>

    </form>

    <script type="text/javascript">

    $("#registar").click(function()
      {
        $("#form-reg").submit();
      });

      //validaciones del formulario
    	jQuery.validator.addMethod("texto", function(value)
    	{
    		return /^[a-záéóóúàèìíòùäëïöüñ.\s]+$/i.test(value);
    	});

      $("#form-reg").validate({
        errorClass:"invalid",
		rules:
		{
			nombre:
			{
				required:true,
				texto:true,
			},
			ap_p:
			{
				required:true,
				texto:true,
			},
			ap_m:
			{
				required:true,
				texto:true,
			},
			edad:
			{
				required:true,
				texto:true,
			},
			id_sexo:
			{
				required:true,
                int:true,
			},
			id_tipo_usuario:
			{
				required:true,

			},
      nickname:
			{
				required:true,

			},
      password:
			{
				required:true,

			},
		},
		messages:
		{
			nombre:
			{
				required:"Nombre obligatorio",
				texto:"Solo puede introducir texto"
			},
			ap_p:
			{
				required:"Apellido paterno obligatorio",
				texto:"Solo puede introducir texto"
			},
			ap_m:
			{
				required:"Apellido materno obligatorio",
				texto:"Solo puede introducir texto"
			},
			edad:
			{
				required:"Edad obligatoria",

			},
			id_sexo:
			{
				required:"Sexo obligatorio",
			},
			id_tipo_usuario:
			{
				required:"Tipo de usuario obligatoria",

			},
      nickname:
      {
        required:"Nombre de usuario obligatoria",

      },
      password:
      {
        required:"Contraseña obligatoria",

      },
		},
  });


</script>
