<?php
$host:"localhost";
$usuario:"id17838200_estudiantes";
$clave:"Estudiantesispc+2021*";
$basededatos:"id17838200_arbol";

$conn new mysqli ($host, $usuario, $clave, $basededatos); 
        mysqli_query ($conn, "SET character_set_result=utf8");
        if($conn->connect_error){
         die("Database Error:" .$conn->connect_error);
        }

?>