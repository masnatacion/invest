<?php
namespace cmb;

class WarehouseController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /dashboard
	 *
	 * @return Response
	 */
	public function index()
	{
        return \View::make("cmb.warehouse.warehouse");
	}

	public function advance()
	{

		if(\Input::has("tracking"))
		{
			$code = \Input::get("tracking");

			$tracking = new \Tracking();
			$records_tracking = $tracking->where("tracking",$code)->get();

			$records = [];
			if(count($records_tracking) > 0)
			{
				$id_pcustomer	=  \Auth::customer()->id();


				$items = new \PoboxItems();


				$records = \DB::table('pobox')
							->join("pobox_items","pobox.id_pobox","=","pobox_items.id_pobox")
							->where('pobox_items.Tracking',$code)
							->where('pobox.id_pcustomer',$id_pcustomer)
							->select('pobox_items.*','pobox.status')
							->orderBy('pobox.created_at','DESC')
							->paginate();

			}

			return \View::make("cmb.warehouse.advance.index")
        		->with('records',$records);
		}


        return \View::make("cmb.warehouse.advance.index");
	}
	
	public function show_advance($id)
	{

		$pobox_items = new \PoboxItems();
		$columns   = $pobox_items->getColumnsByView("show",$id);
		$fk_column = $pobox_items->getCrud("fk_column");
		$record    = $pobox_items->find($id);

        return \View::make("cmb.warehouse.advance.show")
                ->with('fk_column',$fk_column)
        		->with('record',(object)$record)
        		->with('columns',$columns);
	}


	// inbox

	public function inbox()
	{
		//$sth = mysql_query("SELECT COUNT(*) FROM pobox WHERE (CID='$usr[CID]' AND AID=10 $shares) AND Status='inbox'");	

		$id_pcustomer	=  \Auth::customer()->id();

		$pobox   = new \Pobox();
		$records = $pobox->where('pobox.status','inbox')
					->where('pobox.id_pcustomer',$id_pcustomer)
					->groupBy('pobox.id_awb')
					->orderBy('pobox.created_at','DESC')
					->paginate();


        return \View::make("cmb.warehouse.inbox.index")
        		->with("records",$records);
	}

	public function show_inbox($id)
	{

		$pobox = \DB::table('pobox')
					->where('pobox.id_pobox',$id)
					->join('pobox_items','pobox_items.id_pobox','=','pobox.id_pobox')
					->first();	

        return \View::make("cmb.warehouse.inbox.show")
                ->with('pobox',$pobox);
	}



	//in_transit

	public function in_transit()
	{


		//SELECT awb FROM pobox WHERE CID='$usr[CID]'  AND AID=10 AND Status='outbox' GROUP BY awb ORDER BY Date DESC
		$id_pcustomer	=  \Auth::customer()->id();


		$records = \DB::table('awb')
					->join('pobox','awb.id_awb', '=', 'pobox.id_awb')
					->where('pobox.status','outbox')
					->where('pobox.id_pcustomer',$id_pcustomer)
					->groupBy('pobox.id_awb')
					->orderBy('pobox.created_at','DESC')
					->paginate();			


        return \View::make("cmb.warehouse.in_transit.index")
        		->with("records",$records);
	}


	public function show_in_transit($id)
	{

		$pobox_items = new \Awb();
		$columns   = $pobox_items->getColumnsByView("show",$id);
		$fk_column = $pobox_items->getCrud("fk_column");
		$record    = $pobox_items->find($id);


        return \View::make("cmb.warehouse.in_transit.show")
                ->with('fk_column',$fk_column)
        		->with('record',(object)$record)
        		->with('columns',$columns);
	}



	// delivered

	public function delivered()
	{
		//$sth = mysql_query("SELECT COUNT(DISTINCT(awb)) FROM pobox WHERE (CID='$usr[CID]' AND AID=10 $shares) AND Status='history'");
		
		$id_pcustomer	=  \Auth::customer()->id();


		$records = \DB::table('awb')
					->join('pobox','awb.id_awb', '=', 'pobox.id_awb')
					->where('pobox.status','history')
					->where('pobox.id_pcustomer',$id_pcustomer)
					->groupBy('pobox.id_awb')
					->orderBy('pobox.created_at','DESC')
					->paginate();

		return \View::make("cmb.warehouse.delivered.index")
				->with("records",$records);
	}


	public function show_delivered($id)
	{

		$pobox_items = new \Awb();
		$columns   = $pobox_items->getColumnsByView("show",$id);
		$fk_column = $pobox_items->getCrud("fk_column");
		$record    = $pobox_items->find($id);

        return \View::make("cmb.warehouse.delivered.show")
                ->with('fk_column',$fk_column)
        		->with('record',(object)$record)
        		->with('columns',$columns);
	}





	// with_claim

	public function with_claim()
	{

		// "SELECT COUNT(DISTINCT(awb)) FROM pobox WHERE CID=$usr[CID] AND AID=10 AND Status='error'
		$id_pcustomer	=  \Auth::customer()->id();


		$records = \DB::table('awb')
					->join('pobox','awb.id_awb', '=', 'pobox.id_awb')
					->where('pobox.status','error')
					->where('pobox.id_pcustomer',$id_pcustomer)
					->groupBy('pobox.id_awb')
					->orderBy('pobox.created_at','DESC')
					->paginate();


		return \View::make("cmb.warehouse.with_claim.index")
				->with("records",$records);
	}

	public function show_with_claim($id)
	{

		$pobox_items = new \Awb();
		$columns   = $pobox_items->getColumnsByView("show",$id);
		$fk_column = $pobox_items->getCrud("fk_column");
		$record    = $pobox_items->find($id);

        return \View::make("cmb.warehouse.with_claim.show")
                ->with('fk_column',$fk_column)
        		->with('record',(object)$record)
        		->with('columns',$columns);
	}






	// historic

	public function historic()
	{
		// SELECT awb FROM pobox WHERE CID=$usr[CID] AND AID=10 AND Status='history' GROUP BY awb  ORDER BY Date DESC
		$id_pcustomer	=  \Auth::customer()->id();


		$records = \DB::table('awb')
					->join('pobox','awb.id_awb', '=', 'pobox.id_awb')
					->where('pobox.status','history')
					->where('pobox.id_pcustomer',$id_pcustomer)
					->groupBy('pobox.id_awb')
					->orderBy('pobox.created_at','DESC')
					->paginate();


		return \View::make("cmb.warehouse.historic.index")
				->with("records",$records);
	}

	public function show_historic($id)
	{

		$pobox_items = new \Awb();
		$columns   = $pobox_items->getColumnsByView("show",$id);
		$fk_column = $pobox_items->getCrud("fk_column");
		$record    = $pobox_items->find($id);

        return \View::make("cmb.warehouse.historic.show")
                ->with('fk_column',$fk_column)
        		->with('record',(object)$record)
        		->with('columns',$columns);
	}




}