


@if ((bool) array_intersect(["create","edit","show","delete"], $btn))
<!-- we will also add show, edit, and delete buttons -->
<td style="width:16em" class="hidden-print actions">

	{{ Form::open(array('url' => getenv('APP_ADMIN_PREFIX').'/'.$model.'/' . $record->{ $key_name })) }}
	<div class="row">

	  @if(!Entrust::can($model."/show") and in_array("show",$btn))
		  
		<div class="@if(!in_array("print",$btn)) col-md-12 @else col-md-6 @endif  text-center">
			<a class="btn btn-info btn-block"  href="{{ URL::to(getenv('APP_ADMIN_PREFIX').'/'.$model.'/' . $record->{ $key_name }) }}"> 
				{{ trans('crud.show') }}
			</a>
		</div>  

		  
	  @endif
	  @if(!Entrust::can($model."/print") and in_array("print",$btn))
		  
		<div class="@if(!in_array("show",$btn)) col-md-12 @else col-md-6 @endif text-center">  

			<a class="btn btn-default btn-block"  target="_blank" href="{{ URL::to(getenv('APP_ADMIN_PREFIX').'/'.$model.'/'. $record->{ $key_name }.'/print') }}">
				{{ trans('crud.print') }}
			</a>


		</div>  
	  @endif
	  @if(!Entrust::can($model."/edit") and in_array("edit",$btn))
		  
		<div class="@if(!in_array("delete",$btn)) col-md-12 @else col-md-6 @endif text-center">    
			<a class="btn btn-warning btn-block"  href="{{ URL::to(getenv('APP_ADMIN_PREFIX').'/'.$model.'/' . $record->{ $key_name } . '/edit') }}">{{ trans('crud.edit') }}</a>


		</div>  
	   @endif
	   	  
	  @if(!Entrust::can($model."/destroy") and in_array("delete",$btn)) 	  
		  
		{{ Form::hidden('_method', 'DELETE') }}

		<div class="@if(!in_array("edit",$btn)) col-md-12 @else col-md-6 @endif text-center">  
			<button type="button" class="btn btn-danger btn-block"  data-toggle="confirmation" data-placement="bottom">{{ trans('crud.delete') }}</button>


		</div>
		  
	  @endif
	</div>
	{{ Form::close() }}




</td>
@endif