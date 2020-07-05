<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function dashboard()
	{
		if(!session('id')) return redirect()->route('loginForm');

		return view('profile');
	}

	//--------------------------------------------------------------------

}
