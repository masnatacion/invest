@extends("crud.layout-form")

@section("form")


<div class="form-group @if ($errors->has('fotografia')) has-error @endif">

 {{ Form::label("text", "Fotografia") }}
   
      {{ Form::filepicker("fotografia",$record->fotografia,["class" => "form-control","placeholder"=>"Fotografia"]); }}
    
 <span class="help-block">{{ $errors->first('fotografia') }}</span>
</div>

<div class="form-group @if ($errors->has('status')) has-error @endif">

 {{ Form::label("radiogroup", "Status") }}
   
      {{ Form::radiogroup("status",$record->status,[],$columns->status->data); }}
    
 <span class="help-block">{{ $errors->first('status') }}</span>
</div>

<div class="form-group @if ($errors->has('nombre')) has-error @endif">

 {{ Form::label("text", "Nombre") }}
   
      {{ Form::text("nombre",$record->nombre,["class" => "form-control","placeholder"=>"Nombre"]); }}
    
 <span class="help-block">{{ $errors->first('nombre') }}</span>
</div>

<div class="form-group @if ($errors->has('lugar')) has-error @endif">

      {{ Form::label("text", "Dirección") }}

      {{ Form::text("direccion",$record->direccion,["id"=>"geocomplete","class" => "form-control","placeholder"=>"Dirección"]); }}
   

      <span class="help-block">{{ $errors->first('direccion') }}</span>

      {{ Form::hidden('latitud', null, array('data-geo' => 'lat','class' => 'form-control')) }}
      {{ Form::hidden('longitud', null, array('data-geo' => 'lng','class' => 'form-control')) }}
      {{ Form::hidden('estado', null, array('data-geo' => 'administrative_area_level_1','class' => 'form-control')) }}
      {{ Form::hidden('pais', null, array('data-geo' => 'country','class' => 'form-control')) }}

      <div class="map_canvas" style="width:100%;height:400px"></div>

</div>

<div class="form-group @if ($errors->has('categoria')) has-error @endif">

 {{ Form::label("text", "Categoria") }}
   
      {{ Form::text("categoria",$record->categoria,["class" => "form-control","placeholder"=>"Categoria"]); }}
    
 <span class="help-block">{{ $errors->first('categoria') }}</span>
</div>



<div class="form-group @if ($errors->has('superficie_terreno')) has-error @endif">

 {{ Form::label("text", "Superficie terreno") }}
   
      {{ Form::text("superficie_terreno",$record->superficie_terreno,["class" => "form-control","placeholder"=>"Superficie terreno"]); }}
    
 <span class="help-block">{{ $errors->first('superficie_terreno') }}</span>
</div>

<div class="form-group @if ($errors->has('construccion')) has-error @endif">

 {{ Form::label("textarea", "Construccion") }}
   
      {{ Form::textarea("construccion", $record->construccion,["class" => "form-control","placeholder"=>"Construccion"]) }}
    
 <span class="help-block">{{ $errors->first('construccion') }}</span>
</div>

<div class="form-group @if ($errors->has('estacionamiento')) has-error @endif">

 {{ Form::label("textarea", "Estacionamiento") }}
   
      {{ Form::textarea("estacionamiento", $record->estacionamiento,["class" => "form-control","placeholder"=>"Estacionamiento"]) }}
    
 <span class="help-block">{{ $errors->first('estacionamiento') }}</span>
</div>

<div class="form-group @if ($errors->has('local_disponible')) has-error @endif">

 {{ Form::label("textarea", "Local disponible") }}
   
      {{ Form::textarea("local_disponible", $record->local_disponible,["class" => "form-control","placeholder"=>"Local disponible"]) }}
    
 <span class="help-block">{{ $errors->first('local_disponible') }}</span>
</div>

<div class="form-group @if ($errors->has('informes')) has-error @endif">

 {{ Form::label("textarea", "Informes") }}
   
      {{ Form::textarea("informes", $record->informes,["class" => "form-control","placeholder"=>"Informes"]) }}
    
 <span class="help-block">{{ $errors->first('informes') }}</span>
</div>



<div class="form-group @if ($errors->has('plano_aquitectonico')) has-error @endif">

 {{ Form::label("text", "Plano aquitectonico") }}
   
      {{ Form::text("plano_aquitectonico",$record->plano_aquitectonico,["class" => "form-control","placeholder"=>"Plano aquitectonico"]); }}
    
 <span class="help-block">{{ $errors->first('plano_aquitectonico') }}</span>
</div>


     

@stop


@section("javascript")

<script type="text/javascript">


            
      $(function(){
        $("#geocomplete").geocomplete({
          map                       : ".map_canvas",
          details                   : "form .form-group",
          detailsAttribute  : "data-geo",
          markerOptions: {
            draggable: true
          }

           @if(!empty($record->latitud))
            ,location : [{{ $record->latitud }},{{ $record->longitud }}]
          @endif
          
        });
        
        $("#geocomplete").bind("geocode:dragged", function(event, latLng){
          $("input[name=lat]").val(latLng.lat());
          $("input[name=lng]").val(latLng.lng());
        });
        


      });


</script>


@stop


