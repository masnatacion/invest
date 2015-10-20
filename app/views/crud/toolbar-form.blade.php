<div class="">

      <a class="btn btn-default" href="{{ URL::to(getenv('APP_ADMIN_PREFIX').'/'.$model.'/') }}">
        <span class="glyphicon glyphicon-chevron-left"></span> {{ trans('crud.back') }}
      </a>


    <h2 class="text-uppercase">
        {{ trans('crud.'.$action) }}

        @if(empty($title))
          {{ strtoupper($model) }}
        @else
          {{ $title }}  
        @endif  
    </h2>
    <div class="mail-tools tooltip-demo m-t-md">

        @if(!Entrust::can($model."/show") and in_array("show",$btn))
          @if ($action != "create")
              <a href="{{ call_user_func("URL::to",getenv('APP_ADMIN_PREFIX').'/'.$model."/".$key_value) }}" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Refresh inbox">
                <i class="fa fa-refresh"></i> {{ trans('crud.show') }}
              </a>
              
          @endif
        @endif


        @if(!Entrust::can($model."/show") and in_array("show",$btn))
          @if ($action != "create")
              <a href="{{ call_user_func("URL::to",getenv('APP_ADMIN_PREFIX').'/'.$model."/".$key_value) }}" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top">
                <i class="fa fa-eye"></i> 
                {{ trans('crud.show') }}
              </a>

          @endif
        @endif



        @if(!Entrust::can($model."/edit") and in_array("edit",$btn))
          @if ($action != "create")

              <a href="{{ call_user_func("URL::to",getenv('APP_ADMIN_PREFIX').'/'.$model."/".$key_value) }}" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top">
                <i class="fa fa-eye"></i> 
                
              </a>


              <a href="{{ call_user_func("URL::to",getenv('APP_ADMIN_PREFIX').'/'.$model."/".$key_value."/print") }}" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top">
                <i class="fa fa-print"></i> 
                
              </a>

              <a href="{{ call_user_func("URL::to",getenv('APP_ADMIN_PREFIX').'/'.$model."/create") }}" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top">
                <i class="fa fa-plus"></i> 
                
              </a>


              
          @endif
        @endif
        
        @if(!Entrust::can($model."/print") and in_array("print",$btn))
          @if ($action != "create")

              <a href="{{ call_user_func("URL::to",getenv('APP_ADMIN_PREFIX').'/'.$model."/".$key_value."/edit") }}" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top">
                <i class="fa fa-pencil"></i> 
              </a>

              
          @endif
        @endif
    </div>
</div>





