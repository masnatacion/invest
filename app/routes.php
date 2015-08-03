<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('cmb', function(){
	return View::make('cmb.login.login');
});

Route::get('cmb/login', ['as' => 'cmb/login', 'uses' => 'cmb\UsersController@login']);
Route::post('cmb/login/email', ['as' => 'cmb/login/email', 'uses' => 'cmb\UsersController@loginEmail']);
Route::get('cmb/logout', ['as' => 'cmb/logout', 'uses' => 'cmb\UsersController@logout']);

Route::get('cmb/password', ['as' => 'cmb/password', 'uses' => 'cmb\UsersController@password']);

Route::get('cmb/login_ajax', ['as' => 'cmb/login_ajax', 'uses' => 'cmb\UsersController@login_ajax']);



Route::get('about-us',['as' => 'about-us', 'uses' => 'AboutUSController@index']);
Route::get('services',['as' => 'services', 'uses' => 'ServicesController@index']);
Route::get('register',['as' => 'register', 'uses' => 'RegisterController@index']);
Route::get('cmbterms',['as' => 'cmbterms', 'uses' => 'CmbTermsController@index']);

Route::resource('contact-us','ContactUSController');


Route::get('classic-mailbox',['as' => 'classic-mailbox', 'uses' => 'ClassicMailboxController@index']);
Route::get('ocean-freight', ['as' => 'ocean-freight', 'uses' => 'OceanFreightController@index']);
Route::get('shop-america', ['as' => 'shop-america', 'uses' => 'ShopAmericaController@index']);
Route::get('addl-services',['as' => 'addl_services', 'uses' => 'AddlServicesController@index']);

Route::get('shipping-estimates',['as' => 'shipping_estimates', 'uses' => 'ShippingEstimatesController@index']);



Route::get('faq',['as' => 'faq', 'uses' => 'FaqController@index']);
Route::get('portfolio',['as' => 'portfolio', 'uses' => 'PortfolioController@index']);
Route::get('pricing', ['as' => 'pricing', 'uses' => 'PricingController@index']);

Route::get('tracking-shipment', ['as' => 'tracking-shipment', 'uses' => 'TrackingShipmentController@index']);
Route::post('tracking-shipment', ['as' => 'tracking-shipment', 'uses' => 'TrackingShipmentController@index']);


Route::filter('cmb', function() {
		if (Request::ajax() === false)
			return Response::error('500');
});


Route::group(array('before' => 'auth'), function()
{

	if (Request::is(getenv('APP_ADMIN_PREFIX').'/*') and Auth::admin()->check())
	{
		Route::post('admin/search/tracking',['as' => 'admin/search/tracking', 'uses' => 'admin\SearchController@tracking']);
		

		Route::post('admin/pcustomer/password/{id}',['as' => 'admin/pcustomer/password', 'uses' => 'admin\PcustomerController@password']);

	

	}
	


	if (Auth::customer()->check())
	{



		Route::get('cmb/search'		,['as' => 'cmb/search'	 , 'uses' => 'cmb\SearchController@index']);
		Route::get('cmb/dashboard'	,['as' => 'cmb/dashboard', 'uses' => 'cmb\DashBoardController@index'] );

		// PROFILE
		Route::get('cmb/profile'	, ['as' => 'cmb/profile'	, 'uses' => 'cmb\ProfileController@index']);
		Route::get('cmb/profile/password'	, ['as' => 'cmb/profile/password'	, 'uses' => 'cmb\ProfileController@password']);
		Route::post('cmb/profile/password'	, ['as' => 'cmb/profile/password'	, 'uses' => 'cmb\ProfileController@password']);
		
		Route::get('cmb/profile/coshare'	, ['as' => 'cmb/profile/coshare'	, 'uses' => 'cmb\ProfileController@coshare']);
		Route::get('cmb/profile/coshare/create'	, ['as' => 'cmb/profile/coshare/create'	, 'uses' => 'cmb\ProfileController@create_coshare']);
		Route::post('cmb/profile/coshare'	, ['as' => 'cmb/profile/coshare'	, 'uses' => 'cmb\ProfileController@create_coshare']);

		Route::get('cmb/profile/notifications'	, ['as' => 'cmb/profile/notifications'	, 'uses' => 'cmb\ProfileController@notifications']);
		Route::get('cmb/profile/boxsetup'	, ['as' => 'cmb/profile/boxsetup'	, 'uses' => 'cmb\ProfileController@boxsetup']);

		Route::post('cmb/profile/personal_info'	, ['as' => 'cmb/profile/personal_info'	, 'uses' => 'cmb\ProfileController@personal_info']);




		Route::get('cmb/analytics'	, ['as' => 'cmb/analytics'	, 'uses' => 'cmb\AnalyticsController@index']);
		Route::get('cmb/reports'	, ['as' => 'cmb/reports'	, 'uses' => 'cmb\ReportsController@index']);


		// WAREHOUSE


		Route::get('cmb/warehouse'		, ['as' => 'cmb/warehouse'				, 'uses' => 'cmb\WarehouseController@index']);
		

		Route::get('cmb/warehouse/advance'	, ['as' => 'cmb/warehouse/advance'			, 'uses' => 'cmb\WarehouseController@advance']);
		Route::post('cmb/warehouse/advance'	, ['as' => 'cmb/warehouse/advance'			, 'uses' => 'cmb\WarehouseController@advance']);
		
		Route::get('cmb/warehouse/advance/show/{id}'	, ['as' => 'cmb/warehouse/advance/show'			, 'uses' => 'cmb\WarehouseController@show_advance']);


		Route::get('cmb/warehouse/inbox'	, ['as' => 'cmb/warehouse/inbox'			, 'uses' => 'cmb\WarehouseController@inbox']);
		Route::get('cmb/warehouse/inbox/show/{id}'	, ['as' => 'cmb/warehouse/inbox/show'			, 'uses' => 'cmb\WarehouseController@show_inbox']);

		Route::get('cmb/warehouse/in_transit', ['as' => 'cmb/warehouse/in_transit', 'uses' => 'cmb\WarehouseController@in_transit']);
		Route::get('cmb/warehouse/in_transit/show/{id}'	, ['as' => 'cmb/warehouse/in_transit/show'			, 'uses' => 'cmb\WarehouseController@show_in_transit']);


		Route::get('cmb/warehouse/delivered'	, ['as' => 'cmb/warehouse/delivered'	, 'uses' => 'cmb\WarehouseController@delivered']);
		Route::get('cmb/warehouse/delivered/show/{id}'	, ['as' => 'cmb/warehouse/delivered/show'			, 'uses' => 'cmb\WarehouseController@show_delivered']);


		Route::get('cmb/warehouse/with_claim', ['as' => 'cmb/warehouse/with_claim', 'uses' => 'cmb\WarehouseController@with_claim']);
		Route::get('cmb/warehouse/with_claim/show/{id}'	, ['as' => 'cmb/warehouse/with_claim/show'			, 'uses' => 'cmb\WarehouseController@show_with_claim']);


		Route::get('cmb/warehouse/historic'	, ['as' => 'cmb/warehouse/historic'	, 'uses' => 'cmb\WarehouseController@historic']);
		Route::get('cmb/warehouse/historic/show/{id}'	, ['as' => 'cmb/warehouse/historic/show'			, 'uses' => 'cmb\WarehouseController@show_historic']);


		// MESSAGES


		Route::get('cmb/messages'		    , ['as' => 'cmb/messages'				, 'uses' => 'cmb\MessagesController@index']);
		Route::get('cmb/messages/inbox'	, ['as' => 'cmb/messages/inbox'			, 'uses' => 'cmb\MessagesController@inbox']);
		Route::get('cmb/messages/outbox', ['as' => 'cmb/messages/outbox', 'uses' => 'cmb\MessagesController@outbox']);
		Route::get('cmb/messages/compose'	, ['as' => 'cmb/messages/compose'	, 'uses' => 'cmb\MessagesController@compose']);



		// SERVICES	

		Route::get('cmb/services'	, ['as' => 'cmb/services'	, 'uses' => 'cmb\ServicesController@index']);
		Route::get('cmb/services/home'	, ['as' => 'cmb/services/home'			, 'uses' => 'cmb\ServicesController@home']);
		

		Route::resource('cmb/services/shopamerica', 'cmb\ShopAmericaController');
		Route::resource('cmb/services/shpinst', 'cmb\ShpInstController');
		Route::resource('cmb/services/pickup', 'cmb\PickUpController');



		Route::get('cmb/services/unidentified'	, ['as' => 'cmb/services/unidentified'			, 'uses' => 'cmb\ServicesController@unidentified']);
		Route::get('cmb/services/unidentified/show/{id}'	, ['as' => 'cmb/services/unidentified/show'			, 'uses' => 'cmb\ServicesController@show_unidentified']);

		
		Route::get('cmb/services/problems'	, ['as' => 'cmb/services/problems'			, 'uses' => 'cmb\ServicesController@problems']);
		Route::get('cmb/services/problems/show/{id}'	, ['as' => 'cmb/services/problems/show'			, 'uses' => 'cmb\ServicesController@show_problems']);


		Route::get('cmb/services/returned'	, ['as' => 'cmb/services/returned'			, 'uses' => 'cmb\ServicesController@returned']);
		Route::get('cmb/services/returned/show/{id}'	, ['as' => 'cmb/services/returned/show'			, 'uses' => 'cmb\ServicesController@show_returned']);


		Route::get('cmb/services/claims'	, ['as' => 'cmb/services/claims'			, 'uses' => 'cmb\ServicesController@claims']);
		Route::get('cmb/services/claims/show/{id}'	, ['as' => 'cmb/services/claims/show'			, 'uses' => 'cmb\ServicesController@show_claims']);
		

		// BALANCE

		Route::get('cmb/balance'			, ['as' => 'cmb/balance'			, 'uses' => 'cmb\BalanceController@index']);
		Route::get('cmb/balance/search'		, ['as' => 'cmb/balance/search'		, 'uses' => 'cmb\BalanceController@search']);
		Route::get('cmb/balance/list_all'	, ['as' => 'cmb/balance/list_all'	, 'uses' => 'cmb\BalanceController@list_all']);
		Route::get('cmb/balance/invoices'	, ['as' => 'cmb/balance/invoices'	, 'uses' => 'cmb\BalanceController@invoices']);
		Route::get('cmb/balance/payments'	, ['as' => 'cmb/balance/payments'	, 'uses' => 'cmb\BalanceController@payments']);



		Route::get('cmb/pages'		, ['as' => 'cmb/pages'		, 'uses' => 'cmb\PagesController@index']);
		Route::get('cmb/export'		, ['as' => 'cmb/export'		, 'uses' => 'cmb\ExportController@index']);

		Route::get('cmb/points'		, ['as' => 'cmb/export'		, 'uses' => 'cmb\PointsController@index']);

	}

	

});

