<?php namespace AppData\Model;

  class Calificaciones{
    private $id_usuario; private $conexion;
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
      $sql="SELECT  u.id_usuario, p.nombre, p.ap_p, p.ap_m
        FROM persona p, usuario u, tipo_usuario t
        WHERE p.id_usuario=u.id_usuario
        AND u.id_tipo_usuario=t.id_tipo_usuario
        AND t.id_tipo_usuario=1
        ORDER BY p.ap_p ASC";
      $datos=$this->conexion->QueryResultado($sql);
      return $datos;
    }
    public function delete() {
      //echo $this->id;
      $sql="DELETE FROM usuario
      WHERE id_usuario='{$this->id_usuario}'";
      $this->conexion->QuerySimple($sql);
      $sql="DELETE FROM persona
      WHERE id_usuario='{$this->id_usuario}'";
      $this->conexion->QuerySimple($sql);
      //echo $sql;
    }
    public function getMat(){
    /*  $sql="SELECT * FROM materias";
      $datos=$this->conexion->QueryResultado($sql);
      return $datos;*/
    }


  }
  ?>
