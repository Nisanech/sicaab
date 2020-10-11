<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>INNOVA GRAPHIC | SICAAB</title>

    <link rel="shortcut icon" href="img/logo_innova.png">

    <link rel="stylesheet" href="css/estilos.css">

    <!-- Script para barra de navegación fija -->
    
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    
    <script src="js/barra_navegacion.js"></script>
</head>
<body>
    <header>
        <div class="contenedor_nav">

            {{-- Barra de navegación --}}

            <nav class="menu">
                @if  (Route::has('login'))
                    <div class="navega">
                        <ul>
                            @auth
                                <li><a href="{{ url('/home') }}">Inicio</a></li>
                            @else
                                <li><a href="{{ route('login') }}">Ingresar</a></li>
                                @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}">Registro</a></li>
                                @endif
                            @endauth
                            <li><a href="#quienes_somos">¿Quiénes somos?</a></li>
                            <li><a href="#productos">Productos</a></li>
                            <li><a href="#clientes">Clientes</a></li>
                            <li><a href="#pie_pagina">Contacto</a></li>
                        </ul>
                    </div>
                @endif
            </nav>
        </div>


        {{-- Títulos --}}

        <section>
            <div id="inicio">
                <div class="textos">
                    <h1 class="titulo">INNOVA GRAPHIC</h1>
                    <h3 class="subtitulo">Número 1 en cajas plegadizas</h3>
                </div>
            </div>
        </section>

        {{-- Estilo corte inferior --}}

        <div class="sesgoabajo"></div>
    </header>

    {{-- Quiénes somos --}}

    <main>
        <section id="quienes_somos">
            <div class="contenedor">
                <h2 class="quienes_somos">¿Quiénes Somos?</h2>
                <br>
                <p class="parrafo">
                    Somos una compañía Colombiana fundada en Bogotá en el año 2011. Nos dedicamos al diseño y
                    manufactura de cajas plegadizas, etiquetas, estuches de lujo y publicomerciales para diferentes
                    sectores de la industria.  
                </p>
                <p class="parrafo">
                    Contamos con un equipo de trabajo comprometido con el crecimiento y desarrollo organizacional,
                    enfocados en la excelencia operacional y en los estándares de calidad para la satisfacción de
                    nuestros clientes. Además, contamos con la última tecnología y estándarización de nuestro proceso
                    de impresión offset.
                </p>
            </div>
        </section>

        {{-- Galeria --}}

        <section class="galeria">


            {{-- Estilo corte superior --}}

            <div class="sesgoarriba"></div>

            {{-- Imágenes --}}

            <div class="imagenes">
                <img src="img/galeria_1.jpeg" alt="">
            </div>
            <div class="imagenes">
                <img src="img/galeria_2.png" alt="">
            </div>
            <div class="imagenes">
                <img src="img/2.jpg" alt="">
                <div class="mitad">
                    <img src="img/galeria_5.png" alt="">
                    <div></div>
                </div>
            </div>
            <div class="imagenes">
                <img src="img/galeria_3.png" alt="">
            </div>
            <div class="imagenes">
                <img src="img/galeria_4.png" alt="">
            </div>

            {{-- Estilo corte inferior --}}

            <div class="sesgoabajo"></div>
        </section>

        {{-- Productos --}}

        <section id="productos">
            <div class="contenedor">
                <h2 class="agunos_productos">Nuestros Productos</h2>
                <br>
                <div class="cards">
                    <div class="card">
                        <img src="img/producto_1.png" alt="">
                        <h4><b>CAJAS PLEGADIZAS</b></h4>
                    </div>
                    <div class="card">
                        <img src="img/producto_2.jpg" alt="">
                        <h4><b>ETIQUETAS</b></h4>
                    </div>
                    <div class="card">
                        <img src="img/producto_3.png" alt="">
                        <h4><b>PUBLICOMERCIALES</b></h4>
                    </div>
                </div>
            </div>
        </section>

        {{-- Fondo inferior --}}

        <section class="fondo">

            {{-- Estilo corte superior --}}

            <div class="sesgoarriba"></div>

            {{-- Clientes --}}

            <div class="contenedor">
                <h2 class="titulo_clientes">Nuestros Clienes</h2>
                <div id="clientes">
                    <div class="cliente" align="center">
                        <img src="img/cliente_1.png" alt="">
                        <img src="img/cliente_2.png" alt="">
                        <img src="img/cliente_3.png" alt="">
                    </div>
                </div>
            </div>

            {{-- Estilo corte inferior --}}

            <div class="sesgoabajo_unico"></div>
        </section>
    </main>

    {{-- Pie de página --}}

    <footer>
        <div class="contenedor">
            <h2 class="titulo_footer">Contacto</h2>
            <div id="pie_pagina" class="contacto" style="margin-top: 80px">
                INNOVA GRAPHIC GROUP SAS <br>
                DG 24 BIS 27 A 44 <br>
                927 9661 <br>
                BOGOTÁ D.C., COLOMBIA
            </div>
        </div>
    </footer>
</body>
</html>
