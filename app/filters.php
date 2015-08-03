<?php

App::error(function(Exception $exception, $code)
{

	if (Request::is('cmb/*'))
	{

		//return  Response::view( 'cmb.login.redirect', compact('message'), 404);
	    switch ($code)
	    {
	        case 404:
	            return Response::view( 'cmb.login.login', compact('message'), 404);
	        // case 500:
	            
	    }
	}


});
/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/
