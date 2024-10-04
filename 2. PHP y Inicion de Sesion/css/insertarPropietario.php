<?php
// Conectar a la base de datos
include 'conexion.php';
// Obtener los datos del formulario
$ci = $_GET['ci'];
$nombre = $_GET['nombre'];
$paterno = $_GET['paterno'];
$materno = $_GET['materno'];
$genero = $_GET['genero'];
$celular = $_GET['celular'];
$email = $_GET['email'];
$nacionalidad = $_GET['nacionalidad'];
$fecha_naci = $_GET['fecha_naci'];

$sql = "INSERT INTO PROPIETARIO(CI, NOMBRE, PATERNO, MATERNO, GENERO, CELULAR, EMAIL, NACIONALIDAD, FECHA_NACI) VALUES ('$ci','$nombre','$paterno','$materno','$genero','$celular','$email','$nacionalidad','$fecha_naci')";
mysqli_query($con, $sql);
header("Location: administrador.php");
?>