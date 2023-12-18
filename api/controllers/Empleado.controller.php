<?php

require_once '../models/Empleado.php';

if (isset($_GET['operacion'])){

  $empleado = new Empleado();

  if($_GET['operacion'] == 'listar'){
    $resultado = $empleado->getAll();
    echo json_encode($resultado);
  }
}

if(isset($_POST['operacion'])){
  $empleado = new Empleado();
  if ($_POST['operacion'] == 'add'){
    //Almacenar los datos recibiendo de la vista en un arreglo
    $datosRecibidos = [
      "idsede"              =>  $_POST['idsede'],
      "apellidos"           =>  $_POST['apellidos'],
      "nombres"             =>  $_POST['nombres'],
      "nrodocumento"        =>  $_POST['nrodocumento'],
      "fechanac"            =>  $_POST['fechanac'],
      "telefono"            =>  $_POST['telefono']
    ];

    //Enviamos el arreglo como parametro del metodo add
    $idobtenido = $empleado->add($datosRecibidos);
    echo json_encode($idobtenido);
  } 

  if($_POST['operacion'] == 'obtenerEmpleado'){
    $datosRecibidos = [
      "nrodocumento"  =>  $_POST['nrodocumento']
    ];

    $resultado = $empleado->searchByNdoc($datosRecibidos);
    sleep(2); //Espera...
    echo json_encode($resultado);
  }
}
