<?php namespace AppData\Model;

  class Calificaciones{
    public function __construct(){
      $this->conexion= new conexion();
    }
    public function set($atributo,$valor){
      $this->$artributo=$valor;
    }
    public function get($atributo){
      return $this->$atributo;
    }
    public function getAlumns(){
      //consulta
      $sql="SELECT  nombre, ap_p, ap_m
        FROM persona p, usuario u
        WHERE p.id_usuario=u.id_usuario
        AND u.id_tipo_usuario=1
        ORDER BY p.ap_p ASC";
      $datos=$this->conexion->QueryResultado($sql);
      return $datos;
    }
    public function delete() {
    /*  echo $this->id;
      $sql="DELETE FROM Usuario
      WHERE id_usuario='{$this->id}'";
      echo $sql;
      $this->conexion->QuerySimple($sql);*/
    }
    public function getMat(){
    /*  $sql="SELECT * FROM materias";
      $datos=$this->conexion->QueryResultado($sql);
      return $datos;*/
    }


  }
  ?>
