<?php namespace App\Http\Controllers;

class AboutController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| About Controller
	|--------------------------------------------------------------------------
	*/

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('about');
	}

}
