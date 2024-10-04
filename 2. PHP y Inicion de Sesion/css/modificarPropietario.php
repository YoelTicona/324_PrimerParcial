<?php 
include "conexion.php";
$ci = $_GET['ci'];
$nombre = $_GET['nombre'];
$paterno = $_GET['paterno'];
$materno = $_GET['materno'];
$genero = $_GET['genero'];
$celular = $_GET['celular'];
$email = $_GET['email'];
$nacionalidad = $_GET['nacionalidad'];
$fecha_naci = $_GET['fecha_naci'];
$sql="update PROPIETARIO set NOMBRE='$nombre', PATERNO='$paterno', MATERNO='$materno', GENERO='$genero', CELULAR='$celular', EMAIL='$email', NACIONALIDAD='$nacionalidad',FECHA_NACI='$fecha_naci' where CI=$ci";
mysqli_query($con, $sql);
header("Location: administrador.php")
?>
