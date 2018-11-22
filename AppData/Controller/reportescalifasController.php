<?php

namespace AppData\Controller;
use AppData\Model\reportescalifas;
class reportescalifasControllers
{
    private $reportescalifas;
    function __construct(){
      $this->reportescalifas=new reportescalifas();

    }
    function index() {
      $datos=$this->reportescalifas->getAlumns();
      retun $datos;

    }
    function imprimecalificaciones(){
      $datos=$this->reportescalifas->getAlumns();
      retun $datos;
    }
    function __destruct() {

    }

}
?>
