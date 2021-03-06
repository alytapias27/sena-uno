<!-- VISTA / CRUD CLIENTES -->

<?php

	include_once 'conexion.php';

	$sentencia_select= $con->prepare('SELECT *FROM clientes ORDER BY id_cliente  DESC');
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();

	// metodo buscar
	if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		$select_buscar=$con->prepare('
			SELECT *FROM clientes WHERE num_documento  LIKE :campo OR estado LIKE :campo;'
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
		<title>CRUD || Clientes</title> <!-- Titulo principal-->
	<!-- ESTILOS CSS -->
		<link rel="stylesheet" href="../crudclientes/csss/estilo_clientes.css">
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

						<!-- SECCION / OPCIONES DEL ADMINISTRADOR -->
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
						<div class="contenedor"> <!-- Contenedor hijo -->

							<br><br> <!-- saltos de linea -->
							<h2>Clientes</h2> <!-- Titulo -->
							<div class="barra__buscador"> 
								<form action="" class="formulario" method="post">
									<input type="text" name="buscar" placeholder="buscar estado o num_documento" 
									value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
									<input type="submit" class="btn" name="btn_buscar" value="Buscar">
									<a href="insert.php" class="btn btn__nuevo">Nuevo</a> <!-- Boton uno -->
									<a href="../Loginnn/admin.php" class="btn btn__nuevo">Volver</a> <!-- Boton dos -->
								</form>
							</div>

							<table> <!-- Contenedor de la tabla de clientes -->
								<tr class="head">
									<td>num_documento</td>
									<td>estado</td>
									<td colspan="2">Acción</td>
								</tr>

								<?php foreach($resultado as $fila):?>

								<tr>
									<?php 
										$query = $con -> prepare ("SELECT * FROM datos_personales");
										$query->execute();
										foreach ($query as $valores) {
											if ($fila['num_documento']==$valores['id']){
												$iden=$valores['num_documento'];
											}
										}
									?>
									<td><?php echo $iden; ?></td>
									<td><?php echo $fila['estado']; ?></td>	
									<td><a href="update.php?id_cliente=<?php echo $fila['id_cliente']; ?>"  class="btn__update" >Editar</a></td> <!-- Boton uno -->
									<td><a href="delete.php?id_cliente=<?php echo $fila['id_cliente']; ?>" class="btn__delete">Eliminar</a></td> <!-- Boton dos -->
								</tr>

								<?php endforeach ?>

							</table> <!-- Fin / Contenedor de la tabla de clientes -->

						</div> <!-- Fin / Contenedor hijo -->

				 	 </div> <!-- Fin / Contenedor padre -->
				  
              </div> <!-- Fin / Contenedor contenido -->

        </div> <!-- Fin / Contenedor principal -->

    </body> <!-- Fin / Cuerpo de la pagina -->

</html> <!-- Fin / pagina web -->