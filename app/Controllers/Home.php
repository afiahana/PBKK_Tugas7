<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function home()
	{
		return view('home');
	}

	public function aboutUs()
	{
		return view('about_us');
	}

	public function contactUs()
	{
		return view('contact_us');
	}
}
