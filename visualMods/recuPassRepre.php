<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
      <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/styles.css">

    <title>Recuperar Cuenta</title>
  </head>
  <body>
  <!-- Navbar -->
  <nav class="navbar navbar-dark navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="../index.html">Fútbol Argento</a>
            <div class="flex-grow-0 ml-auto" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="recuperarCuenta.php">Volver</a></li>

                    <!-- <li class="nav-item"><a class="nav-link" href="visualMods/galeria.html">Galeria</a></li> -->
                </ul>
            </div>
        </div>
    </nav>

        <div class="alert alert-primary text-center" role="alert">
            Te vamos a pedir ciertos datos específicos de tu usuario
          </div>
<div class="container">




    <div class="card-body">
      <div>
      <form action="../modules/recuPassRepreMod.php" method="post">

  <div class="input-group mb-3">
  <input type="email" class="form-control" placeholder="Ingrese Email" aria-label="email" aria-describedby="basic-addon1" name="correo" required>
</div>

<div class="input-group mb-3">
  <input type="" class="form-control" placeholder="Ingrese Dni" aria-label="dni" aria-describedby="basic-addon1" name="dni" required>
</div>


 <div class="input-group mb-3">
  <input type="number" class="form-control" placeholder="Teléfono" aria-label="telefono" aria-describedby="basic-addon1" name="telefono" required>
</div>

<div class="input-group mb-3">
  <button type="submit" name="submit" class="btn btn-primary rounded-pill">Consultar recuperacion</button>
</div>



</form>
</div>

</div>

</div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    
  </body>
</html>