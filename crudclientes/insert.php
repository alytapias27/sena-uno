<!-- VISTA / NUEVO USUARIO -->
    
<?php 
	include_once 'conexion.php';
	
	if(isset($_POST['guardar'])){
		$num_documento=$_POST['num_documento'];
        $estado=$_POST['estado'];
        $id_contvisitas=$_POST['id_contvisitas'];
        $id_contdescargas=$_POST['id_contdescargas'];

		if(!empty($num_documento) && !empty($estado) && !empty($id_contvisitas) && !empty($id_contdescargas)){
		
				$consulta_insert=$con->prepare('INSERT INTO clientes(num_documento,estado,id_contvisitas,id_contdescargas) VALUES(:num_documento,:estado,:id_contvisitas,:id_contdescargas)');
				$consulta_insert->execute(array(
					':num_documento' =>$num_documento,
                    ':estado' =>$estado,
                    ':id_contvisitas' =>$id_contvisitas,
                    ':id_contdescargas' =>$id_contdescargas
					
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
		<title>Nuevo Registro</title> <!-- Titulo principal-->
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
                        <h2>Nuevo Cliente</h2>
                        <form action="" method="post">
                                <div class="form-group">
                                    <select name="num_documento">
                                    <option value="0">numero de identificacion</option>

                                    <?php
                                        $query = $con -> prepare ("SELECT * FROM datos_personales");
                                        $query->execute();
                                        foreach ($query as $valores) {

                                        echo '<option value="'.$valores[num_documento].'">'.$valores[num_documento].'</option>';
                                        }
                                    ?>
                                    </select> 

                                    <select name="estado" placeholder="Estado" class="input__text">
									    <option value=""></option>
                                        <option value="Activo">Activo</option>
                                        <option value="Inactivo">Inactivo</option>
								    </select>

                                    <select name="id_contvistas">
                                    <option value="0">visitas:</option>
                                        <?php
                                            $query = $con -> prepare ("SELECT * FROM contador_visitas");
                                            $query->execute();
                                            foreach ($query as $valores) {

                                            echo '<option value="'.$valores[id_contvisitas].'">'.$valores[id_contvisitas].'</option>';
                                            }
                                        ?>
                                    </select>    

                                    <select name="id_contdescargas">
                                    <option value="0">Descargas:</option>
                                        <?php
                                            $query = $con -> prepare ("SELECT * FROM contador_descargas");
                                            $query->execute();
                                            foreach ($query as $valores) {

                                            echo '<option value="'.$valores[id_contdescargas].'">'.$valores[id_contdescargas].'</option>';
                                            }
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
