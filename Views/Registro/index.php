
<form class="" action="<?php echo URL ?>login/guardar" method="post">

  <!--<input type="text" name="nombre" value="">
  <input type="text" name="ap_p" value="">
  <input type="text" name="ap_m" value="">
  <input type="text" name="edad" value="">
  <select class="" name="sexo">
    <option value="">Selecciona</option>
    <option value="1">Femenino</option>
    <option value="2">Masculino</option>
  </select>
  <select class="" name="tipo_usuario">
    <option value="">Selecciona</option>
    <option value="1">Alumno</option>
    <option value="2">Docentes</option>
    <option value="3">Jefe</option>
  </select>-->


<div class="container">
        <div class="row center-form">
        <div class=" center-form col-sm-8 ">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Bienvenido Por Favor Registrese</h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="nombre" id="first_name" class="form-control input-sm" placeholder="Nombre">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="ap_p" id="last_name" class="form-control input-sm" placeholder="Apellido paterno">
			    					</div>
			    				</div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="ap_m" id="last_name" class="form-control input-sm" placeholder="Apellido matarno">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="edad" id="last_name" class="form-control input-sm" placeholder="Edad">
                    </div>
                  </div>
			    			</div>

			    			<div class="form-group">
                  <select class="form-control input-sm" name="id_sexo" placeholder="Sexo">
                    <option value="">Sexo</option>
                    <option value="1">Femenino</option>
                    <option value="2">Masculino</option>
                  </select>

			    			</div>

                <div class="form-group">
                  <select class="form-control input-sm" name="id_tipo_usuario">
                    <option value="">Tipo de usuario</option>
                    <option value="1">Alumno</option>
                    <option value="2">Docentes</option>
                    <option value="3">Jefe</option>
                  </select>

                </div>





			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="nickname" name="nickname" id="password" class="form-control input-sm" placeholder="Nickname">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password_confirmation" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    			</div>

			    			<input type="submit" value="guardar" class="btn btn-info btn-block">

			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>

    </form>
