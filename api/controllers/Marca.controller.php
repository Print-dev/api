<?php

require_once '../models/Marca.php';

//1. recibe la solicitud
//2. realiza proceso
// 3. entrega resultado

if(isset($_GET['operacion'])){

  $marca = new Marca();

  if($_GET['operacion'] == 'listar'){
    $resultado = $marca->getAll();
    echo json_encode($resultado);
  }

}