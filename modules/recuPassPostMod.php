<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--sweet alert cdn -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title></title>
  </head>
  <body>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>


<?php
include("../connection.php");
include("SED.php");
$con = conectame();
  // error_reporting(0);

      $dniUser = $_POST['dni'];
      $emailUser = $_POST['correo'];
      // echo $emailUser;
      $direccionUser = $_POST['direccion'];
      $fechanUser = $_POST['fechan'];
      $telUser = $_POST['telefono'];

      $submitBtn = $_POST['submit'];

        if(isset($submitBtn)){

            if (!filter_var($emailUser, FILTER_VALIDATE_EMAIL)) {
                echo '<script> swal({
                                title: "Formato de Email invalido",
                                text: "",
                                icon: "warning"
                            }).then(function(){
                              window.location="../visualMods/recuPassPost.php";
                              })   </script>';

          

              } else{

            $sqlPost = "SELECT * FROM postulantes WHERE dni = '$dniUser' AND email = '$emailUser'AND direccion = '$direccionUser'AND fechan = '$fechanUser' AND telefono = '$telUser' ";

              $sqlEX = mysqli_query($con, $sqlPost);

              $rowSql = mysqli_fetch_array($sqlEX);
              $email = $rowSql['email'];
              $nom = $rowSql['nombre'];
              $nombre = strtoupper($nom);

                if($sqlEX->num_rows>0){

                    //otorgamiento de contraseña via servicio mailing, en cuanto este hosteado
                    //generacion de clave alfanumerica aleatoria de 8 caracteres
                      $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                      $shfl = str_shuffle($comb);
                      //encriptado sha_256
                      $pwd = SED::encryption(substr($shfl,0,8));

                      $password = SED::decryption($pwd);


                      $validacion = 'NO';

                      //otorgamos una clave aleatoria de 8 caracteres para que se tenga que volver a activar

                      $updateSql = "UPDATE postulantes SET password = '$pwd' , validacion = '$validacion' ";

                      $result = mysqli_query($con, $updateSql);

                        if($result){
                          //si estuviera hosteado se enviario por mailing
                          //funcion mailing
                          $subject = "futbolargentoproject@gmail.com";
                          $txt = 'Hola de nuevo '.$nombre.', tu credencial para recuperar tu usuario es: ' . $password;
                          $headers = "From: futbolargentoproject@gmail.com" . "\r\n" .
                          "";
                          
                          $mail =  mail($email,$subject,$txt,$headers);

                          if ($mail){

                          echo '<script> swal({
                                title: "Usuario Recuperado!",
                                text: "Tendras que logearte con la contraseña que enviamos a tu email, logearte y actualizar tu contraseña para recuperar tu usuario",
                                icon: "success"
                            }).then(function(){
                              window.location="../login.php";
                              }); </script>';
                            } else{
                              echo "error, el mail no se envió";
                            }
                        }







                }
                  else{
                    echo '<script> swal({
                                title: "No encontramos tu usuario",
                                text: "",
                                icon:"error"
                            }).then(function(){
                              window.location="../visualMods/recuPassPost.php";
                              }); </script>';
                  }

                }

        }

      

      

        
        

      



 ?>