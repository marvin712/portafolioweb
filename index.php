<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://kit.fontawesome.com/62ea397d3a.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Encabezado -->
    <header class="header">
        <div class="header__item">
            <h1>
                Marvin Ordóñez <span></span>
            </h1>
            <span class="btn_menu">
                <i class="fas fa-bars" id="icono-menu"></i>
            </span>
        </div>
        <section class="section">
            <nav class="navegacion activo" id="menu">
                <ul class="navegacion__enlace">
                    <li class="navegacion__enlace-item"><i class="fas fa-home"></i><a href="index.php">Inicio</a></li>
                    <li class="navegacion__enlace-item"><i class="fas fa-user"></i><a href="#sobre-mi">Sobre mi</a></li>
                    <li class="navegacion__enlace-item"><i class="fas fa-toolbox"></i><a href="#tecnologias">Tecnologias</a></li>
                    <li class="navegacion__enlace-item"><i class="fas fa-address-book"></i><a href="#proyectos">Proyectos</a></li>
                    <li class="navegacion__enlace-item"><i class="fas fa-id-badge"></i><a href="#contacto">Contacto</a></li>
                </ul>
            </nav>
            <div class="contenedor-img">
                <div class="contenido-img">
                    <h2>Hola! Soy Marvin Ordóñez Desarrollador Web <span></span></h2>
                    <div class="ubicacion">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="88" height="88" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFC107" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <circle cx="12" cy="11" r="3" />
                            <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                        </svg>
                        <p>Huehuetenango, Guatemala</p>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <!-- Sobre mi -->
    <main class="contenedor">
        <section class="sobre__mi">
            <h2 id="sobre-mi">Sobre mi</h2>
            <div class="sobre__mi-contenido sombra">
                <div class="sobre__mi-img">
                    <img src="img/undraw_laravel_and_vue_59tp.png" alt="">
                </div>
                <div class="sobre__mi-texto">
                    <p>Soy estudiante de la carrera de ingenieria en sistemas, actualmente estudio el octavo semestre, me gusta todo lo relacionado con la informatica y soy autodidacta</p>
                </div>
            </div>
        </section>
        
        <section class="tecnologias" id="tecnologias">
            <h2>Tecnologias que manejo</h2>
            <div class="tecnologias__contenedor sombra">
                <div class="tecnologias__img">
                    <img src="img/html-5.png" alt="logo-html">
                    <span>HTML</span>
                </div>
                <div class="tecnologias__img">
                    <img src="img/css-3.png" alt="logo-css">
                    <span>CSS</span>
                </div>
                <div class="tecnologias__img">
                    <img src="img/js.png" alt="logo-js">
                    <span>JAVASCRIPT</span>
                </div>
                <div class="tecnologias__img">
                    <img src="img/github.png" alt="logo-github">
                    <span>GITHUB</span>
                </div>
            </div>
        </section>
        <!-- Proyectos -->
        <section id="proyectos">
            <h2>Proyectos</h2>
            <div class="proyectos sombra">
                <div class="proyectos__item">
                    <h3>Blog de Café</h3>
                    <a href="https://blogdecafe12.herokuapp.com/index.php" target="_blank">
                        <img src="img/blogdecafe.png" alt="">
                    </a>
                </div>
                <div class="proyectos__item">
                    <h3>Tienda en Linea</h3>
                    <a href="https://tiendaenlinea54.herokuapp.com/index.php" target="_blank">
                        <img src="img/tienda_enlinea.png" alt="">
                    </a>
                </div>
                <div class="proyectos__item"></div>
            </div>
        </section>
            
        <!-- Contacto -->
        <section id="contacto">
            <h2>Contacto</h2>
            <div class="contacto sombra">
                <div class="contacto__item">
                    <a href="https://wa.link/yfyy8g" target="Blank_">
                        <img src="img/whatsapp.png" alt="icono-wahtsapp" class="img-contacto">
                        <span>WhatSapp</span>
                    </a>
                </div>
                <div class="contacto__item">
                    <a href="https://www.facebook.com/marvin.ordonezjimenez.9" target="Blank_">
                        <img src="img/facebook.png" alt="icono-facebook" class="img-contacto">
                        <span>facebook</span>
                    </a>
                </div>
                <div class="contacto__item">
                    <a href="https://www.instagram.com/marvin_712_/" target="Blank_">
                        <img src="img/instagram.png" alt="icono-instagram" class="img-contacto">
                        <span>Instagram</span>
                    </a>
                </div>
                
            </div>
            
        </section>
    </main>
    <!--Footer  -->
    <footer class="footer">
        <h3>Todos los derechos reservados a Marvin Ordóñez</h3>
    </footer>
    
    <!-- Script js -->
    <script src="js/app.js"></script>
</body>
</html>
