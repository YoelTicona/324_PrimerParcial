<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Verifica el tipo de catastro</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Ingrese su código catastral</h2>
        <p>Rangos 1, 2 y 3</p>
        <form action="http://localhost:8070/ImpuestosTipo/conexion" method="POST">
            <div class="mb-3">
                <label for="codigoC" class="form-label">Código:</label>
                <input type="text" class="form-control" id="codigoC" name="codigoC" required>
            </div>
            <button type="submit" class="btn btn-primary">Verificar Factura</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>