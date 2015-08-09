        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> 

                        	<span class="glyphicon glyphicon-user img-circle avatar"></span>
                           

                            
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"> {{ Auth::admin()->get()->first_name }} {{ Auth::admin()->get()->last_name }}</strong>
                             </span> <span class="text-muted text-xs block">{{ Auth::admin()->get()->id_roles_record->name }} <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="{{ getenv('APP_ADMIN_PREFIX') }}/profile">{{ trans('crud.profile') }}</a></li>

                                <li class="divider"></li>
                                <li><a href="{{ getenv('APP_ADMIN_PREFIX') }}/logout">{{ trans('crud.logout') }}</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            INV
                        </div>
                    </li>

                    <li class="">
                        <a href="{{ getenv('APP_ADMIN_PREFIX') }}/dashboard"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
                    </li>

                    <li class="">
                        <a href="{{ getenv('APP_ADMIN_PREFIX') }}/carrusel"><i class="fa fa-play"></i> <span class="nav-label">Carrusel</span></a>
                    </li>

                    <li class="">
                        <a href="{{ getenv('APP_ADMIN_PREFIX') }}/inmuebles"><i class="fa fa-building-o"></i> <span class="nav-label">Inmuebles</span></a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-pencil-square-o"></i> <span class="nav-label">Formularios</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
							<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/contactanos','Contactanos') }}</li>

                        </ul>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Administración</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/users','Usuarios') }}</li>

                        </ul>
                    </li>





<!--                     <li>
                        <a href="#"><i class="fa fa-star"></i> <span class="nav-label">Web Site</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">

                        </ul>
                    </li> -->




                </ul>

            </div>
        </nav>