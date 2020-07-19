<!-- VISTA / MODIFICAR DATOS -->
<?php

	include_once 'conexion.php';

	if(isset($_GET['id'])){
		$id =(int) $_GET['id'];

		$buscar_id=$con->prepare('SELECT * FROM datos_personales WHERE id=:id LIMIT 1');
		$buscar_id->execute(array(
			':id'=>$id 
		));
		$resultado=$buscar_id->fetch();
	}else{
		header('Location: index.php');
	}

	if(isset($_POST['guardar'])){
		$num_documento=$_POST['num_documento'];
		$nombre=$_POST['nombre'];
		$apellidos=$_POST['apellidos'];
		$fecha_nacimiento=$_POST['fecha_nacimiento'];
		$genero=$_POST['genero'];
		$correo=$_POST['correo'];
		$telef_celular=$_POST['telef_celular'];
		$id_usuario=$_POST['id_usuario'];
		$id=(int) $_GET['id'];

		if(!empty($num_documento) && !empty($nombre) && !empty($apellidos) && !empty($fecha_nacimiento) && !empty($genero) && !empty($correo) && !empty($telef_celular) && !empty($id_usuario) ){

			$consulta_update=$con->prepare(' UPDATE datos_personales SET  
				num_documento=:num_documento,
				nombre=:nombre,
				apellidos=:apellidos,
				fecha_nacimiento=:fecha_nacimiento,
				genero=:genero,
				correo=:correo,
				telef_celular=:telef_celular,
				id_usuario=:id_usuario
 				WHERE id=:id;'
			);

			$consulta_update->execute(array(
				':num_documento' =>$num_documento,
				':nombre' =>$nombre,
				':apellidos' =>$apellidos,
				':fecha_nacimiento' =>$fecha_nacimiento,
				':genero' =>$genero,
				':correo' =>$correo,
				':telef_celular' =>$telef_celular,
				':id_usuario' =>$id_usuario,
				':id' =>$id
			));

			header('Location: index.php');
			
		}else{

			echo "<script> alert('Los campos estan vacios');</script>";
		}
	}

?>

<!-- VISTA / REPORTES DE CLIENTES -->
<!DOCTYPE html>
<html lang="es"> <!-- lenguaje - español -->

	<!-- CABECERA DE LA PAGINA -->
	<head>
		<meta charset="UTF-8">
		<title>Modificar</title> <!-- Titulo principal-->
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

                            <!-- SECCION / OPCIONES DEL ADMINISTRADOR -->
                            <img src="../img/iconos/mapa.png" alt=""> <!-- Logotipo -->
                            <h1>TouristAR</h1> <!-- Titulo -->
                            <h4>System</h4>
                            <br><br>
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

                    <script>
                        // Funcion para limitar el numero de caracteres de un textarea o input
                        // Tiene que recibir el evento, valor y número máximo de caracteres
                        function limitar(e, contenido, caracteres)
                        {
                            // obtenemos la tecla pulsada
                            var unicode=e.keyCode? e.keyCode : e.charCode;
                
                            // Permitimos las siguientes teclas:
                            // 8 backspace
                            // 46 suprimir
                            // 13 enter
                            // 9 tabulador
                            // 37 izquierda
                            // 39 derecha
                            // 38 subir
                            // 40 bajar
                            if(unicode==8 || unicode==46 || unicode==13 || unicode==9 || unicode==37 || unicode==39 || unicode==38 || unicode==40)
                                return true;
                
                            // Si ha superado el limite de caracteres devolvemos false
                            if(contenido.length>=caracteres)
                                return false;
                
                            return true;
                        }

                        function soloLetras(e){
                            key = e.keyCode || e.which;
                            tecla = String.fromCharCode(key).toLowerCase();
                            letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
                            especiales = "8-37-39-46";

                            tecla_especial = false
                            for(var i in especiales){
                                if(key == especiales[i]){
                                    tecla_especial = true;
                                    break;
                                }
                            }

                            if(letras.indexOf(tecla)==-1 && !tecla_especial){
                                return false;
                            }
                        }

                        function validarNumero(e) {
                            tecla = (document.all) ? e.keyCode : e.which;
                            if (tecla==8) return true; 
                                patron =/[0-9]/;
                                te = String.fromCharCode(tecla); 
                                return patron.test(te); 
                        }
 
					</script>

					<div class="contenedor">

						<h2>Modificar Datos</h2>
						<br>
						<form action="" method="post">
							<div class="form-group">
								<input type="text" name="num_documento" value="<?php if($resultado) echo $resultado['num_documento']; ?>" class="input__text">
							</div>

							<div class="form-group">
								<input type="text" name="nombre" value="<?php if($resultado) echo $resultado['nombre']; ?>" class="input__text">
								<input type="text" name="apellidos" value="<?php if($resultado) echo $resultado['apellidos']; ?>" class="input__text">
								
							</div>

							<div class="form-group">
								<input type="date" name="fecha_nacimiento" value="<?php if($resultado) echo $resultado['fecha_nacimiento']; ?>" class="input__text">
							</div>

							<div class="form-group">
								<input type="text" name="genero" value="<?php if($resultado) echo $resultado['genero']; ?>" class="input__text">
								<input type="text" name="correo" value="<?php if($resultado) echo $resultado['correo']; ?>" class="input__text">
							</div>

							<div class="form-group">
								<input type="text" name="telef_celular" value="<?php if($resultado) echo $resultado['telef_celular']; ?>" class="input__text">
							</div>

							<div class="form-group">
								<select name="id_usuario">
									<option value="0">id:</option>
									<?php

										$query = $con -> prepare ("SELECT * FROM sesion");
										$query->execute();
										foreach ($query as $valores) {
											echo '<option value="'.$valores[id].'">'.$valores[id].'</option>';
										}
											if($resultado) echo $resultado['id_usuario'];
									?>			
								</select>
							</div>

							<div class="btn__group">
								<a href="index.php" class="btn btn__danger">Cancelar</a>
								<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
							</div>

						</form>

					</div>
				
				</div> <!-- Fin / Contenedor padre -->  		

			</div> <!-- Fin / Contenedor contenido -->  

		</div> <!-- Fin / Contenedor principal  -->  

	</body> <!-- Fin / Cuerpo de la pagina -->

</html> <!-- Fin / pagina web -->
