


@if ((bool) array_intersect(["create","edit","show","delete"], $btn))
<!-- we will also add show, edit, and delete buttons -->
<td style="width:14em" class="hidden-print actions">

	{{ Form::open(array('url' => getenv('APP_ADMIN_PREFIX').'/'.$model.'/' . $record->{ $key_name })) }}
	<div class="row">

	  @if(!Entrust::can($model."/show") and in_array("show",$btn))
		  
		<div class="@if(!in_array("print",$btn)) col-md-12 @else col-md-3 @endif  text-center no-padding">
			<a class="btn btn-small " href="{{ URL::to(getenv('APP_ADMIN_PREFIX').'/'.$model.'/' . $record->{ $key_name }) }}"> 
				<i class="fa fa-eye"></i> 
			</a>
		</div>  

		  
	  @endif
	  @if(!Entrust::can($model."/print") and in_array("print",$btn))
		  
		<div class="@if(!in_array("show",$btn)) col-md-12 @else col-md-3 @endif text-center no-padding">  
			<a class="btn btn-small " target="_blank" href="{{ URL::to(getenv('APP_ADMIN_PREFIX').'/'.$model.'/'. $record->{ $key_name }.'/print') }}">
				<i class="fa fa-print"></i> 
			</a>
		</div>  
	  @endif
	  @if(!Entrust::can($model."/edit") and in_array("edit",$btn))
		  
		<div class="@if(!in_array("delete",$btn)) col-md-12 @else col-md-3 @endif text-center no-padding">    
			<a class="btn btn-small "  href="{{ URL::to(getenv('APP_ADMIN_PREFIX').'/'.$model.'/' . $record->{ $key_name } . '/edit') }}">
				<i class="fa fa-pencil"></i> 
			</a>
		</div>  
	   @endif
	   	  
	  @if(!Entrust::can($model."/destroy") and in_array("delete",$btn)) 	  
		  
		{{ Form::hidden('_method', 'DELETE') }}

		<div class="@if(!in_array("edit",$btn)) col-md-12 @else col-md-3 @endif text-center no-padding">  
			<a class="btn btn-small " data-toggle="confirmation" data-placement="bottom">
				<i class="fa fa-trash-o"></i> 
			</a>
		</div>
		  
	  @endif
	</div>
	{{ Form::close() }}




</td>
@endif