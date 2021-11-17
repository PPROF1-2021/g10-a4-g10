<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="css/favicon.png" >
    <title>Guardar Mensaje del Cliente</title>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
<p> <a href="index.html"> Regresar</a> </p>
<input type="button" value="Regresar"onclick="pVolver();"> <br>

<input type='button' value='Submit' id='submit' onclick='paginaRedirect();'> <br/>
 
 <!-- Message -->
 <div id="mensaje"></div>
 
<?php

$nombre = $_POST["validarNombre"];
$apellido = $_POST["validarApellidos"];
$direccion = $_POST["validarEmail"];
$telefono = $_POST ["validarTelefono"];


print "  <p>Su nombre <strong>$nombre</strong>.</p>\n";
print "\n";
print "  <p>Su apellido <strong>$apellido</strong>.</p>\n";
print "\n";
print "  <p>Su mail <strong>$direccion</strong> .</p>\n";
print "\n";
print "  <p>Su telefono <strong>$telefono</strong>.</p>\n";
print "\n";



// Incluimos los datos de conexión y las funciones:
include("basedatos.php");
$con = mysqli_connect($host,$usuario,$clave,$basededatos) or die ("No se ha podido conectar al servidor de Base de datos");
if (!$con) {
    die("Conexión fallida: " . mysqli_connect_error());
}



$db = mysqli_select_db($con, $basededatos) or die ( "Upps! no se ha podido conectar a la base de datos" );
$consulta = "INSERT INTO usuarios (nombre, apellido, correo, telefono) VALUES ('$nombre', '$apellido', '$direccion', '$telefono' )";

// Usamos esas variables:
if (mysqli_query ($con, $consulta)){
    echo "<h3>Mensaje Guardado.</h3>";
    } else {
    echo "<h3>No fue posible guardar du mensaje</h3>";
    echo "Error: " . $consulta . "<br>" . mysqli_error($con);
 }
 mysqli_close($con);

 echo "<p style='font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 12px;color: #CC6600;'>".$row['estilo']."</p>";?>
?>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

</body>
</html>