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
                                <div class="top-menu">
                                   
                                </div>
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
                                                <img alt="" class="img-circle" src="../skin/globales/img/avatar/human_female_fighter.jpg">
                                                <span class="username username-hide-mobile">Nick</span>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-default">
                                                
                                                <li>
                                                    <a href="{!! URL::to('logout') !!}">
                                                        <i class="fa fa-sign-out "></i> Log Out </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>


                                <!-- BEGIN HEADER SEARCH BOX -->
                                <form class="search-form" action="page_general_search.html" method="GET">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" name="query">
                                        <span class="input-group-btn">
                                            <a href="javascript:;" class="btn submit">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </span>
                                    </div>
                                </form>

                                 
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
        
    <li class="menu-dropdown classic-menu-dropdown ">
    <a href="javascript:;">
    <img height="30"  width="30" src="storage/icono admin/config.svg"> Configuracion
    <span class="arrow"></span></a>
        <ul class="dropdown-menu pull-left">
            <li class=" ">
                <a href="{!! URL::to('admin-config/') !!}" class="nav-link"><i class="fa fa-cogs"></i> General</a>
            </li>
            <li class=" ">
                <a href="{!! URL::to('admin-paginas/') !!}" class="nav-link"><i class="fa fa-columns"></i> Paginas </a>
            </li>
            <li class=" ">
                <a href="dashboard_3.html" class="nav-link"><i class="fa fa-database"></i> DB</a>
            </li>
        </ul>
     </li>
    

    <li class="menu-dropdown classic-menu-dropdown ">
            <a href="{!! URL::to('servicios/') !!}">
                <img height="30"  width="30" src="storage/icono admin/home.svg"> Servicios
            </a>      
    </li>

     <li class="menu-dropdown classic-menu-dropdown ">
            <a href="{!! URL::to('tickets/') !!}">
                <img height="30"  width="30" src="storage/icono admin/ticket.svg"> Ticket
            </a>      
    </li>
    

    <li class="menu-dropdown classic-menu-dropdown ">
            <a href="{!! URL::to('post/') !!}">
                <img height="30"  width="30" src="storage/icono admin/blog.svg"> Noticias
            </a>      
    </li>

    <li class="menu-dropdown classic-menu-dropdown ">
            <a href="{!! URL::to('combo/') !!}">
                <img height="30"  width="30" src="storage/icono admin/compra.svg"> Shop
            </a>      
    </li>

    
    <li class="menu-dropdown classic-menu-dropdown ">
    <a href="javascript:;">
    <img height="30"  width="30" src="storage/icono admin/config.svg"> Galeria
    <span class="arrow"></span></a>
        <ul class="dropdown-menu pull-left">
            <li class=" ">
                <a href="{!! URL::to('galeria-imagen/') !!}" class="nav-link"><i class="fa fa-image"></i> Galeria de Imagenes</a>
            </li>
            <li class=" ">
                <a href="{!! URL::to('admin-paginas/') !!}" class="nav-link"><i class="fa fa-youtube-play"></i> Galeria de Videos </a>
            </li>
            <li class=" ">
                <a href="dashboard_3.html" class="nav-link"><i class="fa fa-link"></i> Enviar Imagen</a>
            </li>
            <li class=" ">
                <a href="dashboard_3.html" class="nav-link"><i class="fa fa-link"></i> Enviar Videos</a>
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