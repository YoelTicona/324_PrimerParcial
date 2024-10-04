<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Administrativo</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/estiloTablaAdministrador.css">

<script>

</script>
</head>
<body>
<?php
// Realizamos la consulta
$sql = "SELECT CI, NOMBRE, PATERNO, MATERNO, GENERO, CELULAR, EMAIL, NACIONALIDAD, FECHA_NACI FROM PROPIETARIO";
$result = $con->query($sql);
?>
<h2>Bienvenido</h2>
<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>PROPIETARIOS</b></h2></div>
                    <div class="col-sm-4">
                        <a href="formularioAgregarPropietario.php"> <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agregar</button></a>
                    </div>
                </div>
            </div>
            <div class="table-wrapper">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>CI</th>
                        <th>Nombre</th>
                        <th>Paterno</th>
                        <th>Materno</th>
                        <th>Genero</th>
                        <th>Celular</th>
                        <th>Email</th>
                        <th>Nacionalidad</th>
                        <th>Fecha de Nacimiento</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
            	<!--Mostramos los propietarios-->     
            	<?php
		        if ($result->num_rows > 0) {
		            // Recorrer cada fila de la consulta y mostrar los datos
		            while($row = $result->fetch_assoc()) {
		                echo "<tr>";
		                echo "<td>" . $row["CI"] . "</td>";
		                echo "<td>" . $row["NOMBRE"] . "</td>";
		                echo "<td>" . $row["PATERNO"] . "</td>";
		                echo "<td>" . $row["MATERNO"] . "</td>";
		                echo "<td>" . $row["GENERO"] . "</td>";
		                echo "<td>" . $row["CELULAR"] . "</td>";
		                echo "<td>" . $row["EMAIL"] . "</td>";
		                echo "<td>" . $row["NACIONALIDAD"] . "</td>";
		                echo "<td>" . $row["FECHA_NACI"] . "</td>";
		                echo '<td> 
						    <a class="edit" data-toggle="tooltip" href="formularioModificarPropietario.php?ci=' . $row['CI'] . '" ><i class="material-icons" >&#xE254;</i></a> 
						    <a class="delete" data-toggle="tooltip" href="eliminarPropietario.php?ci=' . $row['CI'] . '"><i class="material-icons">&#xE872;</i></a> 
							</td>';

		            }
		        } else {
		            echo "<tr><td colspan='9'>No hay propietarios registrados.</td></tr>";
		        }
		        $con->close();
		        ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>     
	<script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scriptTablaAdministrador.js"></script>
</body>
</html>

<!--
<tr>
    <td>Fran Wilson</td>
    <td>Human Resources</td>
    <td>(503) 555-9931</td>
    <td>
        
        <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
        <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
    </td>
</tr>      
-->