
<?php

session_start();
	require("conexion.php");

	$username=$_POST['mail'];
	$pass=$_POST['pass'];


	$sql2=mysqli_query($mysqli,"SELECT * FROM sesion WHERE email='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['pasadmin']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			$_SESSION['rol']=$f2['rol'];

			echo '<script>alert("ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";
		
		}
	}

	//se verifica que los valores concidan con los valores ingresados
	//valida si el usuario ingresado es cliente y carga el menu principal index.php
	$sql=mysqli_query($mysqli,"SELECT * FROM sesion WHERE email='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['password']){
			$_SESSION['id']=$f['id'];
			$_SESSION['user']=$f['user'];
			$_SESSION['rol']=$f['rol'];

			header("Location: index2.php");
		}else{
			//si no esta registrado me envia un mensaje de que la contraseña esta incorrecta
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='registro.php'</script>";
		}
	}else{
		//mensaje de cuenta no registrada por el cliente
		echo '<script>alert("CUENTA NO EXISTENTE/REGISTRATE")</script> ';
		
		echo "<script>location.href='registro.php'</script>";	

	}

?>