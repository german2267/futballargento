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
      $emailUser = $_POST['correo'];
      $ent_soc = $_POST['ent_soc'];
      $telUser = $_POST['telefono'];
      $dniUser = $_POST['dni'];


      $submitBtn = $_POST['submit'];

        if(isset($submitBtn)){

            if (!filter_var($emailUser, FILTER_VALIDATE_EMAIL)) {
                echo '<script> swal({
                                title: "Formato de Email invalido",
                                text: "",
                                icon: "warning"
                            }).then(function(){
                              window.location="../visualMods/recuPassPat.php";
                              });   </script>';

              } else{

            $sqlPost = "SELECT * FROM patrocinadores WHERE email = '$emailUser'AND telefono = '$telUser' AND ent_soc = '$ent_soc' AND dni = '$dniUser' ";

              $sqlEX = mysqli_query($con, $sqlPost);

              $rowSql = mysqli_fetch_array($sqlEX);

                if($sqlEX->num_rows>0){
                  
                  //otorgamiento de contraseña via servicio mailing, en cuanto este hosteado
                    //generacion de clave alfanumerica aleatoria de 8 caracteres
                      $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                      $shfl = str_shuffle($comb);
                      //encriptado sha_256
                      $pwd = SED::encryption(substr($shfl,0,8));

                      $pass = SED::decryption($pwd);

                      $validacion = 'NO';

                      //otorgamos una clave aleatoria de 8 caracteres para que se tenga que volver a activar

                      $updateSql = "UPDATE patrocinadores SET password = '$pwd' , validacion = '$validacion'";

                      $result = mysqli_query($con, $updateSql);

                        if($result){
                          //si estuviera hosteado se enviario por mailing
                          echo '<script> swal({
                                title: "Usuario Recuperado!",
                                text: "Tendras que logearte con esta contraseña: '.$pass.' , reactivar tu usuario y cambiar tu contraseña para acceder",
                                icon: "success"
                            }).then(function(){
                              window.location="../login.php";
                              }); </script>';
                        }







                }
                  else{
                    echo '<script> swal({
                                title: "No encontramos tu usuario",
                                text: "",
                                icon:"error"
                            }).then(function(){
                              window.location="../visualMods/recuPassPat.php";
                              }); </script>';

                    
                  }

                }

        }

      

      

        
        

      



 ?>