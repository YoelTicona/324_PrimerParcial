<?php
$con = mysqli_connect("localhost", "root", "", "catastrohamlp");
// Verificar la conexión
if (mysqli_connect_error()) {
    exit('Fallo en la conexion de MySQL: ' . mysqli_connect_error());
}
?>
