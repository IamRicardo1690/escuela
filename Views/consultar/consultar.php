<form id="form-reg" class="" action="<?php echo URL ?>consultar/ver" method="post" i>
<div class="container">
        <div class="row center-form justify-content-center">
        <div class="registrar center-form col-sm-6" >
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    	<center>	<h3 class="panel-title">CONSULTAR CALIFICACION</h3> </center>
			 			</div>
			 			<div class="panel-body">
			    		<form class="form-signin" role="form">
			    			<div class="row">

    <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <p> <h6>GRUPO</h6></p>

                  <select class="form-control" name="id_grupo">
                    <option value="">Selecciona</option>
                      <?php
                      if (isset($datos)){
                        while ($fila = mysqli_fetch_assoc($datos[0])) { ?>
                          <option value="<?php echo $fila['id_grupo']?>"> <?php echo $fila["descripcion"] ?> </option>
                      <?php  }
                      } ?>

                  </select>

          </div>
  </div>

  <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <p> <h6>MATERIA</h6></p>

                  <select class="form-control" name="id_materia" >
                    <option value="">Selecciona</option>
                      <?php
                      if (isset($datos)){
                        while ($fila = mysqli_fetch_assoc($datos[1])) { ?>
                          <option value="<?php echo $fila['id_materia']?>"> <?php echo $fila["descripcion"] ?> </option>
                      <?php  }
                    } ?>
                    </select>
                </div>
              </div>



                <div class="form-group col-xs-6 col-sm-8 col-md-8">

			    			     <form class="form-control col-xs-6 col-sm-6 col-md-4" style="margin-left:1em;">
                       <a class="btn btn-outline-primary" id="muestra_calif" href="<?php echo URL; ?>Calificaciones/ver">Consultar</a>
                     </form>
                </div>

			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
    </form>

    <script type="text/javascript">
   $("#muestra_calif").click(function()
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
      id_grupo:
      {
        required:true,
        int: true,
      },
      id_materia:
      {
        required:true,
        int: true,
      },
    },
    messages:
    {
      grupo:
      {
        required:"Grupo obligatorio",
      },
      materia:
      {
        required:"Materia obligatoria",
      },
    },
  });

  //obtener valores para llenar select de grupos
</script>
