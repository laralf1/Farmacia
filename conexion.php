<?php
 function conectarse(){
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $baseDeDatos="medicamentos";
 $conectar= new mysqli($servidor,$usuario,$clave,$baseDeDatos) or die("NO SE PUDO ESTABLECER CONECCION"); 
   return $conectar;

}
$conexion = conectarse();
?>