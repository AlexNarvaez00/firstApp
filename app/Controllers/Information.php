<?php

namespace App\Controllers;

class Information extends BaseController
{
	public function index()
	{
		return view('Information');
	}
	public function show($number)
	{
		return "El numero es: " . $number;
	}
}
