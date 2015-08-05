<div class="contactanos">

	<div class="container">

		<div class="padding-lg">


			<h1>Contactanos</h1>

				<p>Sabemos que para la expansión de su negocio es importante contar con las mejores herramientas  
				y conocimiento del mercado. 
				Nos interesa  ayudarle, seremos su mejor socio integrador de soluciones para su negocio</p>


				<div class="row">

					<div class="col-md-6">
						<div class="form-group @if ($errors->has('nombre')) has-error @endif">

						 {{ Form::label("text", "Nombre") }}
						   
						      {{ Form::text("nombre",$record->nombre,["class" => "form-control","placeholder"=>"Nombre"]); }}
						    
						 <span class="help-block">{{ $errors->first('nombre') }}</span>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group @if ($errors->has('apellidos')) has-error @endif">

						 {{ Form::label("text", "Apellidos") }}
						   
						      {{ Form::text("apellidos",$record->apellidos,["class" => "form-control","placeholder"=>"Apellidos"]); }}
						    
						 <span class="help-block">{{ $errors->first('apellidos') }}</span>
						</div>
					</div>

				</div>

				<div class="row">

					<div class="col-md-12">
						<div class="form-group @if ($errors->has('ciudad')) has-error @endif">

						 {{ Form::label("text", "Ciudad") }}
						   
						      {{ Form::text("ciudad",$record->ciudad,["class" => "form-control","placeholder"=>"Ciudad"]); }}
						    
						 <span class="help-block">{{ $errors->first('ciudad') }}</span>
						</div>
					</div>


				</div>

				<div class="row">

					<div class="col-md-12">
						<div class="form-group @if ($errors->has('correo')) has-error @endif">

						 {{ Form::label("text", "Correo") }}
						   
						      {{ Form::text("correo",$record->correo,["class" => "form-control","placeholder"=>"Correo"]); }}
						    
						 <span class="help-block">{{ $errors->first('correo') }}</span>
						</div>
					</div>

				</div>


				<div class="row">

					<div class="col-md-6">
						<div class="form-group @if ($errors->has('telefono')) has-error @endif">

						 {{ Form::label("text", "Telefono") }}
						   
						      {{ Form::text("telefono",$record->telefono,["class" => "form-control","placeholder"=>"Telefono"]); }}
						    
						 <span class="help-block">{{ $errors->first('telefono') }}</span>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group @if ($errors->has('celular')) has-error @endif">

						 {{ Form::label("text", "Celular") }}
						   
						      {{ Form::text("celular",$record->celular,["class" => "form-control","placeholder"=>"Celular"]); }}
						    
						 <span class="help-block">{{ $errors->first('celular') }}</span>
						</div>
					</div>
				</div>


				<div class="row">

					<div class="col-md-12">
						<div class="form-group @if ($errors->has('mensaje')) has-error @endif">

						 {{ Form::label("textarea", "Mensaje") }}
						   
						      {{ Form::textarea("mensaje", $record->mensaje,["class" => "form-control","placeholder"=>"Mensaje"]) }}
						    
						 <span class="help-block">{{ $errors->first('mensaje') }}</span>
						</div>
					</div>


				</div>


		</div>

	




	</div>


</div>