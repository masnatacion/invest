<div class="">

      <a class="btn btn-default" href="{{ URL::to(getenv('APP_ADMIN_PREFIX').'/'.$model.'/') }}">
        <span class="glyphicon glyphicon-chevron-left"></span> Regresar
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






    </div>
</div>





