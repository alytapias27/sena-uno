<!-- VISTA / LOGIN -->
<!DOCTYPE html>
<html lang="en"> <!-- lenguaje - español -->

    <!-- CABECERA DE LA PAGINA -->
    <head>
        <meta charset="utf-8">
        <title>Inicio de sesión</title>
        <link rel="stylesheet" href="../Loginnn/css/estilo_login.css">
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
                <br><br><br><br><br><br><br>
                <i class="fas fa-users"></i><!-- icono / correo -->

                <form action="validar.php" method="post"> <!--Contenedor formulario -->
                    <br>
                    <div class="form-group"> <!-- Contenedor campo uno -->
                        <div class="col-xs-10">
                            <i class="fas fa-user"></i> <!-- icono / correo -->
                            <input type="text" name="mail" class="form-control Input" required placeholder="Correo Electronico">
                        </div>
                    </div> <!-- Fin / Contenedor campo uno -->
                    <br>
                    <div class="form-group"> <!-- Contenedor campo dos -->
                        <div class="col-xs-10">
                            <i class="fas fa-unlock-alt"></i><!-- icono / contraseña -->
                            <input type="password" name="pass" class="form-control Input" required placeholder="Contraseña">
                        </div>
                    </div> <!-- Fin / Contenedor campo dos -->
                    <br><br>
                    <div class="form-group tres"> <!--Contenedor botones de accion -->
                        <button type="submit" ame="submit" class="btn btn-success center-block btn-lg">Ingresar</button> 
                        <button type="submit" class="btn btn-muted center-block btn-lg"><a href="registro.php">Registrarme</a></button> 
                        <button type="reset" class="btn btn-danger center-block btn-lg">Limpiar</button> 
                    </div> <!-- Fin / Contenedor botones de accion -->

                </form> <!-- Fin / Contenedor formulario -->

            </div> <!-- Fin / Contenedor hijo dos -->

        </div> <!-- Fin / Contenedor principal -->

    </body> <!-- Fin / Cuerpo de la pagina -->

</html> <!-- Fin / pagina web -->


