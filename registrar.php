<?php
//paso 1:importar la libreria de la BD
require "../config/conexion.php";

//paso 2 almacenar las variables
$nombre_persona = $_POST["nombre"];
$documento = $_POST["documento"];
$fecha_nacimiento = $_POST["fecha"];
$telefono = $_POST["numero"];
$sexo = $_POST["cmb_sexo"];

//paso 3:armar el sql en una variable
$sql_insertar = "INSERT INTO proyecto1
(fecha_sys, nombre, documento, fecha_nacimiento, celular, sexo)
VALUES (now(), '".$nombre_persona."','".$documento."','".$fecha_nacimiento."','".$telefono."',".$sexo.")";


//paso 4:enviar a la BD
if($dbh->query($sql_insertar))


{
     echo"informacion registrada correctamnete";
}else


{
  echo "error registrando la informacion";
}

?>