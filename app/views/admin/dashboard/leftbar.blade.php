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
                            JSL
                        </div>
                    </li>

                    <li class="">
                        <a href="{{ getenv('APP_ADMIN_PREFIX') }}/dashboard"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Customers</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/pcustomer','Customers Manager') }}</li>



                            <li>
                                <a href="#">Points <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
								<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/cmb_points','Points Manager') }}</li>
								<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/cmb_invitation','Customers Invitations') }}</li>

                                </ul>
                            </li>

							<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/cmb_crmtickets','Tickets') }}</li>
							<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/invoice','Invoices') }}</li>
							<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/payments','Payments') }}</li>

                        </ul>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-truck"></i> <span class="nav-label">Package Work Flow</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/tracking','Trackings') }}</li>
                            <li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/cmb_nf_lost_items','Unidentified Items.') }}</li>		


							<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/pobox','Warehouse Receipt') }}</li>
							<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/awb','AWB') }}</li>
							<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/manifest','Manifest') }}</li>

                            <li>
                                <a href="#">Documents <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">

									<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/mawb','Master AWB') }}</li>
									<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/certificate','Certificates') }}</li>
									<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/handover','HandOver') }}</li>
									<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/blading','Bill of Lading') }}</li>

                                </ul>
                            </li>

							<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/delivery_reports','Delivery Report') }}</li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Reports</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
							<li><a href="#">TBD 1</a></li>
							<li><a href="#">TBD 2</a></li>
							<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/reports','Custom Reports') }}</li>
                        </ul>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-wrench"></i> <span class="nav-label">Tools</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
							<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/rates','Rates') }}</li>
							<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/reports','Reports') }}</li>
							<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/tracking_carrier','Carriers') }}</li>
							<li><a href="#">Shipping Calculator</a></li>
                        </ul>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-pencil-square-o"></i> <span class="nav-label">Forms</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
							<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/cmb_nf_probshp','Problem Shipments') }}</li>
							<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/cmb_nf_shop','Shop America') }}</li>
							<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/cmb_nf_pickup','Pick Up Instructions') }}</li>
							<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/cmb_nf_claims','Claims') }}</li>
							<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/cmb_nf_shpinst','Shipping Instructions') }}</li>
							<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/cmb_nf_lost','Unidentifed Shipments') }}</li>
                        </ul>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Users Administration</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
							<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/users','User manager') }}</li>
							<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/roles','Roles') }}</li>
							<li><a href="#">Logs</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-cogs"></i> <span class="nav-label">Setup</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
							<li><a href="#">Task manager (Cron)</a></li>
							<li><a href="#">Setup</a></li>
                        </ul>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-building-o"></i> <span class="nav-label">Agency</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
							<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/agency','Agency manager') }}</li>
							<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/agency','Templates') }}</li>
                        </ul>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-star"></i> <span class="nav-label">Web Site</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
							<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/cms_pages','Content Manager') }}</li>
							<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/cms_images','Images Manager') }}</li>
							<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/cms_videos','Video Manager') }}</li>

                            <li>
                                <a href="#">Forms <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">

									<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/web_career','Career') }}</li>
									<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/web_contactus','Contact  Us') }}</li>
									<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/web_cmbaplication','CMB Application') }}</li>
									<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/web_shop','Shop America') }}</li>

                                </ul>
                            </li>

                        </ul>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">CMB Site</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
							<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/cms_pages','Content Manager') }}</li>
							<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/cms_images','Images Manager') }}</li>
							<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/cms_videos','Video Manager') }}</li>

                            <li>
                                <a href="#">Forms <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">

									<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/cmb_cms','Content Manager') }}</li>
									<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/cms_images','Images Manager') }}</li>
									<li>{{ HTML::link(getenv('APP_ADMIN_PREFIX').'/cms_videos','Video Manager') }}</li>

                                </ul>
                            </li>

                        </ul>
                    </li>


                </ul>

            </div>
        </nav>