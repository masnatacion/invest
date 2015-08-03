<?php
namespace cmb;

class ShpInstController extends \admin\CrudController {

	public $className = "CmbNfShpinst";
	public $path 	  = "cmb";
	public $viewName  = "services.shpinst";
	public $ajax      = false;


	public function index()
	{
		$id_pcustomer	=  \Auth::customer()->id();

		$records  = \DB::table('cmb_nf_shpinst')
		            ->where('id_pcustomer',$id_pcustomer)
		            ->orderBy('created_at','DESC')
		            ->paginate(10);

        return \View::make("cmb.services.shpinst.index")
        		->with("records",$records);
	}


	public function show($id)
	{

		$pobox_items = new \CmbNfShpinst();
		$columns   = $pobox_items->getColumnsByView("show",$id);
		$fk_column = $pobox_items->getCrud("fk_column");
		$record    = $pobox_items->find($id);

        return \View::make("cmb.services.shpinst.show")
                ->with('fk_column',$fk_column)
        		->with('record',(object)$record)
        		->with('columns',$columns);
	}

	public function create()
	{
		$class    = new \CmbNfShpinst();
		$columns  = $class->getColumnsByView("create");

        return \View::make("cmb.services.shpinst.create")
        		->with('columns',$columns);
	}




}