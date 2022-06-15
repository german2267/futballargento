<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <!--Bootstrap Cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Futbol</title>
  </head>
  <body>
  <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Fútbol Argento - Inicio</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body class="bg-light">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top" id="bar">
            <div class="container justify-content-start">
                <a class="navbar-brand" href="index.html">Fútbol Argento</a>
                <ul class="navbar-nav order-lg-1 ml-auto ml-lg-0">
                    <li class="nav-item mr-lg-0 mr-4"><a class="nav-link" href="login.php">Ingresar</a></li>
                </ul>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse flex-grow-0 ml-auto" id="navbarResponsive">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="equipos.html">Equipos</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="visualMods/galeria.html">Galeria</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Login -->
        <div class="container bg-white p-2 needs-validation registro" style="border: 1px solid #d0d0d0; max-width: 500px; height: 360px; margin-top: 100px;" novalidate>
            <h4 class="text-center my-4">Iniciar Sesión</h4>
            <!--form -->
            <form method="POST" action="modules/logMod.php" class="mx-2">
                <div class="form-group">
                    <label for="loginEmail">Correo Electronico</label>
                    <input type="email" name="email_login" class="form-control" id="loginEmail" aria-describedby="emailHelp" required>
                </div>
                <div class="form-group">
                    <label for="loginPass">Contraseña</label>
                    <input type="password" name="password_login" class="form-control" id="loginPass" required>
                </div>
                <button type="submit" name="login" value="login" class="btn btn-primary rounded-pill">Ingresar</button>
                <a class="text-primary ml-2 d-inline link">No tengo cuenta</a>

                <a class="text-primary ml-2 d-inline link" href="visualMods/recuperarCuenta.php">Olvidaste tu contraseña?</a>

            </form>
            <!--!form -->
        </div>
        <!-- /Login -->
        <!-- Registro -->
        <div class="container bg-white p-2 needs-validation logueo" style="border: 1px solid #d0d0d0; max-width: 500px; height: 360px; margin-top: 100px;">
            <a href="visualMods/regPost.php" class="d-block">Quiero registrarme como postulante</a>
            <hr>
            <a href="visualMods/regPat.php" class="d-block">Quiero registrarme como patrocinador</a>
            <hr>
            <a href="visualMods/regRepre.php" class="d-block">Quiero registrarme como representante</a>
        </div>
        <!-- /Registro -->
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <!-- Core theme JS-->
        <script type="text/javascript">
            var aObjects = document.getElementById("bar").getElementsByTagName("a");

            for (var i = 0; i < aObjects.length; i++) {
                if (document.location.href.indexOf(aObjects[i].href) >= 0) {
                    aObjects[i].className += " active";
                }
            }
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".logueo").hide();
            });

            $(".link").click(function(){
                $(".registro").hide();
                $(".logueo").show();
            });
        </script>
    </body>
</html>