<!-- VISTA / FORMULARIO PARA CREAR UNA CUENTA-->
<?php

    session_start();

    if (isset($_POST['validar'])) {
        $_SESSION['docU'] = $_POST['docU'];
        $_SESSION['nombreU'] = $_POST['nombreU'];
        $_SESSION['contrasenaU'] = $_POST['contrasenaU'];
        $_SESSION['perfilU'] = $_POST['perfilU'];
        $_SESSION['estadoU'] = $_POST['estadoU'];

        exit("success");
    }
    
?>

<!DOCTYPE html>
<html lang="en"> <!-- lenguaje - español -->

    <!-- CABECERA DE LA PAGINA -->
    <head>
        <meta charset="utf-8">
        <title>Inicio de sesión</title>
        <link rel="stylesheet" href="../Loginnn/css/estilo_regist.css">
    <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,600;0,700;0,800;0,900;1,100&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <!-- ICONS -->
        <script src="https://kit.fontawesome.com/c215a33ee8.js" crossorigin="anonymous"></script>
    </head>

    <!-- CUERPO DE LA PAGINA -->
    <body>
        <!-- SECCION / LOGIN -->
        <!-- En esta seccion se encuentra el formulario para el inicio de sesion, conformado por el campo del correo electronico y la contraseña, en la parte 
        infererior encontramos los botenes de accion para ingresar o registrarse en el sistema. -->
        <div class="login"> <!-- Contenedor principal -->

            <div class="col-17"> <!-- Contenedor hijo uno -->
                <br><br>
                <h1>TouristAR</h1> <!-- Titulo -->
                <br>
                <div class="logo"> <!-- Contenedor logotipo -->
                    <img src="../img/iconos/mapa.png" alt="">
                </div>
            </div> <!-- Fin / Contenedor hijo uno -->

            <div class="col-17"> <!-- Contenedor hijo dos -->
                <br><br><br><br><br><br><br><br>
                <h2> Crear Cuenta </h2> <!-- Titulo centrado-->
                <h4>--- Registrate y descarga la App ---</h4>

                <form action="registrar.php" method="post"> <!-- Contenedor formulario -->
                    <br><br>
                    <div class="form-group"> <!-- Contenedor campo uno -->
                        <div class="col-xs-10 col-xs-offset-1">
                            <input type="text" name="realname" class="form-control Input" required placeholder="Nombre de Usuario">                
                        </div>
                    </div> <!-- Fin / Contenedor campo uno -->

                    <br>
                    <div class="form-group"> <!-- Contenedor campo dos -->
                        <div class="col-xs-10 col-xs-offset-1">
                            <input type="text" name="nick" class="form-control col-xs-12 Input" required placeholder="Correo Electronico">
                        </div>
                    </div> <!-- Fin / Contenedor campo dos -->

                    <br>
                    <div class="form-group"> <!-- Contenedor campo tres -->
                        <div class="col-xs-10 col-xs-offset-1">
                            <input type="password" name="pass" class="form-control col-xs-12 Input" required placeholder="Contraseña">
                        </div>
                    </div> <!-- Fin / Contenedor campo tres -->

                    <div class="form-group"> <!-- Contenedor botones de accion -->
                        <br><br>
                        <button type="submit" class="btn-primary">Guardar</button>
                        <button type="reset" class="center-block"><a href="index.php">Volver</a></button>
                        <button type="reset" class="btn-danger">Eliminar</button>
                    </div> <!-- Fin / Contenedor botones de accion -->

                </form> <!-- Fin / Contenedor formulario -->

            </div> <!-- Fin / Contenedor principal -->

        <!-- A traves del evento registrar busca el archivo registrar.php que esta asociado a la propiedad action del formulario -->
        <?php

          if(isset($_POST['submit'])){

            require("registrar.php");

          }

        ?>

    </body> <!-- Fin / Cuerpo de la pagina -->

</html> <!-- Fin / pagina web -->




