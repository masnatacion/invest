<div class="header">
	<nav class="toolbar-social">
		<div class="container">
			<a class="navbar-brand" href="#"></a>
		</div>	

		<div class="container">
			<div class="pull-right">
				<ul class="list-inline social">
				  <li class="icon-twitter"></li>
				  <li class="icon-google"></li>
				  <li class="icon-facebook"></li>
				  <li class="icon-instagram"></li>
				  <li class="icon-pinterest"></li>
				  <li class="icon-linkedin"></li>
				</ul>

				<form class="form-inline">

				  <div class="input-group">
				    
				    <input type="text" class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status" placeholder="Search...">
				  	<span class="input-group-addon glyphicon glyphicon-search"></span>
				  </div>

				  
				</form>
			</div>

		</div>


	</nav>

	<nav class="navbar navbar-default navbar-green">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	      	
	        <li>
	        	{{ HTML::link('/','Home') }}
	       	</li>
	        <li class="@if(str_contains(Route::currentRouteName(),'about-us')) active @endif">
	        	{{ HTML::link('about-us','About Us') }}
	        </li>
	        <li class="@if( ( str_contains(Route::currentRouteName(),'classic-mailbox') 
	        							|| str_contains(Route::currentRouteName(),'ocean-freight')
	        							|| str_contains(Route::currentRouteName(),'shop-america')
	        							|| str_contains(Route::currentRouteName(),'services')
	        							|| str_contains(Route::currentRouteName(),'addl_services')
	        							|| str_contains(Route::currentRouteName(),'faq')
	        							|| str_contains(Route::currentRouteName(),'contact-us')))
	        							|| str_contains(Route::currentRouteName(),'shipping-estimates')))
	        						active @else dropdown @endif">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Service <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li>{{ HTML::link('/classic-mailbox','Classic Mail Box') }}</li>
	            <li>{{ HTML::link('/ocean-freight','Ocean Freight') }}</li>
	            <li>{{ HTML::link('/shop-america','Shop America') }}</li>
	            <li>{{ HTML::link('/services','Services') }}</li>
	            <li>{{ HTML::link('/addl-services','Aditional Services') }}</li>
	            <li>{{ HTML::link('/shipping-estimates','Shipping Estimates') }}</li>
	            <li>{{ HTML::link('/faq','F.A.Q') }}</li>
	            <li>{{ HTML::link('/contact-us','Contact Us') }}</li>
	          </ul>
	        </li>
	        <li class="@if(str_contains(Route::currentRouteName(),'tracking-shipment')) active @endif">
	        	{{ HTML::link('tracking-shipment','Track Shipment') }}
	        </li>
	        <li class="@if(str_contains(Route::currentRouteName(),'register')) active @endif">
	        	{{ HTML::link('register','Register') }}
	        </li>

	      </ul>

	      <ul class="nav navbar-nav navbar-right">
	        <li>
	        	<a data-toggle="modal" href="./cmb/login_ajax" data-target="#modal">Login</a>
	        </li>

	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
</div>

