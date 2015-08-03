<?php
namespace cmb;

class ShopAmericaController extends \admin\CrudController {

	public $className = "CmbNfShop";
	public $path 	  = "cmb";
	public $viewName  = "services.shopamerica";
	public $ajax      = false;


	public function index()
	{

		$id_pcustomer	=  \Auth::customer()->id();

		$records  = \DB::table('pobox_items')
					->join('pobox','pobox.id_pobox', '=', 'pobox_items.id_pobox')
		            ->join('agency', 'agency.id_agency', '=', 'pobox.id_agency')
		            ->join('awb', 'pobox.id_awb', '=', 'awb.id_awb')
		            ->where('pobox.id_pcustomer',$id_pcustomer)
		            ->orderBy('pobox.created_at','DESC')
		            ->select("pobox_items.id_pobox_items","pobox_items.created_at","agency.company_name","pobox_items.item_description","pobox_items.declared_value","awb.claim_status")
		            ->paginate(10);

        return \View::make("cmb.services.shopamerica.index")
        		->with("records",$records);
	}


	public function create()
	{
		$class    = new \CmbNfShop();
		$columns  = $class->getColumnsByView("create");

        return \View::make("cmb.services.shopamerica.create")
        		->with('columns',$columns);
	}


	public function show($id)
	{

		$pobox_items = new \PoboxItems();
		$columns   = $pobox_items->getColumnsByView("show",$id);
		$fk_column = $pobox_items->getCrud("fk_column");
		$record    = $pobox_items->find($id);

        return \View::make("cmb.services.shopamerica.show")
                ->with('fk_column',$fk_column)
        		->with('record',(object)$record)
        		->with('columns',$columns);
	}



}