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

    <title>Alta Representante</title>
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
//modulos de conexion
include("../connection.php");
include("SED.php");
$con = conectame();

	$submitBtn = $_POST['submit'];

		if(isset($submitBtn)){

			//toma de datos por metodo post
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$provincia = $_POST['provincia'];
			$dni = $_POST['dni'];
			$email = $_POST['email'];
			$club_rep = $_POST['club_rep'];
			$num_club = $_POST['num_club'];
			$num_rep = $_POST['num_rep'];

			//generacion de clave alfanumerica aleatoria de 8 caracteres
	        $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	        $shfl = str_shuffle($comb);
	        //encriptado sha_256
	        $pwd = SED::encryption(substr($shfl,0,8));

	        //para mostrarla al usuario por pantalla
	        $password = SED::decryption($pwd);

	        $tipo = 2;

	        //validacion de formato mail
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  echo '<script> swal({
												   			title: "Formato Email invalido",
												   			text: "",
												   			icon: "error"
												   	}).then(function(){
												   		window.location="../visualMods/regRepre.php";
												   		}); </script>';

			}
			else{

				$dniSQL = "SELECT dni FROM representantes WHERE dni = '$dni'";
				$dniSQLEX = mysqli_query($con, $dniSQL);
				$rowDni = mysqli_fetch_assoc($dniSQLEX);

			if($rowDni){
				echo '<script> swal({
												   			title: "Este Dni ya esta en nuestro sistema",
												   			text: "",
												   			icon: "warning"
												   	}).then(function(){
												   		window.location="../visualMods/regRepre.php";
												   		});  </script>';
			}
				else{

				//seleccion de email en la tabla, confirmar su existencia 
				$emailSQL = "SELECT email FROM representantes WHERE email= '$email'";

				//validacion de contacto de representante
				$numRepSQL = "SELECT num_rep FROM representantes WHERE num_rep = '$num_rep'";

				$numRepSQLEX = mysqli_query($con, $numRepSQL);

				$rowNumRep = mysqli_fetch_assoc($numRepSQLEX);

					if($rowNumRep){
						echo '<script> swal({
												   			title: "Este telefono ya esta en nuestro sistema",
												   			text: "",
												   			icon: "warning"
												   	}).then(function(){
												   		window.location="../visualMods/regRepre.php";
												   		});  </script>';
						
					}

					else{
						//validacion existencia de email
						$emailSQLEX = mysqli_query($con, $emailSQL);
						$rowEmailSQL = mysqli_fetch_assoc($emailSQLEX);
							if($rowEmailSQL){
								echo '<script> swal({
												   			title: "Este Email ya esta en nuestro sistema",
												   			text: "",
												   			icon: "warning"
												   	}).then(function(){
												   		window.location="../visualMods/regRepre.php";
												   		});  </script>';
								

							}

								else{
									//consulta de insercion

									$sql = "INSERT INTO `representantes`(`nombre`, `apellido`, `provincia`, `dni`, `email`, `club_rep`, `password`, `num_club`, `num_rep`, `validacion`, `tipo`) 

										VALUES ('".$nombre."','".$apellido."','".$provincia."','".$dni."','".$email."','".$club_rep."','".$pwd."','".$num_club."','".$num_rep."','NO','".$tipo."')";

										$sqlEX = mysqli_query($con, $sql);

										if($sqlEX){
											//caso: datos a ingresar NO repetidos en la tabla "postulantes"

											//funcion mailing
					$subject = "futbolargentoproject@gmail.com";
					$txt = "Hola REPRESENTANTE!, tu credencial para activar tu usuario es: " . $password;
					$headers = "From: futbolargentoproject@gmail.com" . "\r\n" .
					"";
					
					$mail =  mail($email,$subject,$txt,$headers);

					if ($mail){

										 	echo '<script type="text/javascript">
												   swal({
												   			title: "Usuario registrado!",
												   			text: "Su usuario fue dado de alta con éxito. Su clave fue otorgada a su direccion email, revise el SPAM",
												   			type: "success"
												   	}).then(function(){
												   		window.location="../login.php";
												   		});

												   </script>'; } else{
													echo "error, el mail no se envió";
												   }

										}
										else{
											//en caso de encontrar el correo repetido en la base de datos, redirigimos al usuario a iniciar su sesion
											echo '<script> swal({
												   			title: "Error en la insercion de datos",
												   			text: "",
												   			icon: "warning"
												   	}).then(function(){
												   		window.location="../visualMods/regRepre.php";
												   		}); </script>';

											error_reporting(0);


										}
								}

					}

				}
			}


		}
		else{
			echo "no presiono submit";
		}

 ?>