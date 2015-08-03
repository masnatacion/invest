<?php
namespace cmb;

class BalanceController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /dashboard
	 *
	 * @return Response
	 */
	public function index()
	{

        return \View::make("cmb.balance.balance");
	}

	public function search()
	{
        return \View::make("cmb.balance.search");
	}

	public function list_all()
	{
		return \View::make("cmb.balance.list_all");	
	}



	public function invoices()
	{

		$id_pcustomer	=  \Auth::customer()->id();

		$records  = \DB::table('invoice')
		            ->where('id_pcustomer',$id_pcustomer)
		            ->orderBy('date','DESC')
		            ->paginate(10);


		return \View::make("cmb.balance.invoices")
			->with("records",$records);
	}

	public function payments()
	{

		$id_pcustomer	=  \Auth::customer()->id();

		$records  = \DB::table('payments')
		            ->where('id_pcustomer',$id_pcustomer)
		            ->orderBy('paydate','DESC')
		            ->paginate(10);


		return \View::make("cmb.balance.payments")
			->with("records",$records);
	}


}