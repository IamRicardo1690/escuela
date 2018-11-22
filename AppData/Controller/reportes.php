<?php namespace AppData\Controller;
use AppData\Model\reportes;
class reportescontroller{
	private $reportes;
	function __construct(){
		$this->Reportes= new Reportes();
	}
	function imprimecalificaciones(){
		$datos=$this->reportes->getAlums();
		return $datos;

	}
	function __destruct(){

	}
}

 ?>