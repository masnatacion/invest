@extends("cmb.tabs.show")
@section("show")
	<div class="padding-md">


		<div class="row">
			<div class="col-xs-3">
				<img src="./img/logo-mobile.png">
				<h3 class="no-margin text-center">AWB</h3>
			</div>
			<div class="col-xs-9">
				<div class="row">

					<div class="col-xs-10">

						<div class="row">
							<div class="col-xs-4">
								<strong>Date</strong>
								<p>{{ parseToHTML($columns->date,$record,$fk_column) }}</p>
							</div>
							<div class="col-xs-4">
								<strong>Origin</strong>
								<p>{{ parseToHTML($columns->origin,$record,$fk_column) }}</p>
							</div>
							<div class="col-xs-4">
								<strong>Dest</strong>
								<p>{{ parseToHTML($columns->destination,$record,$fk_column) }}</p>
							</div>
						</div>


						<div class="row">
							<div class="col-xs-3">
								<strong>CMB #</strong>
								<p>{{ parseToHTML($columns->id_awb,$record,$fk_column) }}</p>
							</div>
							<div class="col-xs-3">
								<strong>Pieces</strong>
								<p>{{ parseToHTML($columns->pieces,$record,$fk_column) }}</p>
							</div>
							<div class="col-xs-3">
								<strong>Weight</strong>
								<p>{{ parseToHTML($columns->weight,$record,$fk_column) }}</p>
							</div>
							<div class="col-xs-3">
								<strong>Chg Weight</strong>
								<p>{{ parseToHTML($columns->chgweight,$record,$fk_column) }}</p>
							</div>
						</div>


					</div>

					<div class="col-xs-2">
						<strong>AirWay Bill#</strong>
						<p></p>
					</div>

				</div>

				<div class="row">
					<div class="col-xs-12">
						<strong>Description</strong>
						<p>{{ parseToHTML($columns->description,$record,$fk_column) }}</p>
					</div>
				</div>
			</div>


		</div>

		<div class="row">
			<div class="col-xs-6">
				<strong>Sender</strong>
				<div class="row">
					<div class="col-xs-3">Name</div>
					<div class="col-xs-9">{{ parseToHTML($columns->from_name,$record,$fk_column) }}</div>
				</div>

				<div class="row">
					<div class="col-xs-3">Addrees</div>
					<div class="col-xs-9">
						<p class="no-margin">{{ parseToHTML($columns->from_address,$record,$fk_column) }}</p>
						<p class="no-margin">{{ parseToHTML($columns->from_state,$record,$fk_column) }}</p>
						<p class="no-margin">{{ parseToHTML($columns->from_country,$record,$fk_column) }}</p>
						
					</div>
				</div>
				<div class="row">
					<div class="col-xs-3">Phone</div>
					<div class="col-xs-9">{{ parseToHTML($columns->from_phone,$record,$fk_column) }}</div>
				</div>
			</div>
			<div class="col-xs-6">
				<strong>Receiver</strong>

				<div class="row">
					<div class="col-xs-3">Name</div>
					<div class="col-xs-9">{{ parseToHTML($columns->to_name,$record,$fk_column) }}</div>
				</div>

				<div class="row">
					<div class="col-xs-3">Addrees</div>
					<div class="col-xs-9">
						<p class="no-margin">{{ parseToHTML($columns->to_address,$record,$fk_column) }}</p>
						<p class="no-margin">{{ parseToHTML($columns->to_state,$record,$fk_column) }}</p>
						<p class="no-margin">{{ parseToHTML($columns->to_country,$record,$fk_column) }}</p>
						
					</div>
				</div>
				<div class="row">
					<div class="col-xs-3">Phone</div>
					<div class="col-xs-9">{{ parseToHTML($columns->to_phone,$record,$fk_column) }}</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4">
				<p class="text-warning">The following airwaybill only reflects the freight charges based on your classic mail box program agreement. It does not include any local charges that your shipment may incurr for example, customs duties an vat, the airway bill total is to be used as a guide and not as an invoice for payments, Thank you</p>
			</div>
			<div class="col-xs-4">
				<div class="row">
					<div class="col-xs-12">
						<strong>Pay Method</strong>
						<p>{{ parseToHTML($columns->paymethod,$record,$fk_column) }}</p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<strong>POD</strong>
						{{ parseToHTML($columns->info,$record,$fk_column) }}
					</div>
				</div>

			</div>   
			<div class="col-xs-4">
				<div class="row">
					<div class="col-xs-12">
						<strong>Declared Value</strong>
						<p>{{ parseToHTML($columns->declaredvalue,$record,$fk_column) }} </p>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<strong>Shipping Charges</strong>
						<p>{{ parseToHTML($columns->shipping_charges,$record,$fk_column) }} </p>
						
						<strong>Other Charges</strong>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<strong>Total Charges</strong>
						<p>{{ $record->shipping_charges + $record->declaredvalue }} </p>
					</div>
				</div>
			</div>
		</div>







@stop



