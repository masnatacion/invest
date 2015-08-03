<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PcustomerTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$path = app_path();
		$customers = File::get($path."/database/pcustomers.json");
		$customers = json_decode($customers);

		foreach($customers as $customer)
		{
			Pcustomer::create([
				"id_pcustomer" => $customer->CID,
			    "name" => $customer->Name,
			    "address" => $customer->Address,
			    "city" => $customer->City,
			    "state" => $customer->State,
			    "zip" => $customer->Zip,
			    "country" => $customer->Country,
			    "phone" => $customer->Phone,
			    "phone2" => $customer->Phone2,
			    "fax" => $customer->Fax,
			    "cellphone" => $customer->CellPhone,
			    "cust_instructions" => $customer->CustInstructions,
			    "comments" => $customer->Comments,
			    "email" => $customer->Email,
			    "company_comments" => $customer->CompanyComments,
			    "date_ini" => date('Y-m-d' ),
			    "date_end" => date('Y-m-d' ),
			    "date_plus" => date('Y-m-d' ),
			    "member_type" => $customer->MemberType,
			    "id_agency" => $customer->AID,
			    "username" => $customer->UserName,
			    "password" => 123456,
			    "remember_phrase" => $customer->RememberPhrase,
			    "auth_code" => $customer->AuthCode,
			    "rate_type" => $customer->RateType,
			    "destination" => $customer->Destination,
			    "shipping_instuctions" => $customer->ShippingInstuctions,
			    //"delivery_service" => $customer->DeliveryService,
			    //"approved_limit" => $customer->ApprovedLimit,
			    //"insurance" => $customer->Insurance,
			    //"dest_zone" => $customer->DestZone,
			    "hear_about_us" => $customer->HearAboutUs,
			    "invnotes" => $customer->InvNotes,
			    "flag_shpinst" => $customer->flag_shpinst,
			    "flag_puinst" => $customer->flag_puinst,
			    "flag_mroom" => $customer->flag_mroom,
			    "status" => $customer->CStatus
			]);
		}
	}

}