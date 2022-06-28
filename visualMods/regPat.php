<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/styles.css">

    <title>Futbol</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-dark navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="../index.html">Fútbol Argento</a>
            <div class="flex-grow-0 ml-auto" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="../login.php">Volver</a></li>

                    <!-- <li class="nav-item"><a class="nav-link" href="visualMods/galeria.html">Galeria</a></li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- /Navbar -->

    <!-- Titulo -->
    <h1 class="text-center display-4 pb-5 mb-2 mt-4">FORMULARIO DE PATROCINADOR</h1>
    <!-- !Titulo -->
    <div class="container-fluid mt-2 p-0">
        <!-- Body -->
        <div class="container pb-2 bg-white card-shadow">
          <!--formulario de registro -->
            <form action="../modules/regModPat.php" method="post">
                <div class="form-row pt-2">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Nombre</label>
                    <input type="text" class="form-control" id="validationCustom01" name="nombre" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Apellido</label>
                    <input type="text" class="form-control" id="validationCustom02" name="apellido" required>
                  </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="inputMail">Correo Electronico</label>
                      <input type="email" class="form-control" id="inputMail" aria-describedby="emailHelp" name="email" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputTel">Telefono</label>
                        <input type="text" class="form-control" id="inputTel" name="telefono" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Entidad Social Perteneciente</label>
                        <input type="text" class="form-control" id="validationCustom03" name="ent_soc" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Dni</label>
                        <input type="text" class="form-control" id="validationCustom03" name="dni" required>
                    </div>


                </div>
              
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                      Acepto los <a href="../pol-priv.html" target="_blank">terminos y condiciones</a>
                    </label>
                  </div>
                </div>
                <button class="btn btn-primary rounded-pill" type="submit" name="submit">Enviar Formulario</button>
            </form>
            <!--!formulario de registro -->
        </div>
        <!-- /Body -->
    </div>

    <!--footer -->
    <footer class="py-5 bg-black">
            <div class="container"><p class="m-0 text-center text-white small">Copyright &copy; Your Website 2022</p></div>
        </footer>

    <!-- Optional JavaScript; choose one of the two! -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>