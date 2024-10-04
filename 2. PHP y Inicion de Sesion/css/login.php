<?php
include 'conexion.php'; // Conexión a la base de datos

// Obtener los datos enviados por GET
$nombre = $_GET['nombre'];
$ci = $_GET['ci'];

// Verificar si es propietario
$stmt_propietario = $con->prepare("SELECT * FROM PROPIETARIO WHERE NOMBRE = ? AND CI = ?");
$stmt_propietario->bind_param("ss", $nombre, $ci);
$stmt_propietario->execute();
$result_propietario = $stmt_propietario->get_result();

// Verificar si es administrador
$stmt_admin = $con->prepare("SELECT * FROM ADMINISTRADOR WHERE NOMBRE = ? AND ID_ADMINISTRADOR = ?");
$stmt_admin->bind_param("ss", $nombre, $ci); // Suponiendo que el CI es equivalente al ID_ADMINISTRADOR
$stmt_admin->execute();
$result_admin = $stmt_admin->get_result();

if ($result_propietario->num_rows > 0) {
    // Si es propietario, redirigir a la página de catastros
    header("Location: propietario.php?nombre=$nombre&ci=$ci");
} elseif ($result_admin->num_rows > 0) {
    // Si es administrador, redirigir a la página de administración
    header("Location: administrador.php?nombre=$nombre&ci=$ci");
} else {
    echo "Nombre o CI incorrectos.";
}

$stmt_propietario->close();
$stmt_admin->close();
$con->close();
?>
