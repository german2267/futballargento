<?php

//modulos de conexion
include("../connection.php");
include("SED.php");
$con = conectame();
session_start();
$submitBtn = $_POST['login'];

if (isset($submitBtn)) {

	//tomamos los datos a comparar

	$email = $_POST['email_login'];
	$password = $_POST['password_login'];
	$pwd = SED::encryption($password);

	//comparamos en las 3 tablas (x 3 usuarios) con sentencias unidas por UNION

    $consulta = "SELECT id, nombre, email, password, tipo, validacion FROM postulantes WHERE email = '$email' AND password = '$pwd' 

    	UNION SELECT id, nombre, email, password, tipo, validacion FROM patrocinadores WHERE email = '$email' AND password = '$pwd' 

      UNION SELECT id, nombre, email, password, tipo, validacion FROM representantes WHERE email = '$email' AND password = '$pwd' ";


//en caso de encontrar los datos iguales a los comparados, redirigimos según el tipo de usuario

    $SQL = mysqli_query($con, $consulta);

    	//tomamos las variables de sesion para tratar al usuario en su apartado visual
     	if($SQL->num_rows > 0){
				$row = mysqli_fetch_assoc($SQL);
				$_SESSION['tipo'] = $row['tipo'];

				//postulante
				if($_SESSION['tipo'] == 0){

					$_SESSION['validacion'] = $row['validacion'];

						if($_SESSION['validacion'] == 'NO'){
							header("location:../validacionUsuario/validarPos.php");
							$_SESSION['nombre'] = $row['nombre'];
							$_SESSION['email'] = $row['email'];
							$_SESSION['id'] = $row['id'];

						} else{

					header("location:../visualMods/visualPost.php");
					$_SESSION['nombre'] = $row['nombre'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['id'] = $row['id'];
						}

				}
				//patrocinador
				else if($_SESSION['tipo'] == 1){

					$_SESSION['validacion'] = $row['validacion'];

						if($_SESSION['validacion'] == 'NO'){
							header("location:../validacionUsuario/validarPat.php");
							$_SESSION['nombre'] = $row['nombre'];
							$_SESSION['email'] = $row['email'];
							$_SESSION['id'] = $row['id'];

						}else{

					header("location:../visualMods/visualPat.php");
					$_SESSION['nombre'] = $row['nombre'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['id'] = $row['id'];
				}
				}

				//representante
				else if($_SESSION['tipo'] == 2){

					$_SESSION['validacion'] = $row['validacion'];

						if($_SESSION['validacion'] == 'NO'){
							header("location:../validacionUsuario/validarRepre.php");
							$_SESSION['nombre'] = $row['nombre'];
							$_SESSION['email'] = $row['email'];
							$_SESSION['id'] = $row['id'];

						}else{

					header("location:../visualMods/visualRepre.php");
					$_SESSION['nombre'] = $row['nombre'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['id'] = $row['id'];
				}
				}

     	}
     	else{
     		echo "<script>alert('Las credenciales no se encuentran en la base de datos');</script>";
     		header("location:../login.php");
     		die();
     	} 
}
  ?>

  