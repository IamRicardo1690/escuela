<?php namespace AppData\Controller;
use AppData\Model\reportematerias;
class reportesmateriascontroller
{
	private $Reportematerias;
	function __construct(){
		$this->Reportematerias= new reportematerias();
	}
	function imprimematerias(){
		$datos[0]=$this->Reportematerias->getjefe();
		$datos[1]=$this->Reportematerias->getmaestro();
		$datos[2]=$this->Reportematerias->getAlumns();
		return $datos;
		
	

	}
	function __destruct(){

	}
}

 ?>