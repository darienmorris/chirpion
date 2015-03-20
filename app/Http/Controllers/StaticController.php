<?php namespace App\Http\Controllers;

class StaticController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function contact()
	{

		$name = 'Darien Morris';
		$email = 'darien.morris@gmail.com';
		return view('static.contact', compact('name', 'email'));
	}

}
