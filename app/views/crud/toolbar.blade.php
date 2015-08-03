<div class="index-toolbar">

	<div class="row wrapper white-bg page-heading">
	    <div class="col-lg-10">
	        <h2>
	      		@if(empty($title))
	      			{{ strtoupper($model) }}
	      		@else
	      			{{ $title }}	
	      		@endif	
	        </h2>

	    </div>
	    <div class="col-lg-2">

	    </div>
	</div>

	<div class="row margin-bottom-lg">

		@if(!Entrust::can($model."/create") and in_array("create",$btn))
			<div class="col-md-2">
				<a class="btn btn-block btn-primary"  href="{{ call_user_func("URL::to",getenv('APP_ADMIN_PREFIX').'/'.$model."/create") }}">{{ trans('crud.create') }}</a>
			</div>
			
		@endif


			<div class="col-md-7 no-padding">
		        @if(!Entrust::can($model."/search") and in_array("search",$btn))

	        		{{ Form::open( array('url' => array(getenv('APP_ADMIN_PREFIX').'/'.$model.'/'), 'method' => 'GET','class'  => 'navbar-form form-search-toolbar no-margin no-padding','role' =>'search')) }}


						<select combo="combo" value="{{ \Input::get('columna') }}" class="form-control combo-search" placeholder="Columna" name="columna">

				        	@foreach ($advance_search as $column)
				        		<option value="{{ $column->name }}">{{ $column->label }}</option>
				        		
				        	@endforeach
				        		<option value="all">{{ trans('crud.all') }}</option>	
						</select>

					    <div class="input-group">

		                    {{ Form::text("search",Input::get('search'),array('class' => 'form-control input-search','placeholder'=> trans('crud.search')) ); }}
		                    <span class="input-group-btn">
		                    	<a href="{{ getenv('APP_ADMIN_PREFIX').'/'.$model.'/' }}" class="btn btn-default">
		                            <span class="glyphicon glyphicon-remove">
		                                <span class="sr-only">Close</span>
		                            </span>
		                    	</a>

		                        <button type="submit" class="btn btn-default">
		                            <span class="glyphicon glyphicon-search">
		                                <span class="sr-only">Tracking Code</span>
		                            </span>
		                        </button>
		                    </span>

					    </div><!-- /input-group -->

		            
		            {{ Form::close() }}
		        	
		        	
		        @endif
			</div>
			<div class="col-md-3 text-right">
		        @if(!Entrust::can($model."/advance-search") and in_array("advance-search",$btn))

		        	<span class="@if(Input::has('is-advance-search')) active @endif">
		        		<a href="#" class="btn-advance-search btn btn-default btn-block">{{ trans('crud.advance_search') }}</a>
		        	</span>

		        @endif
			</div>





		@if(!Entrust::can($model."/advance-search") and in_array("advance-search",$btn))
			@include("crud.advance-search")
		@endif


	</div>
</div>

