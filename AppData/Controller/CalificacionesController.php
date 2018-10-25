<?php

namespace AppData\Controller;
use AppData\Model\Calificaciones;
class CalificacionesController
{
    private $Calificaciones;
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
    /*  $this->Calificaciones->set("id",$id);
      $this->Calificaciones->delete();*/
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
