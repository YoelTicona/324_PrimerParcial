<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
	<title>Propietario</title>
</head>
<body>
	<!--Obtenemos los calores de propietario-->
	<?php  
		$nombre = $_GET['nombre'];
		$ci = $_GET['ci'];

		// Consulta para obtener los catastros del propietario
		$stmt = $con->prepare("SELECT * FROM CATASTRO WHERE CI = ?");
		$stmt->bind_param("s", $ci);
		$stmt->execute();
		$result = $stmt->get_result();
	?>

	<!--Mostramos los datos de este propietario-->
	<h2>Bienvenido <?php echo htmlspecialchars($nombre); ?></h2>
	<h2>Mis catastros de <?php echo htmlspecialchars($ci); ?></h2>
	<table class="table">
	  <thead class="table-light">
	  	<tr>
	    <th>ID Catastro</th>
        <th>Zona</th>
        <th>Distrito</th>
        <th>Superficie</th>
        <th>X Inicio</th>
        <th>Y Inicio</th>
        <th>X Fin</th>
        <th>Y Fin</th>
		</tr>	
	  </thead>
	  <tbody>
	    <?php while ($row = $result->fetch_assoc()): ?>
	        <tr>
	            <td><?php echo htmlspecialchars($row['ID_CATASTRO']); ?></td>
	            <td><?php echo htmlspecialchars($row['ZONA']); ?></td>
	            <td><?php echo htmlspecialchars($row['DISTRITO']); ?></td>
	            <td><?php echo htmlspecialchars($row['SUPERFICIE']); ?></td>
	            <td><?php echo htmlspecialchars($row['XINI']); ?></td>
	            <td><?php echo htmlspecialchars($row['YINI']); ?></td>
	            <td><?php echo htmlspecialchars($row['XFIN']); ?></td>
	            <td><?php echo htmlspecialchars($row['YFIN']); ?></td>
	        </tr>
	    <?php endwhile; ?>
	  </tbody>
	</table>
	<!--Cerramos la declaracion y la conexion de la base de datos-->
	<?php
	$stmt->close();
	$con->close();
	?>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>