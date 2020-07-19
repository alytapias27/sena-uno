<!-- VISTA / ELIMINAR -->
<!--  -->
	<?php 

		include_once 'conexion.php';
		if(isset($_GET['id_contactenos'])){
			$id_contactenos=(int) $_GET['id_contactenos'];
			$delete=$con->prepare('DELETE FROM contactenos WHERE id_contactenos=:id_contactenos');
			$delete->execute(array(
				':id_contactenos'=>$id_contactenos
			));
			header('Location: index.php');
		}else{
			header('Location: index.php');
		}
	?>