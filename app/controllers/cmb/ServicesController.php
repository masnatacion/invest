<?php
namespace cmb;

class ServicesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /dashboard
	 *
	 * @return Response
	 */
	public function index()
	{
        return \View::make("cmb.services.services");
	}

	public function home()
	{
        return \View::make("cmb.services.home");
	}

	public function invoices()
	{
		return \View::make("cmb.services.invoices");	
	}


	//
	// unidentified
	//

	public function unidentified()
	{
		$id_pcustomer	=  \Auth::customer()->id();

		$records  = \DB::table('cmb_nf_lost_items')
		            // ->where('id_pcustomer',$id_pcustomer)
		            ->orderBy('created_at','DESC')
		            ->paginate(10);

        return \View::make("cmb.services.unidentified.index")
        		->with("records",$records);
	}

	public function show_unidentified($id)
	{

		$pobox_items = new \CmbNfLostItems();
		$columns   = $pobox_items->getColumnsByView("show",$id);
		$fk_column = $pobox_items->getCrud("fk_column");
		$record    = $pobox_items->find($id);

        return \View::make("cmb.services.unidentified.show")
                ->with('fk_column',$fk_column)
        		->with('record',(object)$record)
        		->with('columns',$columns);
	}


	//
	// problems
	//

	public function problems()
	{
		$id_pcustomer	=  \Auth::customer()->id();

		$records  = \DB::table('cmb_nf_probshp')
		            ->where('id_pcustomer',$id_pcustomer)
		            ->orderBy('created_at','DESC')
		            ->paginate(10);

        return \View::make("cmb.services.problems.index")
        		->with("records",$records);
	}

	public function show_problems($id)
	{

		$pobox_items = new \CmbNfProbshp();
		$columns   = $pobox_items->getColumnsByView("show",$id);
		$fk_column = $pobox_items->getCrud("fk_column");
		$record    = $pobox_items->find($id);

        return \View::make("cmb.services.problems.show")
                ->with('fk_column',$fk_column)
        		->with('record',(object)$record)
        		->with('columns',$columns);
	}


	//
	// returned
	//

	public function returned()
	{

		$id_pcustomer	=  \Auth::customer()->id();

		$records  = \DB::table('returned_items')
		            ->where('id_pcustomer',$id_pcustomer)
		            ->orderBy('created_at','DESC')
		            ->paginate(10);

        return \View::make("cmb.services.returned.index")
        		->with("records",$records);

	}

	public function show_returned($id)
	{

		$pobox_items = new \ReturnedItems();
		$columns   = $pobox_items->getColumnsByView("show",$id);
		$fk_column = $pobox_items->getCrud("fk_column");
		$record    = $pobox_items->find($id);

        return \View::make("cmb.services.returned.show")
                ->with('fk_column',$fk_column)
        		->with('record',(object)$record)
        		->with('columns',$columns);
	}

	//
	// claims
	//

	public function claims()
	{

		$id_pcustomer	=  \Auth::customer()->id();

		$records  = \DB::table('cmb_nf_claims')
		            ->where('id_pcustomer',$id_pcustomer)
		            ->orderBy('created_at','DESC')
		            ->paginate(10);

        return \View::make("cmb.services.claims.index")
        		->with("records",$records);

	}

	public function show_claims($id)
	{

		$pobox_items = new \CmbNfClaims();
		$columns   = $pobox_items->getColumnsByView("show",$id);
		$fk_column = $pobox_items->getCrud("fk_column");
		$record    = $pobox_items->find($id);

        return \View::make("cmb.services.claims.show")
                ->with('fk_column',$fk_column)
        		->with('record',(object)$record)
        		->with('columns',$columns);
	}


}