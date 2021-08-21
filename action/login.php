<?php
	session_start();

	if (empty($_POST['email'])) {
           echo  "<script>alert(\"Correo electrónico invalido\"); window.location=\"../index.php\"</script>";
        } else if (empty($_POST['password'])){
			echo  "<script>alert(\"Contraseña invalida\"); window.location=\"../index.php\"</script>";
		} else if (
			!empty($_POST['email'])  &&
			!empty($_POST['password'])
		){
			
		//Contiene las variables de configuracion para conectar a la base de datos
		include_once "../config/config.php";


		$email=strip_tags($_POST["email"],ENT_QUOTES);
		$password=sha1(md5(strip_tags($_POST["password"],ENT_QUOTES)));
		
$datos = [
    "email" => $_POST['email'],
    "password" => $_POST['password'],
];
$sql = "SELECT email FROM users WHERE email = '" . $email . "' ";
$val = sqlsrv_query($con, $sql);
$dato = sqlsrv_fetch_array($val);

		if ($row = sqlsrv_fetch_array($val)) 
		{
			if ($row['is_active']>0) 
			{ 
				
					$_SESSION['user_id'] = $row['id'];
					$_SESSION['profile'] = $row['profile'];
					print "Cargando ... $email";
					print "<script>window.location='../home.php';</script>";
				
				
			}else{
				$error=sha1(md5("cuenta inactiva"));
				header("location: ../index.php?error=$error");
			}
		}else{
			$invalid=sha1(md5("email invalido"));
			header("location: ../index.php?invalid=$invalid");
		}
	}	

?>