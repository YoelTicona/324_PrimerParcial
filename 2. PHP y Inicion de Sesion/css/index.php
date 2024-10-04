<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>INICION DE SESION</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/image1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Inicio de <strong>Sesión</strong></h3>
            <p class="mb-4">Bienvenido al Sistema de Gestión Catastral de La Paz.
              Ingresa tu nombre y utiliza tu número de CI como contraseña para acceder. <br>Los propietarios podrán ver sus catastros, y los administradores podrán agregar, modificar o eliminar registros de propiedades. ¡Gracias por confiar en nuestro sistema!</p>
              
            <form action="login.php" method="GET">

              <div class="form-group first">
                <label for="nombre">Nombre de usuario:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required>
              </div>

              <div class="form-group last mb-3">
                <label for="ci">Contraseña</label>
                <input type="text" class="form-control" placeholder="Carnet de identidad" id="ci" name="ci">
              </div>
              <input type="submit" value="Log In" class="btn btn-block btn-primary">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>