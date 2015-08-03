@extends("cmb.tabs.index")

@section("top")


	{{ Form::open( array('url' => array('cmb/warehouse/advance'), 'class'=>'form-inline margin-bottom-lg' ,'method' => 'POST','files'  => true)) }}

		<div class="form-group @if ($errors->has('tracking')) has-error @endif">

		 {{ Form::label("text", "Tracking Code") }}
		   
		      {{ Form::text("tracking","",["class" => "form-control","placeholder"=>"Tracking Code"]); }}
		    
		 <span class="help-block">{{ $errors->first('tracking') }}</span>
		</div>


		<a href="#" style="margin-bottom: .6em;" class="btn btn-md btn-success search">{{ trans('crud.search') }}</a>
		

	{{ Form::close() }}

@stop



@section("table")

    @if(isset($records))
	<div class="table-responsive ">
	    <table class="table table-hover">
	      <thead>
	        <tr>
	          <th>ID</th>	
	          <th>Tracking</th>
	          <th>Date</th>
	          <th>Carrier</th>
	          <th>Status</th>
	        </tr>
	      </thead>
	      <tbody>
	        @foreach($records as $record)

		        <tr>

		          <th scope="row">
		            <a class="tab-modal" href="./cmb/warehouse/advance/show/{{ $record->id_pobox_items }}">{{ $record->id_pobox_items }}</a>
		          </th>
		          <td>{{ $record->Tracking }}</td>
		          <td>{{ $record->created_by }}</td>
		          <td>{{ $record->carrier_name }}</td>
		          <td>{{ $record->status }}</td>

		        </tr>



	        @endforeach
	      </tbody>
	    </table>
	  </div>

	  @endif

@stop