<?php 
include "conexion.php";
$ci=$_GET["ci"];
$sql="DELETE FROM PROPIETARIO WHERE CI=$ci";
mysqli_query($con, $sql);
header("Location: administrador.php")
?>