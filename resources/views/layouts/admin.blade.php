<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <title>SICAAB</title>
    
    <!-- Normalize V8.0.1 -->
    <link rel="stylesheet" href="{{asset('/css/normalize.css')}}">

    <!-- Bootstrap V4 / Bootstrap Material Design V4 / Bootstrap Select -->
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap-material-design.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap-select.min.css')}}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('/css/all.css')}}">

    <!-- Sweet Alerts V8.13.0 CSS file -->
    <link rel="stylesheet" href="{{asset('/css/sweetalert2.min.css')}}">

    <!-- Sweet Alert V8.13.0 JS file -->
    <script src="{{asset('/js/sweetalert2.min.js')}}"></script>

    <!-- jQuery Custom Content Scroller V3.1.5 -->
    <link rel="stylesheet" href="{{asset('/css/jquery.mCustomScrollbar.css')}}">

    <!-- Estilos General -->
    <link rel="stylesheet" href="{{asset('/css/style-general.css')}}">

</head>
<body>
    
    <!-- Inicio Contenedor Principal -->
    <main class="full-box main-container">
        
        <!-- Inicio Nav lateral -->
        <section class="full-box nav-lateral">
            <div class="full-box nav-lateral-bg show-nav-lateral"></div>
            <div class="full-box nav-lateral-content">
                <figure class="full-box nav-lateral-avatar">
                    <i class="far fa-times-circle show-nav-lateral"></i>
                    <img src="{{asset('/img/Logo_SICAAB_blanco.png')}}"  alt="Avatar" height="130px" width="150px">
                    <figcaption class="roboto-medium text-center">
                        <br><small class="roboto-condensed-light">{{ Auth::user()->name }}</small>
                        <br><small class="roboto-condensed-light">{{ Auth::user()->email }}</small>
                    </figcaption>
                </figure>
                <div class="full-box nav-lateral-bar"></div>
                <nav class="full-box nav-lateral-menu">
                    <ul>
                        @can('principal')
                        <li>
                            <a href="#"><i class="fas fa-tachometer-alt"></i> &nbsp; Dashboard</a>
                            {{-- <a href="{{ url('/dashboard') }}"><i class="fas fa-tachometer-alt"></i> &nbsp; Dashboard</a> --}}
                        </li>
                        @endcan
                        
                        <!-- Inicio Módulo Comercial -->
                        <li>
                            @can('comercial')
                            <a href="#" class="nav-btn-submenu"><i class="fas fa-wallet fa-fw"></i> &nbsp; Comercial <i class="fas fa-chevron-down"></i></a>
                            @endcan
                            <ul>
                                @can('artes.index')
                                <li>
                                    <a href="{{url('comercial/artes')}}"><i class="fas fa-paint-roller fa-fw"></i> &nbsp; Arte Producto</a>
                                </li>
                                @endcan
                                @can('cliente.index')
                                <li>
                                    <a href="{{route('cliente.index')}}"><i class="fas fa-users fa-fw"></i> &nbsp; Clientes </a>
                                </li>
                                @endcan
                                {{-- @can('estado_pedidos.index')
                                <li>
                                    <a href="{{url('comercial/estado_pedidos')}}"><i class="fas fa-stopwatch fa-fw"></i> &nbsp; Estado de Pedido</a>
                                </li> 
                                @endcan --}}
                                @can('orden_compra.index')
                                <li>
                                    <a href="{{url('comercial/orden_compra')}}"><i class="fas fa-file-invoice fa-fw"></i> &nbsp; Orden de Compra</a>
                                </li> 
                                @endcan
                                {{-- @can('orden_pago.index')
                                <li>
                                    <a href="{{url('comercial/orden_pago')}}"><i class="fas fa-file-invoice-dollar fa-fw"></i> &nbsp; Orden de Pago</a>
                                </li>
                                @endcan --}}
                                @can('productos.index')
                                <li>
                                    <a href="{{url('comercial/productos')}}"><i class="fas fa-boxes fa-fw"></i> &nbsp; Productos</a>
                                </li>
                                @endcan
                                @can('proveedores.index')
                                <li>
                                    <a href="{{url('comercial/proveedores')}}"><i class="fas fa-users fa-fw"></i> &nbsp; Proveedores</a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                        <!-- Fin Módulo Comercial -->
                        
                        <!-- Inicio Módulo Producción -->
                        <li>
                            @can('produccion')
                            <a href="#" class="nav-btn-submenu"><i class="fas fa-industry fa-fw"></i> &nbsp; Producción <i class="fas fa-chevron-down"></i></a>
                            @endcan
                            <ul>
                                @can('certificado_calidad.index')
                                <li>
                                    <a href="#"><i class="fas fa-clipboard-check fa-fw"></i> &nbsp; Certificado de Calidad</a>
                                    {{-- <a href="{{url('produccion/certificado_calidad')}}"><i class="fas fa-clipboard-check fa-fw"></i> &nbsp; Certificado de Calidad</a> --}}
                                </li>
                                @endcan
                                @can('ficha_tecnica.index')
                                <li>
                                    <a href="#"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Ficha Técnica</a>
                                    {{-- <a href="{{url('produccion/ficha_tecnica')}}"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Ficha Técnica</a> --}}
                                </li>
                                @endcan
                                @can('orden_produccion.index')
                                <li>
                                    <a href="#"><i class="fas fa-file-alt fa-fw"></i> &nbsp; Orden de Producción</a>
                                    {{-- <a href="{{url('produccion/orden_produccion')}}"><i class="fas fa-file-alt fa-fw"></i> &nbsp; Orden de Producción</a> --}}
                                </li>
                                @endcan
                                @can('planeacion.index')
                                <li>
                                    <a href="#"><i class="fas fa-puzzle-piece fa-fw"></i> &nbsp; Planeación de Producción</a>
                                    {{-- <a href="{{url('produccion/planeacion')}}"><i class="fas fa-puzzle-piece fa-fw"></i> &nbsp; Planeación de Producción</a> --}}
                                </li>
                                @endcan 
                            </ul>
                        </li>
                        <!-- Fin Módulo Producción -->
                        
                        <!-- Inicio Módulo Almacén y Logística -->
                        <li>
                            @can('almacen')
                            <a href="#" class="nav-btn-submenu"><i class="fas fa-truck fa-fw"></i> &nbsp; Almacén <i class="fas fa-chevron-down"></i></a>
                            @endcan
                            <ul>
                                @can('remisiones.index')
                                <li>
                                    <a href="#"><i class="fas fa-shipping-fast fa-fw"></i> &nbsp; Guía de Entrega </a>
                                    {{-- <a href="{{url('almacen/remisiones')}}"><i class="fas fa-shipping-fast fa-fw"></i> &nbsp; Guía de Entrega </a> --}}
                                </li>
                                @endcan
                                @can('materiales.index')
                                <li>
                                    <a href="{{url('almacen/materiales')}}"><i class="fas fa-boxes fa-fw"></i> &nbsp; Materiales</a>
                                </li>
                                @endcan
                                @can('requerimiento_compra.index')
                                <li>
                                    <a href="{{url('almacen/requerimiento_compra')}}"><i class="fas fa-file-invoice fa-fw"></i> &nbsp; Requerimiento Interno </a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                        <!-- Fin Módulo Almacén y Logística -->
                        
                        <!-- Inicio Módulo Administrador -->
                        <li>
                            @can('administrador')
                            <a href="#" class="nav-btn-submenu"><i class="fas fa-tools"></i> &nbsp; Administrador <i class="fas fa-chevron-down"></i></a>
                            @endcan
                            <ul>
                                @can('roles.index')
                                <li>
                                    <a href="#"><i class="fas fa-user-shield"></i> &nbsp; Roles</a>
                                    {{-- <a href="{{url('administrador/roles')}}"><i class="fas fa-user-shield"></i> &nbsp; Roles</a> --}}
                                </li>
                                @endcan
                                @can('usuarios.index')
                                <li>
                                    <a href="{{url('administrador/usuarios')}}"><i class="fas fa-users"></i> &nbsp; Usuarios</a>
                                </li>
                                @endcan
                                <li>
                                    <a class="{{ request()->routeIs('contact')}}" href="/contact"><i class="fas fa-envelope"></i> &nbsp; Correo</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Fin Módulo Administrador -->
                    </ul>
                </nav>
            </div>
        </section>
        <!-- Fin Nav lateral -->

        <!-- Inicio Contenido Página -->
        <section class="full-box page-content">
            
            <!-- Inicio nav superior -->
            <nav class="full-box navbar-info">
                <a href="#" class="float-left show-nav-lateral">
                    <i class="fas fa-exchange-alt"></i>
                </a>
                <a id="nav-item dropdown navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ __('Salir') }} &nbsp;&nbsp;&nbsp;
                    <i class="fas fa-sign-out-alt"></i>
                </a>
                    
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();" style="color: black">
                            {{ __('Cerrar sesión') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                    </form>
                </div>
            </nav>
            <!-- Fin nav superior -->
            
            <!-- Contenido -->
            <!-- -- Se integran las plantillas blade de cada vista -- -->
            @if(session('success'))
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="alert alert-success text-center">
                                {{ session('success') }}
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            
            @yield('contenido')
            <!-- Fin Contenido --> 
        </section>
    </main>

    <!-- Archivos JavaScript -->
    <!-- jQuery V3.4.1 -->
    <script src="{{asset('/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('/js/jquery.js')}}"></script>
    @stack('scripts')

    <!-- Popper -->
    <script src="{{asset('/js/popper.min.js')}}"></script>

    <!-- Bootstrap V4 / Bootstrap Material Design V4 / Bootstrap Select -->
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap-material-design.min.js')}}"></script>
    <script>$(document).ready(function(){$('body').bootstrapMaterialDesign(); });</script>
    <script src="{{asset('/js/bootstrap-select.min.js')}}"></script>

    <!-- jQuery Custom Content Scroller V3.1.5 -->
    <script src="{{asset('/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>

    <!-- Script General -->
    <script src="{{asset('/js/script-general.js')}}"></script>

    <!-- jQuery Chart -->
    <script src="{{asset('/js/chart.min.js')}}"></script>
    <script src="{{asset('/js/chart-data.js')}}"></script>
    <script>
        window.onload = function(){
            var chart2 = document.getElementById("bar-chart").getContext("2d");
            window.myBar = new Chart(chart2).Bar(barChartData, {
                responsive: true,
                scaleLineColor: "rgba(0,0,0,.2)",
                scaleGridLineColor: "rgba(0,0,0,.05)",
                scaleFontColor: "#C5C7CC"
            });
        };
    </script>

    {{-- JS Render --}}
    <script src="{{asset('/js/js-render.js')}}"></script>
    <script src="{{asset('/js/npm.js')}}"></script>
</body>
</html>