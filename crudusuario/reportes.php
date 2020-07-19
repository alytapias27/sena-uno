<!-- Registro de usuarios que se van a loguear en el sistema -->
<?php
	include_once 'conexion.php';

	$sentencia_select=$con->prepare('SELECT *FROM sesion ORDER BY Id DESC');
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();

	// metodo buscar
	if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		$select_buscar=$con->prepare('
			SELECT *FROM sesion WHERE user LIKE :campo OR email LIKE :campo;'
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
		<title>Reportes</title>
	<!-- ESTILOS CSS -->
		<link rel="stylesheet" href="../crudusuario/csss/estilo_usuario.css">
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
        <div class="contenedor"> <!-- Contenedor principal -->

            <h2 class="title-uno">Reporte de las cuentas registradas</h2> <!-- Titulo -->
            <span>--- Usuarios / Clientes---</span>

            <img src="../img/iconos/mapa.png" alt="logotipo" class="logo-reportes">

            <div class="barra__buscador"> <!-- Contenedor hijo -->
                        <form action="" class="formulario" method="post">
                            <input type="text" name="buscar" placeholder="buscar nombre o email" 
                            value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
                            <input type="submit" class="btn" name="btn_buscar" value="Buscar">
                            <a href="../crudusuario/index.php" class="btn btn__nuevo">Volver</a>	
                            <input type="button" value="Imprimir" onclick="window.print()" class="btn btn-secondary">
                        </form>
            </div> <!-- Fin / Contenedor hijo -->
    
            <table> <!-- Contenedor de la tabla-->
                <!-- Campos donde se almacena y se clacifica la informacion segun su tipo de dato -->
                <tr class="head">
                    <td>id</td>
                    <td>user</td>
                    <td>password</td>
                    <td>email</td>
                    <td>rol</td>
                </tr>
    
                <?php foreach($resultado as $fila):?>
                                        
                <tr>
                    <td><?php echo $fila['id'];?></td>
                    <td><?php echo $fila['user'];?></td>
                    <td><?php echo $fila['password']; ?></td>
                    <td><?php echo $fila['email']; ?></td>
                    <td><?php echo $fila['rol']; ?></td>
                </tr>

                <?php endforeach ?>

            </table> <!-- Fin / Contenedor de la tabla-->

        </div> <!-- Fin / Contenedor contenido -->

    </body> <!-- Fin / Cuerpo de la pagina -->

</html> <!-- Fin / pagina web -->