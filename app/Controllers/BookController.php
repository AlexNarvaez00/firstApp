<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Book;

class BookController extends BaseController
{
	public function index()
	{
		$librosList = new Book();

		$data = ['arreglo1' => [1, 2, 3, 4, 5, 6]];
		$data['elements'] = $librosList->findAll();
		return view('Books/listBooks', $data);
	}
}
