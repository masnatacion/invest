<?php

class TrackingShipmentController extends \BaseController {


	public function index(){

		$cms = new \CmsPages;

		$record = $cms::where('status', 'Active')
					->where('alias','tracking-shipment')
					->firstOrFail();



		$tracking = \Input::get("tracking");
		$page 	  = \Input::get('page', 1);
		$records  = [];

		if($tracking)
		{



			$cmb_nf_lost_items 				= \DB::table('cmb_nf_lost_items')
												->join('cmb_nf_lost','cmb_nf_lost.id_cmb_nf_lost', '=', 'cmb_nf_lost_items.id_cmb_nf_lost')
												->where('cmb_nf_lost_items.tracking','=', $tracking)
												->select(\DB::raw('id_cmb_nf_lost_items as id,"cmb_nf_lost_items" as "table","Lost Items" as "title",cmb_nf_lost_items.tracking,cmb_nf_lost_items.created_at'));

			$cmb_nf_probshp					= \DB::table('cmb_nf_probshp')
												->where('tracking','=', $tracking)
												->select(\DB::raw('id_cmb_nf_probshp as id,"cmb_nf_probshp" as "table","Problem Shipping" as "title",cmb_nf_probshp.tracking,cmb_nf_probshp.created_at'));

			$pobox_items					= \DB::table('pobox_items')
												->join('pobox','pobox.id_pobox', '=', 'pobox_items.id_pobox')
												->where('pobox_items.Tracking','=', $tracking)
												->select(\DB::raw('pobox_items.id_pobox_items as id,"pobox_items" as "table","Pobox Items" as "title",pobox_items.tracking,pobox_items.created_at'));

			$returned_items					= \DB::table('returned_items')
												->where('returned_items.tracking','=', $tracking)
												->select(\DB::raw('returned_items.id_returned_items as id,"returned_items" as "table","Returned Items" as "title",returned_items.tracking,returned_items.created_at'));

			$cmb_nf_shpinst_tracking		= \DB::table('cmb_nf_shpinst_tracking')
												->join('cmb_nf_shpinst','cmb_nf_shpinst.id_cmb_nf_shpinst', '=', 'cmb_nf_shpinst.id_cmb_nf_shpinst')
												->where('cmb_nf_shpinst_tracking.tracking','=', $tracking)
												->select(\DB::raw('cmb_nf_shpinst_tracking.id_cmb_nf_shpinst_tracking as id,"cmb_nf_shpinst_tracking" as "table","Shipping Instruction" as "title",cmb_nf_shpinst_tracking.tracking,cmb_nf_shpinst_tracking.created_at'))
												->union($returned_items)
												->union($pobox_items)
												->union($cmb_nf_probshp)
												->union($cmb_nf_lost_items)
												->get();

			$records 						= $cmb_nf_shpinst_tracking;							



			$paginate = 25;

			$slice 	= array_slice($records, $paginate * ($page - 1), $paginate);
			$records = \Paginator::make($slice, count($records), $paginate);

		    return \View::make("public.tracking-shipment.tracking-shipment")
		    		->with('record',$record)
		    		->with('records',$records)
		    		->with('tracking',$tracking);

		}


	    return \View::make("public.tracking-shipment.tracking-shipment")
	    		->with('record',$record)
	    		->with('tracking','');



	}



}