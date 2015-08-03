<?php
namespace cmb;

class PickUpController extends \admin\CrudController {

	public $className = "CmbNfPickup";
	public $path 	  = "cmb";
	public $viewName  = "services.pickup";
	public $ajax      = false;

	public function index()
	{
		$id_pcustomer	=  \Auth::customer()->id();

		$records  = \DB::table('cmb_nf_pickup')
		            ->where('id_pcustomer',$id_pcustomer)
		            ->orderBy('created_at','DESC')
		            ->paginate(10);

        return \View::make("cmb.services.pickup.index")
        		->with("records",$records);
	}


	public function show($id)
	{

		$pobox_items = new \CmbNfPickup();
		$columns   = $pobox_items->getColumnsByView("show",$id);
		$fk_column = $pobox_items->getCrud("fk_column");
		$record    = $pobox_items->find($id);

        return \View::make("cmb.services.pickup.show")
                ->with('fk_column',$fk_column)
        		->with('record',(object)$record)
        		->with('columns',$columns);
	}

	public function create()
	{
		$class    = new \CmbNfPickup();
		$columns  = $class->getColumnsByView("create");

        return \View::make("cmb.services.pickup.create")
        		->with('columns',$columns);
	}


}