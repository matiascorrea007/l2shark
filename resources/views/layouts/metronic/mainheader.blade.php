 <!-- Efecto Parallax -->
<div class="bg" style="background: url('images/banner2.jpg') no-repeat center center;"></div>
<div class="jumbotron affix">
</div>
<!-- End Efecto Parallax -->


<div class="page-header " id="main">
                        <!-- BEGIN HEADER TOP -->
                        <div class="page-header-top">
                            <div class="container-fluid">
                                <!-- BEGIN LOGO -->
                                
                                <!-- END LOGO -->
                                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                                <a href="javascript:;" class="menu-toggler"><i class="fa fa-navicon"></i></a>
                                <!-- END RESPONSIVE MENU TOGGLER -->
                                <!-- BEGIN TOP NAVIGATION MENU -->
                                
                                <!-- END TOP NAVIGATION MENU -->
                            </div>
                        </div>
                        <!-- END HEADER TOP -->
                        <!-- BEGIN HEADER MENU -->
                        <div class="page-header-menu" style="display: block;">
                            <div class="container-fluid">

                            <ul class="nav navbar-nav pull-right">
                                        <!-- BEGIN USER LOGIN DROPDOWN -->
                                       <li class="dropdown dropdown-user dropdown-dark">
                                                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                        <i class=""><img src="storage/icono admin/coins.svg" alt="" width="20"  height="20"></i> Saldo :
                                                        <span class="badge badge-success">{{$user->saldo}}</span>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-dark">
                                                     <li>
                                                         <a href="{!! URL::to('donaciones') !!}">
                                                        <i class="fa fa-credit-card  "></i> Agregar Saldo</a>
                                                     </li>
                                                     <li>
                                                         <a href="{!! URL::to('transferir-coin') !!}">
                                                        <i class="fa fa-exchange "></i> Transferir Saldo </a>
                                                     </li>
                                                    </ul>
                                                </li>



                                        <li class="dropdown dropdown-user dropdown-dark">
                                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <img alt="" class="img-circle" src="skin/globales/img/avatar/human_female_fighter.jpg" height="30" width="30">
                                                <span class="username username-hide-mobile">{{$user->login}}</span>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-default">
                                                <li>
                                                    <a href="{!! URL::to('logout') !!}" >
                                                        <i class="fa fa-sign-out color-light"></i> Log Out </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>


                                <!-- BEGIN HEADER SEARCH BOX -->
                                

                                 
                                <!-- END HEADER SEARCH BOX -->
                                <!-- BEGIN MEGA MENU -->
                                <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                                <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->




  <div class="hor-menu  ">
    <ul class="nav navbar-nav">
        
         <li class="menu-dropdown classic-menu-dropdown ">
            <a href="{{ url('admin') }}">
                <img height="30"  width="30" src="storage/icono admin/home.svg"> Home
            </a>      
         </li>
        
    @if(Auth::user()->admin == 1)<!--permiso de admin-->
    <li class="menu-dropdown classic-menu-dropdown ">
    <a href="javascript:;">
    <img height="30"  width="30" src="storage/icono admin/seo.svg"> Configuracion
    <span class="arrow"></span></a>
        <ul class="dropdown-menu pull-left">
            <li class=" ">
                <a href="{!! URL::to('admin-config/') !!}" class="nav-link"><i class="fa fa-cogs"></i> General</a>
            </li>
            <li class=" ">
                <a href="{!! URL::to('admin-paginas/') !!}" class="nav-link"><i class="fa fa-columns"></i> Paginas </a>
            </li>
            <li class=" ">
                <a href="{!! URL::to('db-config/') !!}" class="nav-link"><i class="fa fa-database"></i> DB</a>
            </li>
        </ul>
     </li>
    @endif

    <li class="menu-dropdown classic-menu-dropdown ">
    <a href="javascript:;">
    <img height="30"  width="30" src="storage/icono admin/coins.svg"> Donaciones
    <span class="arrow"></span></a>
        <ul class="dropdown-menu pull-left">
            <li class=" ">
                <a href="{!! URL::to('donaciones/') !!}" class="nav-link"><i class="fa fa-plus-circle"></i> Adquirir Coins</a>
            </li>
            <li class=" ">
                <a href="{!! URL::to('donaciones-hechas/') !!}" class="nav-link"><i class="fa fa-list"></i> Donaciones Hechas </a>
            </li>
            @if(Auth::user()->admin == 1)<!--permiso de admin-->
            <li class=" ">
                <a href="{!! URL::to('donaciones-listar/') !!}" class="nav-link"><i class="fa fa-list"></i> Listar Donaciones </a>
            </li>
            <li class=" ">
                <a href="{!! URL::to('donaciones-pendientes/') !!}" class="nav-link"><i class="fa fa-list"></i> Donaciones Pendientes </a>
            </li>
            @endif
            <li class=" ">
                <a href="{!! URL::to('transferir-coin/') !!}" class="nav-link"><i class="fa fa-exchange"></i> Transferir Coins</a>
            </li>
            <li class=" ">
                <a href="{!! URL::to('transfererencias-realizadas/') !!}" class="nav-link"><i class="fa fa-exchange"></i> Transferencias Realizadas</a>
            </li>
        </ul>
     </li>



    <li class="menu-dropdown classic-menu-dropdown ">
            <a href="{!! URL::to('servicios/') !!}">
                <img height="30"  width="30" src="storage/icono admin/swords.svg"> Servicios
            </a>      
    </li>

    
    <li class="menu-dropdown classic-menu-dropdown ">
    <a href="javascript:;">
    <img height="30"  width="30" src="storage/icono admin/ticket.svg"> Ticket
    <span class="arrow"></span></a>
        <ul class="dropdown-menu pull-left">
            <li class=" ">
                <a href="{!! URL::to('user-ticket/') !!}" class="nav-link"><i class="fa fa-plus-circle"></i> Mis Ticket</a>
            </li>
            @if(Auth::user()->admin == 1)<!--permiso de admin-->
            <li class=" ">
                <a href="{!! URL::to('administrar-tickets/') !!}" class="nav-link"><i class="fa fa-list"></i> Administrar ticket </a>
            </li>
            @endif

        </ul>
     </li>

     @if(Auth::user()->admin == 1)<!--permiso de admin-->
    <li class="menu-dropdown classic-menu-dropdown ">
            <a href="{!! URL::to('post/') !!}">
                <img height="30"  width="30" src="storage/icono admin/news.svg"> Noticias
            </a>      
    </li>
    @endif


    <li class="menu-dropdown classic-menu-dropdown ">
            <a href="{!! URL::to('combo/') !!}">
                <img height="30"  width="30" src="storage/icono admin/compra.svg"> Shop
            </a>      
    </li>

    
    <li class="menu-dropdown classic-menu-dropdown ">
    <a href="javascript:;">
    <img height="30"  width="30" src="storage/icono admin/galeria.svg"> Galeria
    <span class="arrow"></span></a>
        <ul class="dropdown-menu pull-left">
        @if(Auth::user()->admin == 1)<!--permiso de admin-->
            <li class=" ">
                <a href="{!! URL::to('galeria-imagen-show') !!}" class="nav-link"><i class="fa fa-image"></i> Galeria de Imagenes</a>
            </li>
            <li class=" ">
                <a href="{!! URL::to('galeria-video-show') !!}" class="nav-link"><i class="fa fa-youtube-play"></i> Galeria de Videos </a>
            </li>
        @endif
            <li class=" ">
            <a href="{!! URL::to('galeria') !!}" class="nav-link"><i class="fa fa-link"></i> Enviar Imagen/Video</a>
            </li>
        </ul>
     </li>
    

        </ul>
    </div>
                                <!-- END MEGA MENU -->
                            </div>
                        </div>
                        <!-- END HEADER MENU -->
                    </div>