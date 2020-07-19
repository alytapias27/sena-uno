<!-- VISTA / CONEXION A LA BASE DE DATOS -->
<!--  -->
	<?php

		$database="touristar";
		$user='root';
		$password='';

		try {
			
			$con=new PDO('mysql:host=localhost;dbname='.$database,$user,$password);

		} catch (PDOException $e) {
			
			echo "Error".$e->getMessage();
		}

	?>