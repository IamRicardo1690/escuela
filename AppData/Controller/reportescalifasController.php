<?php

namespace AppData\Controller;
use AppData\Model\reportescalifas;
class reportescalifasController
{
    private $Reportescalifas;
    function __construct(){
      $this->Reportescalifas=new reportescalifas();

    }

    function imprimecalificaciones(){
    $datos[0]=$this->Reportescalifas->getmateria();
    $datos[1]=$this->Reportescalifas->getgrupo();
    $datos[2]=$this->Reportescalifas->getmaestro();
    $datos[3]=$this->Reportescalifas->getuni();
    $datos[5]=$this->Reportescalifas->getAlumns();
    return $datos;
    }
    function __destruct() {

    }

}
?>
