<?php
namespace cmb;

class MessagesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /dashboard
	 *
	 * @return Response
	 */
	public function index()
	{
        return \View::make("cmb.messages.messages");
	}

	public function inbox()
	{
		$pobox 			= new \Pobox;
		$id_pcustomer	=  \Auth::customer()->id();
		// 'inbox','outbox','history','discard','discarted','error'
		$messages 	= $pobox->where("status","inbox")
						->where("id_pcustomer",$id_pcustomer)
						->paginate(10);

        return \View::make("cmb.messages.inbox")
        		->with("messages",$messages);
	}
	
	public function outbox()
	{

		$id_pcustomer	=  \Auth::customer()->id();

		$messages  = \DB::table('awb')
		            ->join('pobox', 'pobox.id_awb', '=', 'awb.id_awb')
		            ->where('pobox.status','outbox')
		            ->where('pobox.id_pcustomer',$id_pcustomer)
		            ->select('awb.from_name','awb.created_at','awb.description')
		            ->paginate(10);

        return \View::make("cmb.messages.outbox")
        		->with("messages",$messages);
	}

	public function compose()
	{
		return \View::make("cmb.messages.compose");	
	}


}