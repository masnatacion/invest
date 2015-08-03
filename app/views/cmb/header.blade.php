<div class="header-customer">
	<nav class="toolbar-social">
		{{ HTML::link("cmb/dashboard","",["class"=>"navbar-brand"]) }}

		<div class="container">


			<div class="pull-right">
				{{ Form::open( array("url" => "cmb/search","method" => "GET","class"  => "form-inline" ) ) }}
				  <div class="input-group">
				    
				    <input type="text" name="tracking" class="form-control" aria-describedby="inputGroupSuccess1Status" placeholder="Search...">
				  	<span onclick="javascript:this.closest('form').submit();" class="input-group-addon glyphicon glyphicon-search"></span>
				  </div>
				{{ Form::close() }}
			</div>

		</div>


	</nav>

	<nav class="navbar navbar-default navbar-green ">
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


	      <ul class="nav navbar-nav navbar-right">

	      	<li>
	      		<a href="cmb/warehouse">Warehouse</a> 
	      		</a>
	      	</li>
	        <li>
	      		<a href="cmb/messages"><span class="badge">1 new</span></a>
	      		</a>
	      	</li>
	        <li class="balance">
	        	<a href="./cmb/balance">
		        	<p class="no-margin">Balance</p> 
		        	<span>TT$ 53,024.41</span>
	        	</a>
	        </li>

            <li class="dropdown">

	        	<a href="#" class="dropdown-toggle my-profile" data-toggle="dropdown">
	        		<img class="profile-img-card" src="./img/avatar.png">
		        		<span>{{ Auth::customer()->get()->name }}</span>

	        	</a> 
				<ul class="dropdown-menu" role="menu">

					<li> {{ HTML::link("cmb/profile","My profile") }}</li>
					<li class="divider"></li>
					<li> {{ HTML::link("cmb/logout","Logout") }}</li>

				</ul>
            </li>



	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
</div>