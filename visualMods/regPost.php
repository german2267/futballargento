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
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container justify-content-start">
                <a class="navbar-brand" href="../index.html">Fútbol Argento</a>
                <ul class="navbar-nav order-lg-1 ml-auto ml-lg-0">
                </ul>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse flex-grow-0 ml-auto" id="navbarResponsive">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="regPat.php">Registrarse como Patrocinador</a></li>
                        <li class="nav-item"><a class="nav-link" href="regRepre.php">Registrarse como Representante</a></li>

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

    <h1 class="text-center display-4 pb-5 mb-2 mt-4"  style="padding-top: 5rem;">FORMULARIO DE POSTULANTE</h1>
    
    <div class="container-fluid mt-2 p-0">
        <!-- Body -->
        <div class="container pb-2 bg-white card-shadow">
            <!--form -->
            <form action="../modules/regModPost.php" method="post">
                <div class="form-row pt-2">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Nombre</label>
                    <input type="text" class="form-control" id="validationCustom01" name="nombre" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Apellido</label>
                    <input type="text" class="form-control" id="validationCustom02" name="apellido" required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Dni</label>
                    <input type="number" class="form-control" id="validationCustom02" name="dni" required>
                  </div>

                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom04">Provincia</label>
                    <select class="custom-select" id="validationCustom04" name="provincia" required>
                      <option selected disabled value="">Elegir...</option>
                      <option value="BUENOS AIRES">Buenos Aires</option>
                      <option value="CABA">Ciudad Autónoma de Buenos Aires</option>
                      <option value="CATAMARCA">Catamarca</option>
                      <option value="CHACO">Chaco</option>
                      <option value="CHUBUT">Chubut</option>
                      <option value="CORDOBA">Córdoba</option>
                      <option value="CORRIENTES">Corrientes</option>
                      <option value="ENTRE RIOS">Entre Ríos</option>
                      <option value="FORMOSA">Formosa</option>
                      <option value="JUJUY">Jujuy</option>
                      <option value="LA PAMPA">La Pampa</option>
                      <option value="LA RIOJA">La Rioja</option>
                      <option value="MENDOZA">Mendoza</option>
                      <option value="MISIONES">Misiones</option>
                      <option value="NEUQUEN">Neuquén</option>
                      <option value="RIO NEGRO">Río Negro</option>
                      <option value="SALTA">Salta</option>
                      <option value="SAN JUAN">San Juan</option>
                      <option value="SAN LUIS">San Luis</option>
                      <option value="SANTA CRUZ">Santa Cruz</option>
                      <option value="SANTA FE">Santa Fe</option>
                      <option value="SANTIAGO DEL ESTERO">Santiago del Estero</option>
                      <option value="TIERRA DEL FUEGO">Tierra del Fuego, Antártida e Islas del Atlántico Sur</option>
                      <option value="TUCUMAN">Tucumán</option>
                    </select>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom05">Localidad</label>
                    <input type="text" class="form-control" id="validationCustom05" name="localidad" required>
                  </div>
                  
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="inputFechan">Fecha de Nacimiento</label> 
                        <input type="date" class="form-control" id="inputFechan" name="fechan" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="inputTel">Teléfono</label> 
                        <input type="number" class="form-control" id="inputTelefono" name="telefono" required maxlength="12">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="selectPosicion">Posicion de Equipo Preferida</label>
                        <select class="custom-select" id="selectPosicion" name="posicion" required>
                            <option value="PORTERO">Portero</option>
                            <option value="LATERAL DERECHO">Lateral derecho</option>
                            <option value="DEFENSA CENTRAL">Defensa central</option>
                            <option value="DEFENSA LATERAL">Defensa lateral</option>
                            <option value="MEDIOCENTRO DEFENSIVO ">Mediocentro defensivo</option>
                            <option value="MEDIOCENTRO">Mediocentro</option>
                            <option value="DELANTERO CENTRO">Delantero Centro</option>
                            <option value="EXTREMO IZQUIERDO">Extremo Izquierdo</option>
                            <option value="EXTREMO DERECHO">Extremo Derecho</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputDireccion">Dirección</label>
                        <input type="text" class="form-control" id="inputDireccion" name="direccion" required>
                    </div>
                </div>
                <div class="form-row">
                    <!--<div class="col-md-6 mb-3">-->
                    <!--    <label for="inputContra">Contraseña</label>-->
                    <!--    <input type="password" class="form-control" id="inputContra" name="password" required>-->
                    <!--</div>-->
                    <div class="col-md-6 mb-3">
                      <label for="inputMail">Correo Electronico</label>
                      <input type="email" class="form-control" id="inputMail" aria-describedby="emailHelp" name="email" required>
                    </div>
                    
                    
                    <div class="col-md-6 mb-3">
                      <label for="inputUrl">Jugada Demostrativa</label>
                      <input type="text" class="form-control" placeholder="Ej: https://www.youtube.com/watch?..." id="inputUrl" name="url" required>
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
              <!--!form-->
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
    
  </body>
</html>