
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

    <title>Alta Postulante</title>
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
	$dni = $_POST['dni'];
	$provincia = $_POST['provincia'];
	$localidad = $_POST['localidad'];
	$direccion = $_POST['direccion'];
	$email = $_POST['email'];
	$fechan = $_POST['fechan'];
	$telefono = $_POST['telefono'];
	$posicion = $_POST['posicion'];
	
        //generacion de clave alfanumerica aleatoria de 8 caracteres
        $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $shfl = str_shuffle($comb);
        //encriptado sha_256
        $pwd = SED::encryption(substr($shfl,0,8));
        

	$url = $_POST['url'];
	

	$password = SED::decryption($pwd);

	//funcion mailing
	// the message
	$msg = "Su clave es:\n" . $password ;

	// use wordwrap() if lines are longer than 70 characters
	$msg = wordwrap($msg,70);

	// send email
	mail("fut-arg@mitecnica.com","Asignacion de Clave",$msg);



	$tipo = 0;
	    //generacion de datos via mail
	 //    $header = "FROM: noreply@fut-arg.com";
		// $header_to = "Reply-To: noreply@fut-arg.com";
		// $head_php_version = "PHP/" . phpversion();
  //       $str = "Hola POSTULANTE, su clave es: " . $password;
	    
	
//calcular edad por fechan
        function calculaedad($fechanacimiento){
			  list($ano,$mes,$dia) = explode("-",$fechanacimiento);
			  $ano_diferencia  = date("Y") - $ano;
			  $mes_diferencia = date("m") - $mes;
			  $dia_diferencia   = date("d") - $dia;
			  if ($dia_diferencia < 0 || $mes_diferencia < 0)
			    $ano_diferencia--;
			  return $ano_diferencia;
					}

				 $edad =	calculaedad($fechan);

				 
			
        //validacion de formato mail
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		 echo '<script type="text/javascript">
												   swal({
												   			title: "Formato Email Invalido",
												   			text: "",
												   			icon: "error"
												   	}).then(function(){
												   		window.location="../visualMods/regPost.php";
												   		});

												   </script>';

		}
		else{
	

		$sql = "SELECT email FROM postulantes WHERE email= '$email'";
		
//validacion de existencia de datos a ingresar en la BD
		$telSql = "SELECT telefono FROM postulantes WHERE telefono = '$telefono';
			";
		$sqlEjecute = mysqli_query($con, $telSql);
		$row_tel = mysqli_fetch_assoc($sqlEjecute);

			if ($row_tel) {
				echo '<script> swal({
												   			title: "El telefono ya esta en nuestro sistema",
												   			text: "",
												   			icon: "warning"
												   	}).then(function(){
												   		window.location="../visualMods/regPost.php";
												   		});  </script>';
				
			}

			else{

					$url_SQL = "SELECT jugada FROM `postulantes` WHERE jugada = '$url'";
					$resultUrl = mysqli_query($con, $url_SQL);
					$urlExecute = mysqli_fetch_assoc($resultUrl);

					if ($urlExecute) {
						echo '<script> swal({
												   			title: "Este video ya se encuentra en nuestro sistema",
												   			text: "",
												   			icon: "warning"
												   	}).then(function(){
												   		window.location="../visualMods/regPost.php";
												   		});  </script>';
						
					}

					else{

						$dniSql = "SELECT dni FROM postulantes WHERE dni = '$dni'";
						$resultDniSql = mysqli_query($con, $dniSql);
						$rowDni = mysqli_fetch_assoc($resultDniSql);
							if($rowDni){
								echo '<script> swal({
												   			title: "Este Dni ya esta en nuestro sistema",
												   			text: "",
												   			icon: "warning"
												   	}).then(function(){
												   		window.location="../visualMods/regPost.php";
												   		});  </script>';
								

							} else{

				$result = mysqli_query($con, $sql);
				if (!$result->num_rows > 0) {
					//consulta a BD (insercion de datos)
				$query = "INSERT INTO `postulantes`(`nombre`, `apellido`, `provincia`, `localidad`, `direccion`, `email`, `fechan`, `telefono`, `posicion`, `password`, `jugada`, `validacion`, `tipo`, `dni`) VALUES ('".$nombre."','".$apellido."','".$provincia."','".$localidad."','".$direccion."','".$email."','".$fechan."','".$telefono."','".$posicion."','".$pwd."','".$url."','NO','".$tipo."', '".$dni."')";

					$result = mysqli_query($con, $query);
		
				if($result){
					//caso: datos a ingresar NO repetidos en la tabla "postulantes"
			            echo '<script type="text/javascript">
												   swal({
												   			title: "Usuario registrado!",
												   			text: "Su usuario fue dado de alta con éxito. Su clave fue otorgada a su direccion email, revise el SPAM",
												   			icon: "success"
												   	}).then(function(){
												   		window.location="../login.php";
												   		});

												   </script>';
			                
					  	} 

				} 



				else {
					//en caso de encontrar el correo repetido en la base de datos, redirigimos al usuario a iniciar su sesion
				     echo '<script> swal({
												   			title: "Este Email ya esta en nuestro sistema",
												   			text: "",
												   			icon: "warning"
												   	}).then(function(){
												   		window.location="../visualMods/regPost.php";
												   		}); </script>';
				     
					}

				}
					//x 

				}

			}
	    
	    
	    
		}
	}


 ?>