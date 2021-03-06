<!-- PAGINA DE BIENVENIDA PARA LOS USUARIOS -->
<!DOCTYPE html>
<html lang="en"> <!-- lenguaje - español -->

<!-- CABECERA DE LA PAGINA -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width, user-scale=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
        <title>TouristAR</title> <!-- titulo principal -->
<!-- ESTILOS CSS -->
        <link rel="stylesheet" href="../Touristar_WebV2-prueba/css/stylos.css"> <!-- Estilos / cuerpo de la pagina -->
<!-- FONTS -->
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,600;0,700;0,800;0,900;1,100&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
<!-- ICONS -->
        <script src="https://kit.fontawesome.com/c215a33ee8.js" crossorigin="anonymous"></script>
<!-- SLIDER -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    </head>

<!-- SECCION / CONTADOR DE VIVISTAS -->
    <?php
        function contador(){
            $archivo = "contador.txt"; //el archivo que contiene en numero
            $f = fopen($archivo, "r"); //abrimos el archivo en modo de lectura
            if($f){
                $contador = fread($f, filesize($archivo)); //leemos el archivo
                $contador = $contador + 1; //sumamos +1 al contador
                fclose($f);
            }
            $f = fopen($archivo, "w+");
            if($f){
                fwrite($f, $contador);
                fclose($f);
            }
            return $contador;
        }
        $visitante =contador();
        $mensaje="Visitante Numero: ". $visitante;
        echo '<script>alert(" '.$mensaje.'")</script> ';
    ?>

<!-- CUERPO DE LA PAGINA -->
    <body>
        
    <!-- SECCION / INTRO -->
    <!-- En esta seccion se encuentra una imagen de la ciudad de fondo con una sobrecapa de color verde y con transparencia, ademas se ubica a su 
        lado izquierdo el link con el inicio de sesion para los usuarios, en el centro se ubica el logotipo oficial y un boton para descargar la 
        aplicacion para dispositivos moviles -->
        <header class="relative"> <!-- Contenedor principal -->

                <div class="conten-portada absolute"></div> <!-- Contenedor padre -->

                    <div class="conten-uno relative" id="skiller"> <!-- Contenedor hijo uno / Contenedor que ubica el logotipo y el boton de descarga -->
                        
                        <div class="menu d-flex relative"> <!-- Contenedor hijo uno / Contenedor que ubica el link para el inicio de sesion-->
                            <div class="items">
                                <a href="../Touristar_WebV2-prueba/Loginnn/index.php">Login</a> <!-- link -->
                            </div>
                        </div> <!-- Fin / Contenedor hijo uno -->

                        <h1 class="title-uno">TouristAR</h1>

                        <div class="conten-dos absolute"> <!-- Contenedor hijo dos / se ubica el logo oficial de la pagina web-->
                            <img src="../Touristar_WebV2-prueba/img/iconos/mapa.png" alt="logotipo"> <!-- Imagen / Logotipo -->
                        </div>

                    </div> <!-- Fin / Contenedor hijo dos -->

                </div> <!-- Fin del contenedor padre -->

            </header> <!-- Fin de la seccion principal -->

    <!-- SECCION / CARDS INTRO-->
    <!-- En esta seccion se encuentran cuatro cards donde se explica de manera breve quien es la empresa, que hace y su alcanse. -->
            <section id="cards" class="space-top"> <!-- Contenedor section -->

                <div class="container-cards"> <!-- Contenedor principal -->

                    <div class="row"> <!-- Contenedor padre -->

                        <div class="col-3">  <!-- Contenedor hijo uno-->
                            <div class="card text-center"> 
                                <h4>¿Quiénes Somos?</h4><br> <!-- titulo de la card -->
                                <p> <!-- contenido de la card-->
                                    Una compañía de desarrollo la cual busca promocionar el sector del turismo en la ciudad de Medellín a través de la Realidad Aumentada.
                                </p> 
                            </div> 
                        </div> <!-- Fin / Contenedor hijo uno -->

                        <div class="col-3">  <!-- Contenedor hijo dos -->
                            <div class="card text-center"> 
                                <h4>¿Touristar App?</h4><br> <!-- titulo de la card  -->
                                <p> <!-- contenido de la card-->
                                    Es una aplicación móvil que proporciona información en tiempo real, de manera fácil e integrada del lugar donde el turista se encuentra.
                                </p> 
                            </div> 
                        </div> <!-- Fin / Contenedor hijo dos -->

                        <div class="col-3">  <!-- Contenedor hijo tres -->
                            <div class="card text-center"> 
                                <h4>Nuestros Servicios</h4><br> <!-- titulo de la card -->
                                <p>  <!-- contenido de la card-->
                                    Brindamos información del sector turístico, haciendo de la Realidad Aumentada una guía virtual en entornos reales y frecuentados.
                                </p> 
                            </div> 
                        </div> <!-- Fin / Contenedor hijo tres -->

                        <div class="col-3">  <!-- Contenedor hijo cuantro -->
                            <div class="card text-center"> 
                                <h4>Alcance</h4><br> <!-- titulo de la card -->
                                <p>  <!-- contenido de la card-->
                                    Nuestro propósito es llegar a cada destino turístico y así darlo a conocer por medio de entornos que impartan Realidad Aumentada.
                                </p> 
                            </div> 
                        </div> <!-- Fin / Contenedor hijo cuantro -->

                    </div> <!-- Fin / contenedor padre -->

                </div> <!-- Fin / contenedor principal -->

            </section> <!-- Fin / Contenedor section -->

    <!-- SECCION UNO / DESCRIPCION Y DESCARGA TOURISTAR APP -->
    <!-- En esta seccion se da una descripcion de que trata touristar y se dan las idicaciones para que los usuarios en esta
         seccion atraves de un enlace descarguen y hagan uso del aplicativo en sus dispositivos moviles-->
            <div class="conten-1"> <!-- Cotnedor principal -->

                <div class="conten-descrip absolute"> <!-- Contenedor padre -->
                    <h1 class="title">TouristAR App</h1> <!-- Titulo principal-->
                    <br><br> 
                    <p> <!-- Parrafo / contiene la informacion-->
                        TouristAR es una Aplicacion movil que brinda una guia oficial a traves de la realidad aumentada y la georefenciacion de destinos turisticos de la ciudad de Medellín,
                        a traves de capas de informacion visual se generan experiencias que aportan componentes relevantes sobre nuestro entorno y en tiempo real.
                    </p>
                    <br><br>
                    <button class="btn-descarga">DESCARGAR TOURISTAR APP</button>
                    <br><br> <!-- boton de descarga de la app movil-->
                    <span>Solo para dispositivos móviles con sistema operativo Android.</span>
                </div> <!-- Fin / Contenedor padre -->

            </div> <!-- Fin / Contenedor principal -->

    <!-- SECCION DOS / IMAGEN INFORMATIVA CARDS -->
    <!-- En esta seccion se da a conocer cuales son esos lugares que el usuarios debe conocer de la ciudad, se enseñan diferentes panoramas
         desde fiestas hasta la gastronomia tipica de la ciudad, ademas de que despliega una gran multimedia donde se almacenan fotografias 
         de esos destacados lugares -->
            <div class="conten-2"> <!-- Cotnedor principal -->

                <div class="conten-imagen absolute"> <!-- Contenedor padre -->

                    <div class="imagen-info text-center"> <!-- Contenedor hijo uno -->
                        <!-- Contiene el titulo y la descripcion de la seccion centrados -->
                        <br>
                        <h4>¿Qué hacer en Medellín?</h4>  <!-- Titulo -->
                        <p>  <!-- Descrispcion -->
                            En cada una de sus calles se aprecia un ritmo diferente para hacer lo que más te gusta. 
                            Tenemos todo tipo de turismo y múltiples actividades culturales, la mejor gastronomia, 
                            para que hagas de tu viaje una expericia inolvidable.
                        </p>
                    </div> <!-- Fin / Contenedor hijo uno -->

                    <div class="cards-imagenes"> <!-- Contenedor hijo dos-->
                        <!-- Contiene cuatro cards cada una con un fondo diferente de la ciudad de medellin y un subtitulo diferente -->
                        <div class="conten-cards-imag"> 
                            <div class="rows"> 
                                <div class="col-4"> 
                                    <div class="card-img text-center imag-uno">
                                        <span>- FIESTAS -</span> <!-- Subtitulo card uno -->
                                    </div> 
                                </div> 
                                <div class="col-4"> 
                                    <div class="card-img text-center imag-dos">
                                        <span>- GASTRONIMIA -</span> <!-- Subtitulo card dos -->
                                    </div> 
                                </div> 
                                <div class="col-4"> 
                                    <div class="card-img text-center imag-tres">
                                        <span>- CULTURA -</span> <!-- Subtitulo card tres -->
                                    </div> 
                                </div> 
                                <div class="col-4"> 
                                    <div class="card-img text-center imag-cuatro">
                                        <span>- ARTE -</span> <!-- Subtitulo card cuantro -->
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                    </div> <!-- Fin / Contenedor hijo dos -->

                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> <!-- Salto de linea -->

                    <div class="boton-vermas"> <!-- Contenedor hijo tres -->
                        <!-- Contiene un boton donde lo lleva a una nueva vista donde se explica de forma general los items de las cards anteriores -->
                        <button class="btn-vermas">VER MÁS</button> <!-- botones -->
                    </div> <!-- Fin / Contenedor hijo tres -->

                </div> <!-- Fin / Contenedor padre -->

            </div> <!-- Fin / Contenedor principal -->

    <!-- SECCION TRES / DESTINOS CON RA -->
    <!-- En esta seccion se ubican los sitios turisticos que cuentan con realidad aumentada y que a futuro son los sitios en los cuales los usuarios
        podran experimentar con la app, de cada uno cuenta con una foto y se da una breve descrpcion  -->
            <div class="espacio white"> <!-- Contenedor titulo -->
                <div class="info-uno-uno absolute">
                    <h2>DESTINOS PARA INTERACTUAR CON REALIDAD AUMENTADA EN LA CIUDAD</h2> <!-- titulo -->
                </div>
            </div> <!-- Fin / Contenedor titulo -->

            <div class="conten-multimedia"> <!-- Contenedor / lugar uno -->
                <div class="col-1 white"> 
                    <div class="col-2"> 
                        <div class="imagen-uno"> <!-- Contenedor de la imagen -->
                            <img class="img-multimedia-uno" src="../Touristar_WebV2-prueba/img/fotos/jardin_botanico.jpg" alt="jardin botanico"> <!-- Imagen del lugar -->
                        </div> <!-- Fin / Contenedor de la imagen -->
                        <div class="info-uno absolute">
                            <br><br><br><br> 
                            <h2>Jardin botanico</h2> <!-- Titulo del lugar -->
                            <h3>Joaquín Antonio Uribe</h3> <!-- Nombre del lugar -->
                            <br><br> 
                            <p> <!-- Descripcion del lugar -->
                                Es un jardín de unas 13.2 hectáreas de extensión, Cuenta con un recinto para eventos 
                                llamado el Orquideorama, un lugar arquitectónico para la exposición de flores. <br><br>
                                El Jardín no solo cuenta con la condición de ser un centro de cultura y botánica sino
                                también un espacio de educación y ciencia, de enorme riqueza florística, y en el cual 
                                albergan más de 1.000 especies y 4.500 individuos.
                            </p>
                        </div> 
                    </div> 
                </div> <!-- Fin / Contenedor lugar uno -->

                <div class="col-1 white"> <!-- Contenedor / lugar dos -->
                    <div class="col-2"> 
                        <div class="info-dos">
                            <br><br><br><br><br> 
                            <p> <!-- Descripcion del lugar / Esta seccion esta uniada a la anterios del jardin botanico -->
                                En su interior se aprecian espacios en los que converge la naturaleza con las estructuras
                                arquitectónicas y urbanísticas como el edificio científico, el Orquideorama, teatro 
                                suramericana y la biblioteca del jardín botánico. Colecciones de zonas vivas como el bosque
                                tropical, el jardín del desierto, la casa de las mariposas entre otros más…<br><br>
                                En estos Espacios abiertos la realidad aumentada interactúa con nosotros en tiempo real
                                Generando un estrecho canal de comunicación, proporcionando un tipo de información que 
                                interactúa directamente con el entorno real proporcionando experiencias únicas.
                            </p> 
                        </div> 
                        <div class="imagen-dos absolute"> <!-- Contenedor de la imagen -->
                            <img class="img-multimedia-dos" src="../Touristar_WebV2-prueba/img/fotos/pic-114-compressor.jpg" alt="jardin botanico"> <!-- Imagen del lugar -->
                        </div> <!-- Fin / Contenedor de la imagen -->
                    </div> 
                </div> <!-- Fin / Contenedor lugar dos -->

                <div class="col-1 white"> <!-- Contenedor / lugar tres -->
                    <div class="col-2"> 
                        <div class="imagen-uno"> <!-- Contenedor de la imagen -->
                            <img class="img-multimedia-uno" src="../Touristar_WebV2-prueba/img/fotos/pic-59-compressor.jpg" alt="jardin botanico"> <!-- Imagen del lugar -->
                        </div> <!-- Fin / Contenedor de la imagen -->
                        <div class="info-uno absolute">
                            <br><br><br><br><br> 
                            <h2>Parque Explora</h2> <!-- Titulo del lugar -->
                            <br><br> 
                            <p> <!-- Descripcion del lugar -->
                                Museo interactivo para la apropiación y divulgación de la ciencia y la tecnología con 22 mil
                                metros cuadrados de área interna y 15 mil de plazas públicas que alberga más de 300 experiencias
                                interactivas, una Sala Infantil, Auditorios, salas de exposiciones temporales y el Acuario de 
                                agua dulce más grande de Latinoamérica, el cual recrea dos ecosistemas en riesgo: el bosque 
                                húmedo tropical y los arrecifes de coral.
                            </p> 
                        </div> 
                    </div> 
                </div> <!-- Fin / Contenedor lugar tres -->

                <div class="col-1 whithe"> <!-- Contenedor / lugar cuatro -->
                    <div class="col-2"> 
                        <div class="info-dos">
                            <br><br><br><br><br> 
                            <h2>Parque de los Deseos</h2> <!-- Titulo del lugar -->
                            <br><br> 
                            <p> <!-- Descripcion del lugar -->
                                Parque urbano, creado con el fin de relacionar el universo con la gente. Dentro de su 
                                perímetro se ubican el Planetario y la Casa de la Música y en su vecindad se ubican 
                                la Universidad de Antioquia, el Jardín Botánico, el Parque Explora -museo interactivo-,
                                el Parque Norte -parque de atracciones- y la Estación Universidad del metro.
                            </p> 
                        </div> 
                        <div class="imagen-dos absolute"> <!-- Contenedor de la imagen -->
                            <img class="img-multimedia-dos" src="../Touristar_WebV2-prueba/img/fotos/pic-83-compressor.jpg" alt="jardin botanico"> <!-- Imagen del lugar -->
                        </div> <!-- Fin / Contenedor de la imagen -->
                    </div> 
                </div> 
            </div> <!-- Fin / Contenedor lugar cuatro -->

            <div class="col-1 white height"> <!-- Contenedor / lugar cinco-->
                <div class="col-2 height"> 
                    <div class="imagen-uno"> <!-- Contenedor de la imagen -->
                        <img class="img-multimedia-uno" src="../Touristar_WebV2-prueba/img/fotos/planetario.jpg" alt="jardin botanico"> <!-- Imagen del lugar -->
                    </div> <!-- Fin / Contenedor de la imagen -->
                    <div class="info-uno absolute">
                        <br><br><br> 
                        <h2>Planetario</h2> <!-- titulo del lugar-->
                        <h3>Jesús Emilio Ramírez</h3> <!-- subtitulo del lugar -->
                        <br><br> 
                        <p> <!-- Descripcion del lugar -->
                            Lugar permanente y sostenible para perpetuar en la comunidad, entre otros objetivos, el interés por la astronomía
                            y el espacio exterior. Sirve además de auditorio a exposiciones científicas muy variadas y de frontera, como la mecánica 
                            cuántica, la biología molecular y otras, a cargo de respetables académicos nacionales y extranjeros. <br>
                            Este como escenario educativo, se pretende crear un ambiente informal, dinámico y lúdico de aprendizaje con un
                            enfoque interactivo que integre, con una gran capacidad de sugerencia, los fenómenos del universo en sus diferentes temáticas, 
                            a través de la ciencia, la tecnología, el arte y la pedagogía. <br>
                            El propósito es que el Planetario sea un espacio de fomento de la cultura científica y tecnológica.
                        </p> 
                    </div> 
                </div> 
            </div>  <!-- Fin / Contenedor lugar cinco -->

    <!-- SECCION CUANTRO / IMAGEN INFORMATIVA Y SLIDER -->
    <!-- En esta seccion se encuentra un slider con las opniones de los usuarios acerca de la ciudad -->
            <div class="conten-4"> <!-- Contenedor principal -->
                <div class="conten-imagen-dos absolute"> <!-- Contenedor padre -->
                    <div class="imagen-info-dos text-center"><br>
                        <h4>¿Por qué conocer Medellín?</h4> <!-- Titulo -->
                    </div>
                    <br><br>
                    <!-- SECCION / SLIDER -->
                    <div class="conten-slider relative"> <!-- Contenedor del slider -->
                        <section class="slider-wrap absolute"> 
                            <ul> <!-- Lista desordenada que contiene las imagenes y la clase que contiene los scripts -->
                                <li><img src="img/" alt="img1"></li> <!-- primer imagen -->
                                <li><img src="img/" alt="img2"></li> <!-- segunda imagen -->
                                <li><img src="img/" alt="img3"></li> <!-- tercera imagen -->
                                <li><img src="img/" alt="img4"></li> <!-- cuarta imagen -->
                                <li><img src="img/" alt="img5"></li> <!-- quinta imagen -->
                            </ul> 
                        </section> 
                    </div> <!-- Fin / Contenedor slider -->
                </div> <!-- Fin / Contenedor Padre -->
            </div> <!-- Fin / Contenedor Principal -->

    <!-- SECCION CINCO / NOSOTROS -->
    <!-- En esta seccion se encuentra la informacion del proyecto, la mision y vision y demas objetivos -->
            <div class="nosotros"> <!-- Contenedor uno -->
                <div class="nosotros-info absolute">
                    <h2>Nuestra misión es ayudar a los turistas a tener una comunicación ágil, eficiente y segura</h2> <!-- Titulo -->
                </div>
            </div> <!-- Fin / Contenedor uno -->

            <div class="conten-nosotros"> <!-- Contenedos dos -->
                <div class="col-5">
                    <div class="imagen-nosotros"> <!-- Contenedor de la imagen de bordos magicos --> </div>
                    <div class="info-nosotros absolute">
                        <br><br><br><br><br><br> 
                        <p> <!-- Descripcion / mision y objetivos claros -->
                            TouristAR nace con el objetivo de ofrecer a nuestros clientes los mejores servicios para las personas que quieren visitar
                            la ciudad de Medellín, toda ves que esta aplicación mejora la comunicación y seguridad de la persona al momento de explorar
                            los sitios turistícos y culturales de nuestra ciudad. 
                            <br><br>
                            Por ello, creemos que aportando soluciones, desarrollando servicios innovadores, ofreciendo herramientas sencillas y enseñando
                            cómo utilizarlas correctamente, podemos ayudar a nuestros clientes a mejorar su comunicación interna y externa con su entorno.
                        </p>
                    </div> 
                </div> 
            </div> <!-- Fin / Contenedor dos -->

    <!-- SECCION SEIS / FORTALEZAS -->
    <!-- En esta seccion se ubican tres fortalezas del proyecto, cada una cuenta con su respectivo icono, un titulo y con una breve descripcion -->
            <div class="nosotros"> <!-- Contenedor uno -->
                <div class="nosotros-info absolute">
                    <h2 id="fort-title">Nuestro foco está puesto en ofrecer</h2>
                </div>
            </div> <!-- Fin / Contenedor uno -->

            <div class="contem-fortalezas relative"> <!-- Contenedor dos -->
                <div class="conte-info"> <!-- Contenedor padre -->

                    <div class="card-two"> <!-- Fortaleza uno -->
                        <div class="icons-wrap">
                            <i class="fas fa-file-alt" id="icono"></i> <!-- Icono -->
                        </div>
                        <div class="card-info">
                            <br><br>
                            <h3>Información <br> de Tiempo Real</h3> <!-- Titulo -->
                        </div>
                    </div> <!-- Fin / Fortaleza uno -->

                    <div class="card-two"> <!-- Fortaleza dos -->
                        <div class="icons-wrap">
                            <i class="fas fa-map-marked-alt" " id="icono"></i> <!-- Icono -->
                        </div>
                        <div class="card-info">
                            <br><br>
                            <h3>Geolocalización</h3> <!-- Titulo -->
                        </div>
                    </div> <!-- Fin / Fortaleza dos -->

                    <div class="card-two"> <!-- Fortaleza tres -->
                        <div class="icons-wrap">
                            <i class="fas fa-file-image" id="icono"></i> <!-- Icono -->
                        </div>
                        <div class="card-info">
                            <br><br>
                            <h3>Realidad <br> Aumentada</h3> <!-- Titulo -->
                        </div>
                    </div> <!-- Fin / Fortaleza tras -->

                </div>  <!-- Fin / Contenedor padre -->
            </div> <!-- Fin / Contenedor dos -->

    <!-- SECCION SIETE/ MAPA -->
    <!-- En esta seccion se encuentra el mapa con la ubicacion del lugar donde se ubica la direccion de la oficina -->
            <div class="container-maps"> <!-- Contenedor principal -->
                <div class="conte-maps-hijo absolute"> <!-- Contenedor padre -->
                    <h2 id="info">¡Estamos ubicados en el municipio de Itagui!</h2> <!-- Titulo de la seccion -->
                    <br><br>
                    <div class="contentenedor-mapa"> <!-- Contenedor del mapa -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.553499524667!2d-75.60252118523107!3d6.19044949551846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e46821458fec621%3A0xc4b99b2385a1f67d!2sReserva%20del%20Sur!5e0!3m2!1ses!2sco!4v1591990998620!5m2!1ses!2sco" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div> <!-- Fin / Contenedor del mapa -->
                </div> <!-- Fin / Contenedor padre -->
            </div> <!-- Fin / Contenedor principal -->

    <!-- SECCION OCHO / DATOS OFC -->
    <!-- En esta seccion se da una breve descripcion de donde estamos ubicados, como llegar y los horarios de atencion-->
            <div class="container-info"> <!-- Contenedor principal -->
                <div class="informacion absolute"> <!-- Contenedor padre -->
                    <h2 id="info-ubic">Nuestra Oficina</h2> <!-- Titulo de la seccion -->
                    <br><br>
                    <!-- Descripcion la ubicacion -->
                    <p>Estamos ubicados a un kilometro del parque de principal del municipio de Itagui a una cuadra del mall laureles del sur,
                        brindamos cobertura en la ciudad de Medellín y proximamente en el Area Metropolitana.</p>
                    <br>
                    <h4>Direccion: </h4> <!-- Subtitulo -->
                    <p>Carrera 58 Numero 77 - 41 Oficina Numero 1126.</p>
                    <br>
                    <h4>Horario de atencion:</h4> <!-- Subtitulo -->
                    <p>Luner a Viernes de 8:00 a.m. - 5:00 p.m. <br> Sabados 8:00 a.m. - 1:00 p.m.</p>
                </div> <!-- Fin / Contenedor padre -->
            </div> <!-- Fin / Contenedor principal -->

    <!-- SECCION NUEVE / COLABORADORES-->
    <!-- En esta seccion se ubican los logotipos de los diferentes colaboradores -->
            <div class="colaboradores"> <!-- Contenedor principal -->
                <div class="conten-colabor"> <!-- Contenedor padre -->
                    <h2 id="info-colab">Colaboradores</h2> <!-- Titulo de la seccion -->
                    <br><br><br> <!-- Saltos de lineas -->
                    <div class="logos-colab"> <!-- Contenedor hijo -->
                        <div class="logo-sena logo-uno"></div> <!-- logo / sena uno -->
                        <div class="logo-sena logo-dos"></div> <!-- logo / sena dos  -->
                        <div class="logo-sena logo-tres"></div> <!-- Logo / sena tres --> 
                    </div> <!-- Fin / Contenedor hijo -->
                </div> <!-- Fin / Contenedor padre -->
            </div> <!-- Fin / Contenedor principal -->

    <!-- SECCION DIEZ / MENSAJES Y REDES SOCIALES -->
    <!-- En esta seccion se muestran las redes sociales y se habilita un espacio para los comentarios que deseen realizar los usuarios -->
            <div class="contem-redes relative"> <!-- Contenedor principal -->
                <div class="contem-redes-sociales absolute"> <!-- Contenedor padre -->
                    <div class="col-8"> <!-- Contenedor Hijo uno -->
                        <br><br>
                        <h1 class="title" id="title-fooder">TouristAR</h1> <!-- Titulo de la seccion -->
                        <br><br>
                        <span>Siguenos y comprarte: </span> 
                        <div class="icons-rs">
                            <i class="fab fa-facebook-square"></i> <!-- Icono de la red social faceboock -->
                        </div>
                        <div class="icons-rs">
                            <i class="fab fa-instagram-square"></i> <!-- Icono de la red social instagram -->
                        </div>
                        <div class="icons-rs">
                            <i class="fab fa-youtube-square"></i> <!-- Icono de la red social youtube -->
                        </div>
                        <br><br>
                        <span>@touristar.app</span>
                    </div> <!-- Fin / Contenedor Hijo uno -->

                    <!-- SECCION / MENSAJES -->
                    <div class="col-8"> <!-- Contenedor Hijo dos -->
                        <div class="mns-conten">
                            <h3>Dejanos saber tus comentarios</h3> <!-- Titulo de la seccion -->
                            <br><br>
                            <div class="caja-mns">
                                <input type="text" placeholder="Nombre*"> <!-- Campo para ingresar el nombre -->
                                <br><br>
                                <input type="email" placeholder="Correo Electronico*"> <!-- Campo para ingresar el correo electronico -->
                                <br><br>
                                <textarea name="txtArea" id="txtArea" cols="60" rows="8" placeholder="Mensaje*"></textarea> <!-- Campo para ingresar el mensaje -->
                                <br><br>
                                <button>Enviar Mensaje</button> <!-- Boton para enviar el mensaje -->
                            </div>
                        </div>
                    </div> <!-- Fin / Contenedor Hijo dos -->
                </div> <!-- Fin / Contenedor padre -->
            </div> <!-- Fin / Contenedor principal -->

    <!-- SECCION / FOOTER -->  
    <!-- En esta seccion se ubica el pie de pagina el cual esta dividido en tres partes la bara de menu la politicas de uso y los logos del sena -->
            <footer> <!-- Contenedor principal-->

                <div class="footer"> <!-- Contenedor padre-->

                    <div class="info-footer info-uno"> <!-- Contenedor hijo uno -->
                        <h1>TouristAR</h1>
                        <br>
                        <div class="logo-footer">
                            <img src="../Touristar_WebV2-prueba/img/iconos/mapa.png" alt="logotipo de la app">
                        </div>
                    </div> <!-- Fin / Contenedor hijo uno -->

                    <div class="info-footer info-dos"> <!-- Contenedor hijo dos -->
                        <h1>Contáctenos</h1>
                        <br><br>
                        <i class="fab fa-whatsapp i-uno"><span>+57 305 224 19 95</span></i>
                        <br><br>
                        <i class="far fa-envelope i-dos"><span>info@touristar.com</span></i>
                        <br><br>
                        <i class="fas fa-map-signs i-tres"><span>Cra 58 N° 77 - 41 Ofc. 1126</span></i>
                    </div> <!-- Fin / Contenedor hijo dos -->

                    <div class="info-footer info-tres"> <!-- Contenedor hijo tres -->
                        <div class="logo-android">
                            <img src="../Touristar_WebV2-prueba/img/iconos/androide.png" alt="logo android">
                        </div>
                        <br>
                        <a href="#">Descarga la App..</a>
                        <br><br>
                        <p>
                            Y disfruta de los mejores lugares <br> que tiene la ciudad por ofrecer <br> a traves de la realidad aumentada.
                        </p>
                    </div> <!-- Fin / Contenedor hijo tres -->

                </div> <!-- Fin / Contenedor padre -->

            </footer> <!-- Fin / Contenedor principal -->

    <!-- SLIDER -->
    <!-- script es la etiqueta que contiene la libreria jquery para las imagenes que se muestran en el slider-->
    <!-- La etiqueta "$(document).ready(function()" es para que cuando el documento cargue, la pag recuerde que se tiene 
    la libreria jquery esta agragada y se llame la funcion que presenta las imagenes en el slider-->
    <!-- La etiqueta  "$('.slider1').bxSlider({" es la funcion que llama la imagen que se va a mostrar en el slider-->
    <!-- mode: 'fade' es la trancicion de una imagen a la otra -->
            <script> 
                $(document).ready(function(){
                    $('.slider1').bxSlider({
                        mode: 'fade' 
                    })  
                    $('.slider2').bxSlider({
                        mode: 'fade' 
                    })     
                    $('.slider3').bxSlider({
                        mode: 'fade' 
                    }) 
                    $('.slider4').bxSlider({
                        mode: 'fade' 
                    }) 
                    $('.slider5').bxSlider({
                        mode: 'fade' 
                    }) 
                }) 
            </script> <!-- Fin del Script -->

    </body> <!-- Fin / CUERPO DE PAGINA -->

</html> <!-- Fin / PAGINA WEB -->


