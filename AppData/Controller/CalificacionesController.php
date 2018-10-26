<?php

namespace AppData\Controller;
use AppData\Model\Calificaciones;
class CalificacionesController
{
    private $Calificaciones,$id_usuario,$conexion;
    function __construct(){
      $this->Calificaciones=new Calificaciones();

    }
    function index() {

    }

    function ver() {
      $datos=$this->Calificaciones->getAlumns();
      return $datos;
    }
    function eliminar($id) {
      $this->Calificaciones->set("id_usuario",$id[0]);
      $this->Calificaciones->delete();
      ?> 
      <script type="text/javascript">
    

$(document).ready(function(){
          swal({
            title: "Eliminado",
            text: "Correctamente",
            timer: 2000,
            });
          setTimeout(function(){  
            window.location.href="<?php echo URL ?>Calificaciones/ver";
          },2100);
       
        })
        
      </script>
      <?php
    }
    public function materias(){
      /*$datos=$this->Calificaciones->getMat();
      return $datos;*/

      //var_dump($datos);

    }
    function __destruct() {

    }

}
?>
