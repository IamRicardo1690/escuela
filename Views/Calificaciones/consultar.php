<form id="form-reg" class="" action="<?php echo URL ?>login/guardar" method="post" id="form_consulta_c">
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
                  <p> <h6>MATERIA</h6></p>

                  <select class="form-control" name="id_sexo" id="ciclo_es">
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

  <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <p> <h6>GRUPO</h6></p>

                  <select class="form-control" name="id_tipo_usuario" id="grupo">
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
    $("#form_consulta_c").submit();
    
  });
  get_all_semestres();
  get_all_grupos();
  get_all_ciclos();
  $("#form_consulta_c").validate({
    errorClass:"invalid",
    rules:
    {
      ciclo_es:
      {
        required:true,
      },
      semestre:
      {
        required:true,
      },
      grupo:
      {
        required:true,
      },
    },
    messages:
    {
      ciclo_es:
      {
        required:"Ciclo obligatoria",
      },
      semestre:
      {
        required:"Semestre obligatorio",
      },
      grupo:
      {
        required:"Grupo obligatorio",
      },
    },
    submitHandler:function(form)
    {
       var dataString = $('#form_consulta_c').serialize();

      $("#container_modalcalif").load("core/formularios/consulta_calif.php?"+dataString);
    }
  });
  function get_all_ciclos()
    {
      $.post("core/controllers/controller_ciclos.php",{action:"get_all"}, function(res)
      {
        var datos=JSON.parse(res);
        var cod_html="<option value='' disabled='true' selected>Selecciona un valor</option>";
        for (var i = 0; i < datos.length ; i++) 
        {
          var info=datos[i];
          cod_html+="<option value='"+info["id_ciclo"]+"'>"+info["des_ciclo"]+"</option>";
        }
        $("#ciclo").html(cod_html);
      });
    }
  function get_all_semestres()
  {
    $.post("core/controllers/controller_semestres.php",{action:"get_all"}, function(res)
    {
      var datos=JSON.parse(res);
      var cod_html="<option value='' disabled='true' selected>Selecciona un valor</option>";
      for (var i = 0; i < datos.length ; i++) 
      {
        var info=datos[i];
        cod_html+="<option value='"+info["id_semestre"]+"'>"+info["des_semestre"]+"</option>";
      }
      $("#sem").html(cod_html);
    });
  }
  //obtener valores para llenar select de grupos
  function get_all_grupos()
  {
    $.post("core/controllers/controller_grupos.php",{action:"get_all"}, function(res)
    {
      var datos=JSON.parse(res);
      var cod_html="<option value='' disabled='true' selected>Selecciona un valor</option>";
      for (var i = 0; i < datos.length ; i++) 
      {
        var info=datos[i];
        cod_html+="<option value='"+info["id_grupo"]+"'>"+info["des_grupo"]+"</option>";
      }
      $("#grupo").html(cod_html);
    });
  }
</script>