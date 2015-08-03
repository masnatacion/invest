

@extends("cmb.tabs.show")
@section("show")
	<div class="padding-md">
		


		<div class="row">
			<div class="col-xs-4">
				<strong>Date</strong>
				<p>{{ $pobox->created_at }}</p>
				
			</div>
			<div class="col-xs-4">
				<strong>Status</strong>
				<p>{{ $pobox->status }}</p>
			</div>
			<div class="col-xs-4">
				<strong>AWB</strong>
				<p>{{ $pobox->id_awb }}</p>
			</div>
		</div>

			
		<div class="row">
			<div class="col-xs-4">
				ID
			</div>
			<div class="col-xs-8">
				{{ $pobox->id_pobox }}
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4 text-right ">
				Sender
			</div>
			<div class="col-xs-8 ">
				{{ $pobox->sender }}
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 text-right ">
				Consignee
			</div>
			<div class="col-xs-8 ">
				{{ $pobox->consignee }}
				
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 text-right ">
				Driver
			</div>
			<div class="col-xs-8 ">
				{{ $pobox->driver }}
				
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4 text-right ">
				Description
			</div>
			<div class="col-xs-8 ">
				{{ $pobox->description }}
				
			</div>
		</div>	
		<div class="row">
			<div class="col-xs-4 text-right ">
				Comments
				
			</div>
			<div class="col-xs-8 ">
				{{ $pobox->comments }}
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4 text-right ">
				Pieces
			</div>
			<div class="col-xs-8 ">
				{{ $pobox->pieces }}
				
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4 text-right ">
				Actual Weight
			</div>
			<div class="col-xs-8 ">
				{{ $pobox->tact_weight }}
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4 text-right ">
				Vol Weight
			</div>
			<div class="col-xs-8 ">
				{{ $pobox->tvol_weight }}
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4 text-right ">
				Chargable Weight
			</div>
			<div class="col-xs-8 ">
				{{ $pobox->tchg_weight }}
			</div>
		</div>



		<div class="row margin-top-md">
			<div class="col-xs-12 margin-bottom-xs">
				<strong>Description : CELL PHONE</strong>
			</div>
			    
			<div class="col-xs-6">
				<strong>Weight</strong>
				<p>{{ $pobox->tact_weight }}</p>
			</div>
			<div class="col-xs-6">
				<strong>Declared value</strong>
				<p>{{ $pobox->declared_value }}</p>
			</div>

			<div class="col-xs-6">
				<strong>Size(w/h/l)</strong>
				<p>{{ $pobox->size_width }} x {{ $pobox->size_height }} x {{ $pobox->size_length }}  {{ $pobox->munit }}</p>
			</div>
			<div class="col-xs-6">
				<strong>Location</strong>
				{{ $pobox->location }}
			</div>
		</div>








	</div>	
@stop



