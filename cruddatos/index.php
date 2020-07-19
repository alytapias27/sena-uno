 <!-- VISTA PRICIPAL / DATOS PERSONALES -->
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

<!-- PAGINA DE BIENVENIDA PARA LOS USUARIOS -->
<!DOCTYPE html>
<html lang="es"> <!-- lenguaje - español -->

	<!-- CABECERA DE LA PAGINA -->
	<head>
		<meta charset="UTF-8">
		<title>CRUD || Datos personales</title>
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
		<div class="section-uno"> <!-- Contenedor principal  -->

			<!-- SECCION / SIDEBAR -->
			<!-- Esta seccion contiene sesis botones en la parte iquierda -->
			<div id="sidebar"> <!-- Contenedor sidebar -->
				<div class="menu"> 
					<div class="botones"> <!-- Contenedor botones de accion -->

						<center> <!-- Etiqueta para centrar -->

							<img src="../img/iconos/mapa.png" alt=""> <!-- Logotipo -->
							<h1>TouristAR</h1> <!-- Titulo -->
							<h4>System</h4>
                            <br><br>
                            <button><a href="../crudusuario/index.php">Cuentas Registradas</a></button> <!-- Boton uno -->
                            <br><br>
                            <button><a href="../cruddatos/index.php">Datos Personales <br> Clientes</a></button> <!-- Boton dos -->
                            <br><br>
                            <button><a href="../crudcontactenos/index.php">Contactenos</a></button> <!-- Boton tres-->
                            <br><br>
                            <button><a href="../crudadmin/index.php">CrudAdministrador</a></button> <!-- Boton cinco -->
                            <br><br>
                            <button><a href="desconectar.php">Cerrar</a></button> <!-- Boton seis -->

						</center> <!-- Fin / Etiqueta para centrar -->

					</div> <!-- Fin / Contenedor botones de accion -->
				</div>
			</div> <!-- Fin / Contenedor sidebar -->

		<!-- SECCION / CONTENIDO -->
		<!-- Esta seccion contiene las tablas -->
			<div class="contenido"> <!-- Contenedor contenido -->
				<div class="conten-tablas"> <!-- Contenedor padre -->

					<!-- SECCION / INPUTS DE LAS TABLAS -->
					<div class="contenedor"> 

						<h2>Datos Personales de Clientes</h2>

						<!-- Contenedor barra buscadora -->
						<!-- En este contenedor se ubica la barra buscadora  -->
						<div class="barra__buscador">
							<form action="" class="formulario" method="post">
								<input type="text" name="buscar" placeholder="buscar nombre o numero documento" 
								value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
								<input type="submit" class="btn" name="btn_buscar" value="Buscar">
								<a href="../Loginnn/admin.php" class="btn btn__nuevo">Volver</a>
								<a href="../cruddatos/reportes.php" class="btn btn__nuevo">Reportes</a>
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
								<td colspan="2">Acción</td>
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
						
									<td><a href="update.php?id_admin=<?php echo $fila['id_admin']; ?>"  class="btn__update" >Editar</a></td>
									<td><a href="delete.php?id_admin=<?php echo $fila['id_admin']; ?>" class="btn__delete">Eliminar</a></td>
							</tr>

							<?php endforeach ?>

						</table> <!-- Fin / Contenedor de la tabla-->

					</div> <!-- Fin / Contenedor tablas-->

				</div> <!-- Fin / Contenedor padre -->  

			</div> <!-- Fin / Contenedor contenido -->  
            
		</div> <!-- Fin / Contenedor principal  -->  

	</body> <!-- Fin / Cuerpo de la pagina -->

</html> <!-- Fin / pagina web -->