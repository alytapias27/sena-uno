<!-- VISTA / CONEXION A LA BASE DE DATOS -->
<!--  -->
	<?php

			$mysqli = new MySQLi("localhost", "root","", "touristar1");
			if ($mysqli -> connect_errno) {
				die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
					. ") " . $mysqli -> mysqli_connect_error());
			}
			else

	?>