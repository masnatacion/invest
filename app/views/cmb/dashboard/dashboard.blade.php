@extends("cmb.layout")

@section("class")
dashboard customer {{ Session::get('member_type'); }}
@stop

@section("jumbotron")
@stop


@section("top-content")


<ul class="nav nav-tabs">
    <li class="active">
    	<a data-toggle="tab" href="#dashboard">
			<p class="manager no-margin">Manage Your</p>
			<span class="title">DASHBOARD<span class="black"> / 4 new messages</span></span>
			
    	</a>
	</li>
    <li>

    	<a data-toggle="tab" href="#statistics">
			<p class="manager no-margin">Watch your</p>
			<span class="title">STATISTICS<span class="black"> / 12 new followers</span></span>
    	</a>
    </li>

</ul>
<div class="tab-content">
    <div id="dashboard" class="tab-pane fade in active">
        <h3 class="text-center">Welcome back <span class="green">{{ Auth::customer()->get()->name }} </span></h3>
        <p class="text-center">This Customer Service Center offers the convenience of reading from JSL News letters and promotions to shopping online, all in the same place. As a CMB member you already know, giving better service drives us to create and reorganize our systems to optimize our customers experience as a CMB member. The Customer Service Center is the result of our efforts.</p>

        <div class="row">
<!--         	<div class="col-md-6">
        		<h4><span class="icon-paper"></span>Your Task</h4>
        		<div class="task">
        			<ul class="list-unstyled">
        				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
        				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
        				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
        			</ul>
        		</div>
        	</div>
        	<div class="col-md-6">
        		<h4><span class="icon-heart"></span>Your social stream</h4>
        		<div class="task">
        			<ul class="list-unstyled">
        				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
        				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
        				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
        			</ul>
        		</div>
        	</div> -->


        	<div class="col-md-6">
        		<h4><span class="icon-clock"></span>Your events</h4>

	            <div class="dateline"></div>

        	</div>
        	<div class="col-md-6">
        		<h4 onclick="location.href='/cmb/messages';"style="cursor:pointer;"><span class="icon-email"></span>1 new message</h4>
        		<div class="task messages">
        			<ul class="list-unstyled">
        				<li> <span class="icon-avatar"></span>300926 14-Nov-2014 EXCESSIVE WEIGHT HOLD</li>
        			</ul>
        		</div>
        	</div>
        </div>

    </div>
    <div id="statistics" class="tab-pane fade">
        <h3 class="text-center">Welcome back John Done</h3>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>


@stop



