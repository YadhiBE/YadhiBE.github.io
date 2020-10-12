<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrick-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Guarderia de Yadhira - Official Web</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.0/css/bulma.min.css">
        <link rel="stylesheet" href="StyleGuardería.css">

        <style>
        .hero {
	        background: black url(img/complet.png) center / cover;
        }

        @media (max-width: 3000px) {
            .hero { background: black url(img/complet.png) center / cover; 
        }}

        @media (max-width: 800px) {
            .hero { background: black url(img/medium.jpg) center / cover; 
        }}
        @media (max-width:  360px) {
            .hero { background: black url(img/cel.jpg) center / cover; 
        }}
    </style>
    </head>
    <body>
        <div id="panel">
            <img src="img/num.png"><a class="Link" href="tel: 983 123 92 43">983 123 92 43</a>
            <img src="img/email.png"><a class="Link" href="mailto:FutureProgrammerY@hotmail.com">FutureProgrammerY@hotmail.com</a>
            <a href="CerrarSesion.php">Cerrar sesion</a>
        </div>

        <header class="header">
            <div class="contenedor">
                <img src="img/Logo.png" id="imgLogo">
                <span id="btn-menu"></span>
                <nav class="nav" id="nav">
                    <ul class="menu">
                        <li class="menu__item"><a href="Pagina.php" class="menu__link">Inicio</a></li>
                        <li class="menu__item"><a href="#seccion1" class="menu__link">Aprendizajes</a></li>
                        <li class="menu__item"><a href="#seccion2" class="menu__link">Servicios</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <img src="img/fondo3.png">

        <section class="parrafo" id="seccion1">
            <div class="contenedor">
                <article class="parrafo__columna">
                <h1>Modelo de aprendizajes</h1>
                    <div class="envolver">
                        <div class="envolver-targeta">
                            <div class="targeta">
                                <div><img class="tamaño" src="img/ProyEdu.png"></div>
                                <div class="atras">
                                    <h5 class="text">Nuestro Proyecto Educativo pretende el desarrollo integral, respetando los ritmos concretos 
                                    y necesidades específicas de cada niño. Nos basamos en una metodología activa, flexible e 
                                    individualizada, donde los niños pueden observar y manipular los objetos de su entorno 
                                    inmediato a través de las actividades.  Se atenderá el desarrollo de el conocimiento </h5>
                                </div>
                            </div>
                        </div>
                        <div class="envolver-targeta">
                            <div class="targeta">
                                <div><img class="tamaño" src="img/Eva.png"></div>
                                <div class="atras">
                                    <h5 class="text">La evaluación depende, cada niño tiene su propio ritmo de 
                                        aprendizaje y proceso de maduración. En este proceso, la evaluación 
                                        aporta la información sobre aprendizajes adquiridos por el niño, 
                                        ritmo de aprendizaje y valoración del desarrollo alcanzado. 
                                        En el proceso de evaluación, la observación nos aporta datos acerca del 
                                        proceso de aprendizaje del niño, estrategias y herramientas de aprendizaje 
                                        utilizadas.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section class="parrafo" id="seccion2">
            <div class="contenedor">
                <article class="parrafo__columna">
                    <h1 id="Act">Servicios</h1>

                        <img class="Act_img" src="img/ac1.png"><b>Catering</b>
                        <p>Nos preocupamos de la alimentación de su hijo.
                            Ofrecemos el servicio de suministro de comidas preparadas para 
                            su hijo.</p><br>

                        <img class="Act_img" src="img/ac2.png"><b>Cámaras de seguridad</b>
                        <p>Nos gusta mantener informados a nuestros clientes. 
                            Ofrecemos el servicio de proporcionar cámaras online, donde
                            usted podrá ver a su hijo en tiempo real en cualquier momento.</p><br>

                        <img class="Act_img" src="img/ac3.png"><b>Personal capacitado</b>
                        <p>Nos importa la calidad de trabajo.
                            Ofrecemos el equipo educativo titulado, cualificado y experimentado de la
                            Guardería y de la colaboración indispensable de las familias: padres, madres, 
                            abuelos y demás cuidadores.</p><br>

                        <img class="Act_img" src="img/ac4.png"><b>Talleres</b>
                        <p>Nos gusta proporcionar talleres de integración.
                            Ofrecemos talleres Manualidades, Psicomotricidad, Música, entre otras; 
                            donde su hijo se podrá integras con los otros niños y aprendá a 
                            convivir de una manera amigable.</p><br>

                        <img class="Act_img" src="img/ac5.png"><b>Iniciación al Inglés</b>
                        <p>Nos alienta los niños con grandes capacidades.
                            Ofrecemos enseñar otro idioma, debido que, los niños tienen 
                            una capacidad de aprendizaje asombrosa y es el mejor momento
                            para aprender.</p><br>
                            
                        <img class="Act_img" src="img/ac6.png"><b>Inicio a lectoescritura</b>
                        <p>Ofrecemos a los niños chiquitos que inicien a leer y escribir,
                            le enseñaremos el alfabeto cantando canciones infantiles para 
                            un mejor aprendizaje.</p><br>
                </article>
            </div>
        </section>
    </body>
</html>