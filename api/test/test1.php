<?php

//Variables
$apellidos = "Avalos Romero";
$nombres = "Royer Alexis";

//Constantes
define("DNI", "72754711");

//echo $apellidos . " " . $nombres . " " . DNI;

//Arreglo (1) - UNI-DIMENSIONAL
$amigos = array("Karina", "Melissa", "Vania", "Emily", "Sheyla");
$paises = ["Peru", "Argentina", "Venezuela", "Brasil"];

//Funcion que imprime: tipo, longitud, dato
//var_dump($amigos);

/*
  foreach($amigos as $amigo){
  echo $amigo;
}
*/

//echo json_encode($amigos);
/*
$softwares = [
  ["Eset", "Avast", "Windows Defender", "Avira", "Kapersky"],
  ["Warzone", "GOW", "Frefire", "Pepsiman", "MarioBros"],
  ["VScode", "NetBeans", "AndroidStudio", "PSEINT"]
];

echo $softwares[0][3];  //Avira
echo $softwares[2][0];  //Vscode
echo $softwares[2][2];  //Android studio
echo $softwares[1][3];  //Warzone

foreach($softwares as $lista){
  foreach($lista as $software){
    echo $software . "<br>";
  }
};

*/
//Arreglo (3) ASOCIATIVO (sin indice)
//PHP, JS (ASOCIATIVO), JAVA (Mapas), C# (Listas), Python (Diccionario)
//Key => value
/*
  $catalogo = [
  "so"         => "Windows 10",
  "antivirus"  => "Panda",
  "utilitario" => "WinRAR",
  "videojuego" => "MarioBros"
];


echo json_encode($catalogo);
*/

//Arreglo (4) MULTIDIMENSIONAL + ASOCIATIVO (con/sin indice)
$desarollador = [
  "datospersonales" => [
    "apellidos" => "Avalos Romero",
    "nombres"   => "Royer Alexis",
    "edad"      =>  18,
    "telefono"  => ["936439633", "956023941"]
  ],
  "formacion"       => [
    "inicial"     => ["Los terribles"],
    "primaria"    => ["Eso tilin"],
    "secundaria"  => ["Insanos", "Maranguita School"]
  ],
  "habilidades"     => [
    "bd"          => ["MySQL", "MSSQL", "MongoDB"],
    "Frameworks"  => ["Laravel", "CodeIgniter", "Hibernite", "Zend"] 
  ]
];

echo json_encode($desarollador);
/*
  echo "<pre>";
  var_dump($desarollador);
  echo "</pre>";
*/