<!-- VISTA / PERFIL DE ADMINISTRADOR -->
<!DOCTYPE html>
<html lang="en"> <!-- lenguaje - español -->

    <!-- CABECERA DE LA PAGINA -->
    <head>
        <meta charset="utf-8">
        <title>Administrador</title>
    <!-- ESTILOS CSS -->
        <link rel="stylesheet" href="../Loginnn/css/estilo_admin.css">
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
            <!-- En esta seccion se ubican dos contenedores en blanco ya que es en esta seccion donde se mostraran los reportes de los modulos a los que 
            el administrador acceda. -->
            <div class="contenido"> 
                <div class="conten-tablas"> </div>
            </div>

        </div> <!-- Fin / Contenedor principal -->

    </body> <!-- Fin / Cuerpo de la pagina -->

</html> <!-- Fin / pagina web -->