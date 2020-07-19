<!-- VISTA / ELIMINAR -->
<!--  -->
	<?php 

		include_once 'conexion.php';
		if(isset($_GET['id_admin'])){

			$id_admin=(int) $_GET['id_admin'];
			$delete=$con->prepare('DELETE FROM administrador WHERE id_admin=:id_admin');
			$delete->execute(array(
			':id_admin'=>$id_admin));

			header('Location: index.php');
		}else{
			header('Location: index.php');
		}

	?>