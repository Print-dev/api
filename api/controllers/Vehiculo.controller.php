<?php
//Incorpora el archivo externo 1 sola vez
// Si detecta un error se detiene
require_once '../models/Vehiculo.php';

//1. Recibira peticiones (GET - POST - REQUEST)
//2. Realizara el proceso (MODELO - CLASE)
//3. Devolver un resultado (JSON)
//4, include_once  - encuentra un erro pero continua
//5. require - encuentra un error y lo detiene todo el sistema

//KEY = VALUE
//isset() : verifica si existe el objeto
if (isset($_POST['operacion'])){
  $vehiculo = new Vehiculo();
  if ($_POST['operacion'] == "search"){

    //Instanciar la clase
    
    $respuesta = $vehiculo->search(["placa" => $_POST["placa"]]);
  
    sleep(2); //Espera...
    echo json_encode($respuesta);
  } 
  //nuevo proceso...
  if ($_POST['operacion'] == 'add'){
    //Almacenar los datos recibiendo de la vista en un arreglo
    $datosRecibidos = [
      "idmarca"         =>  $_POST['idmarca'],
      "modelo"          =>  $_POST['modelo'],
      "color"           =>  $_POST['color'],
      "tipocombustible" =>  $_POST["tipocombustible"],
      "peso"            =>  $_POST["peso"],
      "afabricacion"    =>  $_POST["afabricacion"],
      "placa"           =>  $_POST["placa"]
    ];

    //Enviamos el arreglo como parametro del metodo add
    $idobtenido = $vehiculo->add($datosRecibidos);
    echo json_encode($idobtenido);
  } 

  
}


if(isset($_GET['operacion'])){
  $vehiculo = new Vehiculo();

  if($_GET['operacion'] == 'getResumenTipoCombustible'){
    echo json_encode($vehiculo->getResumenTipoCombustible());
  }
}