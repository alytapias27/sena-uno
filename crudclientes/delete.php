<!-- VISTA / ELIMINAR -->
<!--  -->
	<?php 

		include_once 'conexion.php';

		if(isset($_GET['id_cliente'])){
			$id_cliente=(int) $_GET['id_cliente'];
			$delete=$con->prepare('DELETE FROM clientes WHERE id_cliente=:id_cliente');
			$delete->execute(array(
			':id_cliente'=>$id_cliente));

			header('Location: index.php');

		}else{

			header('Location: index.php');
		}

	?>