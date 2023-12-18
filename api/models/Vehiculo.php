<?php
//1. Acceso al archivo
require 'Conexion.php';

//2. Heredar sus atributos y metodos
class Vehiculo extends Conexion {

  //Este objeto almacenara la conexion y se la facilitara a todos los metodos
  private $pdo;

  //3. Almacenar la conexion en el objeto
  public function __CONSTRUCT(){
    $this->pdo = parent::getConexion();
  }

  //$data es un arrejo asociativo que contiene los valores
  //requeridos por el SPU para registro vehiculos
  public function add($data = []){
    try {
      $consulta = $this->pdo->prepare("CALL spu_vehiculos_registrar(?,?,?,?,?,?,?)");
      $consulta->execute(
        array(
          $data['idmarca'],
          $data['modelo'],
          $data['color'],
          $data['tipocombustible'],
          $data['peso'],
          $data['afabricacion'],
          $data['placa']
        )
      );
      //Actualizacion, ahora retornamos el "idvehiculo"
      return $consulta->fetch(PDO::FETCH_ASSOC);
    } 
    catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function search($data = []){
    try {
      //el SPU require el numero de placa
      $consulta = $this->pdo->prepare("CALL 
      spu_vehiculos_buscar(?)");
      $consulta->execute(
        array($data['placa'])
      );

      //Devolver el registro encontrado
      //fetch()     : retorna la primera coincidencia (1)
      //fetchAll()  : retorna todas las coincidencia (n)
      //FETCH_ASSOC : define el resultado como un objeto
      //FETCH_ARRAY
      //FETCH NUM   : sirve para retornar solo los elementos
      return $consulta->fetch(PDO::FETCH_ASSOC); //fetch assoc , formato en como se recuperan los datos
      
    } 
    catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function getResumenTipoCombustible(){
    try {
      $consulta = $this->pdo->prepare("CALL spu_resumen_tipocombustible()");
      $consulta->execute();
      return $consulta->fetchAll(PDO::FETCH_ASSOC); //ARREGLO ASOSIATIVO
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }
}

/*
//Prueba - NO OLVIDES BORRAR ESTO
$vehiculo = new Vehiculo();
$registro = $vehiculo->search(["placa" => "ABC-111"]);
print(json_encode($registro));
*/