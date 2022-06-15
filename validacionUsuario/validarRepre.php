<?php
include("../connection.php");
include("../funciones/segUrl.php");
      $con = conectame();

      session_start();
      
      $id = $_SESSION['id'];
      $nombre = $_SESSION['nombre'];
      $email = $_SESSION['email'];
      destroyRepre();
      

 ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--sweet alert2 cdn -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <title>Validacion Usuario</title>
  </head>
  <body>

    <script type="text/javascript">
        Swal.fire({
          title: 'Activar Cuenta!',
          text: 'Actualiza tu contraseña para que tu cuenta esté activada. Recuerda que tiene que ser de 8 caracteres alfanumericos!',
          imageUrl: '../assets/img/actualizar1.png',
          imageWidth: 400,
          imageHeight: 200,
          imageAlt: 'Custom image',
        })

    </script>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <form action="validarRepreMod.php" method="post">
      
      <h1 class="text-center display-4 pb-5 mb-2 mt-4"  style="padding-top: 5rem;"><?php echo"Hola " . $nombre ?>, tendrá que actualizar su contraseña para validar su usuario</h1>

<center>
      <div class="card" class="card" style="width: 600px ;">
        <div class="card-body mt-3 mr-2 ml-2">

          <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1">🔒</span>
            <input type="password" class="form-control" name="pass1" placeholder="Nueva contraseña" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>

          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">🔒</span>
            <input type="password" class="form-control" name="pass2" placeholder="Confirme su contraseña" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>

          <div class="button" mt-3>
          <button type="submit" name="submit" class="btn btn-outline-success">Actualizar</button>
          </div>

          </div>
      </div>

    </form>

    </center>


    
    
  </body>
</html>