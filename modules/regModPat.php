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

    <title>Alta Patrocinador</title>
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
//modulos de conexion y encriptado sha 256
include("../connection.php");
include("SED.php");

$con = conectame();

$submitBtn = $_POST['submit'];

if(isset($submitBtn)){

	//tomamos los datos ingresados por el usuario a registrar

	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$ent_soc = $_POST['ent_soc'];
	$dni = $_POST['dni'];

	    //generacion de clave alfanumerica aleatoria de 8 caracteres
        $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $shfl = str_shuffle($comb);
        $pwd = SED::encryption(substr($shfl,0,8));
        
        $password = SED::decryption($pwd);

        $tipo = 1;
        
	
	  //generacion de datos via mail
	 //    $header = "FROM: noreply@fut-arg.com";
		// $header_to = "Reply-To: noreply@fut-arg.com";
		// $head_php_version = "PHP/" . phpversion();
		// $str = "Hola PATROCINADOR, su clave es: " . $password;

		//validacion de formato mail
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  echo '<script> swal("Formato Mail Invalido", {
				    className: "red-bg",
				  }); </script>';

		}
		else{
	


	    $sql = "SELECT email FROM patrocinadores WHERE email= '$email'";

	    //validacion de existencia de telefono en la BD
					$telSql = "SELECT telefono FROM patrocinadores WHERE telefono = '$telefono';
						";
					$sqlEjecute = mysqli_query($con, $telSql);
					$row_tel = mysqli_fetch_assoc($sqlEjecute);

						if ($row_tel) {
							echo '<script type="text/javascript">
												   swal({
												   			title: "Este telefono ya esta en nuestro sistema",
												   			text: "",
												   			icon: "warning"
												   	}).then(function(){
												   		window.location="../visualMods/regPat.php";
												   		});

												   </script>';
						}

							else{
								
									$dniSql = "SELECT dni FROM patrocinadores WHERE dni = '$dni' ";
									$resultDni = mysqli_query($con, $dniSql);
										if($resultDni->num_rows>0){
											echo '<script> swal({
												   			title: "Este Dni ya se encuentra en nuestro sistema",
												   			text: "",
												   			icon: "warning"
												   	}).then(function(){
												   		window.location="../visualMods/regPat.php";
												   		}); </script>';
											
										}
										else{

										$resultMail = mysqli_query($con, $sql);
										    if (!$resultMail->num_rows > 0) {

												$query = "INSERT INTO `patrocinadores`(`nombre`, `apellido`, `email`, `telefono`, `ent_soc`, `password`, `validacion`, `tipo`, `dni`) VALUES ('".$nombre."','".$apellido."','".$email."','".$telefono."','".$ent_soc."','".$pwd."', 'NO', '".$tipo."', '".$dni."')";

												$result = mysqli_query($con, $query);

												if($result){
												    
												   //funcion mailing
													$subject = "futbolargentoproject@gmail.com";
													$txt = "Hola PATROCINADOR!, tu credencial es: " . $password;
													$headers = "From: futbolargentoproject@gmail.com" . "\r\n" .
													"";
													
													mail($email,$subject,$txt,$headers);
													//redireccion a pagina con apartado para inicio de sesion
												   echo '<script type="text/javascript">
												   swal({title: "Usuario registrado!",
												   			text: "Su usuario fue dado de alta con éxito. Su clave es '. $password .', cópiela",
												   			type: "success"
												   	}).then(function(){
												   		window.location="../login.php";
												   		});

												   </script>';

												   // echo "su clave es: " . $password;

												   // echo "<br>";
												   
												   // echo '<br> <button type="button" class="btn btn-outline-info"><a href="../login.php" style="text-decoration:none;">Iniciar Sesion</a></button>';
												}
											} else {

												//si el correo existe lo redirigimos al iniciio de sesion
												echo '<script> swal({
												   			title: "Este Email ya se encuentra en nuestro sistema",
												   			text: "",
												   			icon: "warning"
												   	}).then(function(){
												   		window.location="../visualMods/regPat.php";
												   		});  </script>';
											     
											}



										}
											
				 
			 }
		}
	}

 ?>