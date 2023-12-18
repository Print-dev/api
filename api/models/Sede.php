<?php

require_once 'Conexion.php';

class Sede extends Conexion{
    private $pdo;

    public function __CONSTRUCT(){
        $this->pdo = parent::getConexion();
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

    public function getAll(){
        try {
            $consulta = $this->pdo->prepare("CALL spu_listar_sedes()");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}