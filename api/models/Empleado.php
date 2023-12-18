<?php

require_once 'Conexion.php';

class Empleado extends Conexion{
  private $pdo;

  public function __CONSTRUCT(){
    $this->pdo = parent::getConexion();
  }

  public function getAll(){
    try {
      $consulta = $this->pdo->prepare("CALL spu_listar_empleados()");
      $consulta->execute();
      return $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function add($data = []){
    try {
      $consulta = $this->pdo->prepare("CALL spu_registrar_empleados(?,?,?,?,?,?)");
      $consulta->execute(
        array(
          $data['idsede'],
          $data['apellidos'],
          $data['nombres'],
          $data['nrodocumento'],
          $data['fechanac'],
          $data['telefono']
        )
      );
      //Actualizacion, ahora retornamos el "idvehiculo"
      return $consulta->fetch(PDO::FETCH_ASSOC);
    } 
    catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function searchByNdoc($data = []){
    try {
      $consulta = $this->pdo->prepare("CALL spu_buscar_empleado(?)");
      $consulta->execute(
        array(
          $data['nrodocumento']
        )
      );
      return $consulta->fetch(PDO::FETCH_ASSOC);
    }catch (Exception $e) {
      die($e->getMessage());
    }
  }

}