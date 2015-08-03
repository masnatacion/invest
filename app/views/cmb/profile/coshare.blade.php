@extends("cmb.layout")

@section("class")
customer {{ Session::get('member_type'); }} profile
@stop

@section("jumbotron")
@stop


@section("top-content")

	<div class="avatar margin-bottom-lg">
			<img class="profile-img-card" src="./img/avatar.png">
			<div class="content">
				<h3>{{ Auth::customer()->get()->name }}</h3>
				<h4>{{ Auth::customer()->get()->member_type }}</h4>
				<p>	Balance : TT$ 53,024.41</p>
			</div>
	</div>


    <ul class="nav nav-tabs profile-tabs">
      <li class=""><a href="./cmb/profile" data-toggle="tab">Profile</a></li>
      <li><a href="./cmb/profile/password" data-toggle="tab">Password</a></li>
      @if(!Session::get('is_related'))
      	<li><a href="./cmb/profile/coshare" class="active" data-toggle="tab">coShare</a></li>
      @endif
      <li><a href="./cmb/profile/notifications"  data-toggle="tab">Notifications</a></li>
      <li><a href="./cmb/profile/boxsetup" data-toggle="tab">Box Setup</a></li>
    </ul>
    
    
    <div id="myTabContent" class="tab-content">


	      <div class="tab-pane fade" id="coShare">

	      	@if(count($customers) > 0)
				<table class="table table-striped table-bordered ">
					<thead>
						<tr>
							<td>ID</td>
							<td> Name </td>
							<td> Email </td>
							<td> Status </td>
						</tr>
					</thead>
					<tbody>

					
					@foreach($customers as $record)
						<tr>

							<td>{{ $record->id_pcustomer }}</td>
							<td>{{ $record->name }}</td>
							<td>{{ $record->email }}</td>
							<td>{{ $record->status }}</td>
						</tr>
					@endforeach



					</tbody>
				</table>



				@if( getenv('coShare'.str_replace(" ", "_",Auth::customer()->get()->member_type)) >=  count($customers))
					<div class="alert alert-danger" role="alert">
						You Cannot add more Co-Share to your Account, please contact Customer Support
					</div>
			
				@else
					<a class="notes-modal" href="./cmb/profile/coshare/create">
						<span class="glyphicon glyphicon-plus"></span>
					</a>
				@endif





			@else
				{{ trans('crud.not_records_found'); }}  	
			@endif

	      </div>

	</div>




@stop


