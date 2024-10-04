<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Agregar Propietario</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Agregar Propietario</h2>
        <form action="insertarPropietario.php" method="GET">
            <div class="mb-3">
                <label for="ci" class="form-label">CI:</label>
                <input type="text" class="form-control" id="ci" name="ci" required>
            </div>

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="mb-3">
                <label for="paterno" class="form-label">Paterno:</label>
                <input type="text" class="form-control" id="paterno" name="paterno" required>
            </div>

            <div class="mb-3">
                <label for="materno" class="form-label">Materno:</label>
                <input type="text" class="form-control" id="materno" name="materno" required>
            </div>

            <div class="mb-3">
                <label for="genero" class="form-label">Género:</label>
                <select class="form-select" id="genero" name="genero" required>
                    <option value='M'>Masculino</option>
                    <option value='F'>Femenino</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="celular" class="form-label">Celular:</label>
                <input type="text" class="form-control" id="celular" name="celular" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="nacionalidad" class="form-label">Nacionalidad:</label>
                <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" required>
            </div>

            <div class="mb-3">
                <label for="fecha_naci" class="form-label">Fecha de Nacimiento:</label>
                <input type="date" class="form-control" id="fecha_naci" name="fecha_naci" required>
            </div>

            <button type="submit" class="btn btn-primary">Agregar Propietario</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>