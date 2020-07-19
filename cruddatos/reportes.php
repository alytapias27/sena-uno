<!-- VISTA / REPORTE DE DATOS PERSONALES -->
<?php

	include_once 'conexion.php';

	$sentencia_select=$con->prepare('SELECT *FROM datos_personales ORDER BY id  DESC');
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();

	// metodo buscar
	if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		$select_buscar=$con->prepare('
			SELECT *FROM datos_personales WHERE num_documento LIKE :campo OR nombre LIKE :campo;'
		);

		$select_buscar->execute(array(
			':campo' =>"%".$buscar_text."%"
		));

		$resultado=$select_buscar->fetchAll();

	}

?> 

<!-- REPORTES DE LOS DATOS PERSONALES DE LOS CLIENTES -->
<!DOCTYPE html>
<html lang="es"> <!-- lenguaje - español -->

	<!-- CABECERA DE LA PAGINA -->
	<head>
		<meta charset="UTF-8">
		<title>Reportes</title>
	<!-- ESTILOS CSS -->
		<link rel="stylesheet" href="../cruddatos/csss/estilo_datos.css">
	<!-- FONTS -->
		<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,600;0,700;0,800;0,900;1,100&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
	</head>

	<!-- CUERPO DE LA PAGINA -->
	<body>
	<!-- SECCION / PERFIL DE ADMINISTRADOR  -->
	<!-- En esta seccion se ubica el perfil del administrador, vista que contiene un sidebar donde se ubican las diferentes opciones para el usuario
		y donde se generan los reportes y las consultas que realiza el administrador de la pagina web -->

		<!-- SECCION / INPUTS DE LAS TABLAS -->
		<div class="contenedor"> 
            <center><h1>TouristAR</h1></center>
            <br>
            <center><img src="../img/iconos/mapa.png" alt="" class="logo-reportes"></center>
			<h2>Reportes de los Datos Personales || Clientes</h2>

			<!-- Contenedor barra buscadora -->
		    <!-- En este contenedor se ubica la barra buscadora  -->
			<div class="barra__buscador">
				<form action="" class="formulario" method="post">
					<input type="text" name="buscar" placeholder="buscar nombre o numero documento" value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
					<input type="submit" class="btn" name="btn_buscar" value="Buscar">
					<a href="../cruddatos/index.php" class="btn btn__nuevo">Volver</a>
					<input type="button" value="Imprimir" onclick="window.print()" class="btn btn-secondary">
				</form>
			</div> <!-- Fin / Contenedor barra buscadora -->

			<table>
				<tr class="head">
					<td>Id</td>     
					<td>Documento</td>
					<td>Nombre</td>
					<td>Apellidos</td>
					<td>Fecha nacimiento</td>
					<td>Genero</td>
					<td>Correo</td>
					<td>Celular</td>
					<td>Id usuario</td>

				</tr>

				<?php foreach($resultado as $fila):?>

				<tr>
				    <td><?php echo $fila['id']; ?></td>
					<td><?php echo $fila['num_documento']; ?></td>
				    <td><?php echo $fila['nombre']; ?></td>
					<td><?php echo $fila['apellidos']; ?></td>
				    <td><?php echo $fila['fecha_nacimiento']; ?></td>
					<td><?php echo $fila['genero']; ?></td>
					<td><?php echo $fila['correo']; ?></td>
					<td><?php echo $fila['telef_celular']; ?></td>

					<?php 
						$query = $con -> prepare ("SELECT * FROM sesion");
						$query->execute();
						foreach ($query as $valores) {
						if ($fila['id_usuario']==$valores['id']){
                            $doc=$valores['id'];
							}
						}
					?>
	
					<td><?php echo $doc; ?></td>
				</tr>

				<?php endforeach ?>

			</table> <!-- Fin / Contenedor de la tabla-->

		</div> <!-- Fin / Contenedor tablas-->

    </body> <!-- Fin / Cuerpo de la pagina -->

</html> <!-- Fin / pagina web -->