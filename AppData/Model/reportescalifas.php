<?php namespace AppData\Model;

  class reportescalifas{
    private $id, $nombre, $ap_p, $ap_m; 
    //private $conexion
    public function __construct(){
      $this->conexion= new conexion();
    }
    public function set($atributo,$valor){
      $this->$atributo=$valor;
    }
    public function get($atributo){
      return $this->$atributo;
    }
    public function getAlumns(){
      //consulta
      $sql="SELECT u.id_usuario, p.nombre, p.ap_p, p.ap_m
            FROM persona p, usuario u
            WHERE p.id_usuario=u.id_usuario
            AND u.id_tipo_usuario=1
            ORDER BY p.ap_p ASC";
      $datos=$this->conexion->QueryResultado($sql);
      return $datos;
    }




  }
  ?>


