<?php
/**
 * Permitir la conexion contra la base de datos
 */
class Musica
{
  //Atributos necesarios para la conexion
  private $host="localhost";
  private $user="root";
  private $pass="";
  private $db_name="musica";

  //Conector
  private $conexion;

  //Propiedades para controlar errores
  private $error=false;

  function __construct()
  {
      $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
      if ($this->conexion->connect_errno) {
        $this->error=true;
      }
  }

  //Funcion para saber si hay error en la conexion
  function hayError(){
    return $this->error;
  }

  //Funciones para la devolucion de resultados
  public function artistas(){
    if($this->error==false){
      $artista = $this->conexion->query("SELECT * FROM artista");
      return $artista;
    }else{
      return null;
    }
  }
  public function discos($artistaselect){
    if($this->error==false){
      $disco = $this->conexion->query("SELECT * FROM disco WHERE id_artista='" .$artistaselect ."'");
      return $disco;
    }else{
      return null;
    }
  }
  public function canciones($discoselect){
    if($this->error==false){
      $cancion = $this->conexion->query("SELECT * FROM cancion WHERE id_disco='" .$discoselect ."'");
      return $cancion;
    }else{
      return null;
    }
  }
  public function letras($cancionselect){
    if($this->error==false){
      $letra = $this->conexion->query("SELECT * FROM lirica WHERE id_cancion='" .$cancionselect ."'");
      return $letra;
    }else{
      return null;
    }
  }

}


 ?>
