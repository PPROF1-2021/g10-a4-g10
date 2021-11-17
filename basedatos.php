<?php
$host:"localhost";
$usuario:"arbol123";
$clave:"arbol+2021*";
$basededatos:"podacba";

$conn new mysqli ($host, $usuario, $clave, $basededatos); 
        mysqli_query ($conn, "SET character_set_result=utf8");
        if($conn->connect_error){
         die("Database Error:" .$conn->connect_error);
        }

?>