<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Fútbol Argento - Inicio</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/styles.css">


    </head>

    <body>

        <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container justify-content-start">
                <a class="navbar-brand" href="../index.html">Fútbol Argento</a>
                <ul class="navbar-nav order-lg-1 ml-auto ml-lg-0">
                </ul>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse flex-grow-0 ml-auto" id="navbarResponsive">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="regPat.php">Registrarse como Patrocinador</a></li>
                        <li class="nav-item"><a class="nav-link" href="regPost.php">Registrarse como Postulante</a></li>

                <!--logout -->
                    <div>
                        <form action="../modules/logout.php">
                        <button class="btn btn-dark" type="submit">
                            <img style="height: 40px; width: 40px;" src="../assets/img/logout.png">
                        </button>
                        </form>
                    </div>
                   
                    </ul>

                    


                </div>
            </div>
        </nav>
    <!-- /Navbar -->

    <!-- Titulo -->
    <h1 class="text-center display-4 pb-5 mb-2 mt-4"  style="padding-top: 5rem;">FORMULARIO DE REPRESENTANTE</h1>
    <!-- !Titulo -->

    <!-- !Titulo -->
    <div class="container-fluid mt-2 p-0">
        <!-- Body -->
        <div class="container pb-2 bg-white card-shadow">
            <!--formulario de registro -->
            <form action="../modules/regModRepre.php" method="post">
                <div class="form-row pt-2">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="validationCustom01" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Apellido</label>
                    <input type="text" class="form-control" name="apellido" id="validationCustom02" required>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom04">Provincia</label>
                    <select class="custom-select" name="provincia" id="validationCustom04" required>
                      <option selected disabled value="">Elegir...</option>
                      <option value="">Buenos Aires</option>
                      <option value="">Ciudad Autónoma de Buenos Aires</option>
                      <option value="">Catamarca</option>
                      <option value="">Chaco</option>
                      <option value="">Chubut</option>
                      <option value="">Córdoba</option>
                      <option value="">Corrientes</option>
                      <option value="">Entre Ríos</option>
                      <option value="">Formosa</option>
                      <option value="">Jujuy</option>
                      <option value="">La Pampa</option>
                      <option value="">La Rioja</option>
                      <option value="">Mendoza</option>
                      <option value="">Misiones</option>
                      <option value="">Neuquén</option>
                      <option value="">Río Negro</option>
                      <option value="">Salta</option>
                      <option value="">San Juan</option>
                      <option value="">San Luis</option>
                      <option value="">Santa Cruz</option>
                      <option value="">Santa Fe</option>
                      <option value="">Santiago del Estero</option>
                      <option value="">Tierra del Fuego, Antártida e Islas del Atlántico Sur</option>
                      <option value="">Tucumán</option>
                    </select>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom05">Dni</label>
                    <input type="text" class="form-control" name="dni" id="validationCustom05" required>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom05">Correo Electronico</label>
                    <input type="email" class="form-control" name="email" id="validationCustom05" required>
                  </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="inputClubRep">Club Representado</label>
                      <input type="text" class="form-control" name="club_rep" id="inputMail" aria-describedby="emailHelp" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Numero del Club</label>
                        <input type="number" class="form-control" name="num_club" id="validationCustom03" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="inputTel">Numero de Representante</label>
                        <input type="text" class="form-control" name="num_rep" id="inputClub" required>
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
                <button class="btn" style="background-color: #5da145; color: white;" type="submit" name="submit">Enviar Formulario</button>

              </form>
              <!--formulario de registro -->
        </div>
        <!-- /Body -->
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script type="text/javascript">
      let inputEdad = document.getElementById('inputEdad');
      inputEdad.addEventListener("blur", comprobarEdad);

      function comprobarEdad(){
          const edad = document.getElementById('inputEdad').value;

          if(edad < 18) {
              console.log('Es menor a 18');
          } else {
              console.log('Es mayor a 18');
          }
      }
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<footer class="py-5 bg-black">
            <div class="container"><p class="m-0 text-center text-white small">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        
        <script src="js/scripts.js"></script>
    </body>
</html>
