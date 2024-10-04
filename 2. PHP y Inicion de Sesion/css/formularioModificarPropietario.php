<?php
// Conectar a la base de datos
include 'conexion.php';
// Obtener los datos del formulario
$ci=$_GET["ci"];
$sql="select * from Propietario where ci=$ci";
$resultado = mysqli_query($con, $sql);
$fila = mysqli_fetch_array($resultado);
$ci = $fila['CI'];
$nombre = $fila['NOMBRE'];
$paterno = $fila['PATERNO'];
$materno = $fila['MATERNO'];
$genero = $fila['GENERO'];
$celular = $fila['CELULAR'];
$email = $fila['EMAIL'];
$nacionalidad = $fila['NACIONALIDAD'];
$fecha_naci = $fila['FECHA_NACI'];

$resultadoD=mysqli_query($con, "select * from Propietario");
$filaD=mysqli_fetch_array($resultadoD);
?>
<html>
<head>
	<title>Modificar Propietario</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<h1>Editar Propietario</h1>
	<form action="modificarPropietario.php" method="GET">
		 <div class="mb-3">
			<label for="ci" class="form-label">CI</label>
			<input type="text" class="form-control" id="ci" name="ci" value="<?php echo $ci; ?>"  readonly>
		</div>
		 <div class="mb-3">
			<label for="nombre" class="form-label">Nombre</label>
			<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre; ?>">
		</div>
		<div class="mb-3">
			<label for="paterno" class="form-label">Paterno</label>
			<input type="text" class="form-control" id="paterno" name="paterno" value="<?php echo $paterno; ?>">
		</div>
		<div class="mb-3">
			<label for="materno" class="form-label">materno</label>
			<input type="text" class="form-control" id="materno" name="materno" value="<?php echo $materno; ?>">
		</div>
		<div class="mb-3">
			<label for="genero" class="form-label">genero</label>
			<input type="text" class="form-control" id="genero" name="genero" value="<?php echo $genero; ?>">
		</div>
		<div class="mb-3">
			<label for="celular" class="form-label">celular</label>
			<input type="text" class="form-control" id="celular" name="celular" value="<?php echo $celular; ?>">
		</div>
		<div class="mb-3">
			<label for="email" class="form-label">email</label>
			<input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="mb-3">
			<label for="nacionalidad" class="form-label">nacionalidad</label>
			<input type="text" class="form-control" id="nacionalidad" name="nacionalidad" value="<?php echo $nacionalidad; ?>">
		</div>
		<div class="mb-3">
			<label for="fecnac" class="form-label">Fecha de Nacimiento</label>
			<input type="date" class="form-control" id="fecha_naci" name="fecha_naci" value="<?php echo $fecha_naci; ?>">
		</div>
		<input type="submit" name="Aceptar" value="Aceptar" class='btn btn-secondary'/>
		<input type="submit" name="Cancelar" value="Cancelar" class='btn btn-danger'/>
	</form>
</body>
<html>