<!-- VISTA / CRUD ADMINISTRADOR -->
<?php

	include_once 'conexion.php';

	$sentencia_select=$con->prepare('SELECT *FROM administrador ORDER BY id_admin DESC');
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();

	// metodo buscar
	if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		$select_buscar=$con->prepare('
			SELECT *FROM administrador WHERE nombre  LIKE :campo OR id_usuario  LIKE :campo;'
		);

		$select_buscar->execute(array(
			':campo' =>"%".$buscar_text."%"
		));

		$resultado=$select_buscar->fetchAll();

	}

?>

<!-- VISTA / REPORTES DE CLIENTES -->
<!DOCTYPE html>
<html lang="es"> <!-- lenguaje - español -->

	<!-- CABECERA DE LA PAGINA -->
	<head>
		<meta charset="UTF-8">
		<title>CRUD || Administrador</title> <!-- Titulo principal-->
	<!-- ESTILOS CSS -->
		<link rel="stylesheet" href="../crudadmin/csss/estilo_admin.css">
	<!-- FONTS -->
		<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,600;0,700;0,800;0,900;1,100&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
	</head>

	<!-- CUERPO DE LA PAGINA -->
	<body>
		<!-- SECCION / PERFIL DE ADMINISTRADOR  -->
		<!-- En esta seccion se ubica el perfil del administrador, vista que contiene un sidebar donde se ubican las diferentes opciones para que el administrador
		ingrese a los reportes de lo que se realiza en la pagina web -->
		<div class="section-uno"> <!-- Contenedor principal  -->

			<!-- SECCION / SIDEBAR -->
			<!-- Esta seccion contiene sesis botones de accion en la parte iquierda de la pagina web, estos botones redireccionan al administrador a acceder
			a los difererentes modulos y sus reportes -->
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
			<!-- En esta seccion se ubica la tabla de reportes de los usuarios -->
			<div class="contenido"> <!-- Contenedor contenido -->
				<div class="conten-tablas"> <!-- Contenedor padre -->

					<div class="contenedor"> <!-- Contenedor tablas-->
						<h2>Reportes de Usuarios</h2>

						<!-- En este contenedor se ubican tres botones de accion -buscar, nuevo y eliminar- el primero contiene a su lado isquierdo una barra buscadora 
						la cual le permite al administrador realizar filtros de busqueda en la informacion almacenada en la base de datos para luego clasificarla
						y mostrarla por columnas y en sus respectivos campos -->
						<div class="barra__buscador">
							<form action="" class="formulario" method="post">
								<input type="text" name="buscar" placeholder="buscar nombre o id_usuario" 
								value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
								<input type="submit" class="btn" name="btn_buscar" value="Buscar">
								<a href="insert.php" class="btn btn__nuevo">Nuevo</a>
								<a href="../Loginnn/admin.php" class="btn btn__nuevo">Volver</a>
							</form>
						</div>

						<!-- En este contenedor se ubica la tabla del modulo -crud administrador-, esta contiene cuatro columnas donde se muestra la informacion clasificada 
						y correspondiente a cada item -->
						<table> <!-- Contenedor de tabla de admon-->

							<tr class="head"> <!-- Items-->
								<td>id_admin</td> <!-- Item uno-->
								<td>estado</td> <!-- Item dos -->
								<td>num_documento</td> <!-- Item tres -->
								<td colspan="2">Acción</td> <!-- Item cuatro -->
							</tr>

							<?php foreach($resultado as $fila):?> 
								
							<tr>
								<td><?php echo $fila['id_admin']; ?></td>
								<td><?php echo $fila['estado']; ?></td>

								<?php 

									$query = $con -> prepare ("SELECT * FROM datos_personales");
									$query->execute();
									foreach ($query as $valores) {
									if ($fila['num_documento']==$valores['id']){
											$doc=$valores['num_documento'];
										}
					
									}
								?>

								<td><?php echo $doc; ?></td>
					
								<!-- BOTONES DE ACCION (editar, eliminar) -->
								<!-- Los botones se activan en el momento en que el usuario produce el evento, busca el archivo php en este caso -update.php- -->
								<td><a href="update.php?id_admin=<?php echo $fila['id_admin']; ?>"  class="btn__update" >Editar</a></td>
								<td><a href="delete.php?id_admin=<?php echo $fila['id_admin']; ?>" class="btn__delete">Eliminar</a></td>
							</tr>

							<?php endforeach ?>

						</table> <!-- Fin / Contenedor de la tabla-->

					</div> <!-- Fin / Contenedor tabla de admon-->

				</div> <!-- Fin / Contenedor padre -->  

			</div> <!-- Fin / Contenedor contenido -->  

		</div> <!-- Fin / Contenedor principal  -->  

	</body> <!-- Fin / Cuerpo de la pagina -->

</html> <!-- Fin / pagina web -->