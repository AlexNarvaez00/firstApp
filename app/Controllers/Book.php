<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Book as BookModel;

class Book extends BaseController
{
	/**
	 * Esta funcion se ejecuta cuando accedemos a la ruta 
	 * "/book"
	 */
	public function index()
	{
		$books = new BookModel();
		$allRows = $books->findAll();
		//Para pasarle los datos a la vista forzosamente se debe de llamar $data
		$data = ['rows' => $allRows];
		return view('Books/indexBook', $data);
	}
	/**
	 * Esta funcion muestra la vista que usaremos (formulario) para agregar 
	 * un nuevo registro
	 */
	public function new()
	{
		return view('Books/addBook');
	}
	public function show($id)
	{
		if ($id) {
			$books = new BookModel();
			$data = ['book' => $books->find($id)];
			return view('Books/showBook', $data);
		}
	}
	/**
	 * Esta funcion es la que se ejecuta cuando enviamos los datos por el formulario
	 */
	public function create()
	{
		//Para que la consulta no sea tan largar xd
		$request = $this->request;

		//Recuperamos los datos.
		//El parametro de "getVar" es el nombre del input en el formulario (en la visen la vistaa)
		$idBook = $request->getVar('id');
		$tituloBook = $request->getVar('titulo');
		$paginasBook = $request->getVar('paginas');
		$data = [
			'id' => $idBook,
			'titulo' => $tituloBook,
			'paginas' => intval($paginasBook)
		];
		//Creamos un objeto del modelo.
		$nuevoLibro = new BookModel();
		$nuevoLibro->insert($data);

		//
		$this->response->redirect(base_url('/book'));
	}

	/**
	 *Esta es la funcion que nos permite borrar registros de la base de datos
	 @param $id Es el id que se encuentra en la tabla
	 */
	public function delete($id)
	{
		$books = new BookModel();
		//Funcion para borrar
		$books->where('id', $id)->delete($id);
		//$book = $books->find($id);
		//print_r("Borrado con exito");
		$this->response->redirect(base_url('/book'));
	}

	/**
	 * Esta funcion se encargar de buscar el registro en la base de datos para poder mostarlo 
	 * en la vista
	 */
	public function edit($id = null)
	{
		$books = new  BookModel();
		//Preguntamos si se esta pasando algo por la URL
		if ($id != null) {
			$book = $books->find($id);
			$data = ['book' => $book];
			return view('Books/editBook', $data);
		}
	}
	public function update($id)
	{
		$books = new  BookModel();
		//Preguntamos si se esta pasando algo por la URL
		if ($id != null) {
			$book = $books->find($id);
			$newData = [
				//'id' => $this->request->getVar('id'),
				'titulo' => $this->request->getVar('titulo'),
				'paginas' => intval($this->request->getVar('paginas'))
			];
			$books->update($id, $newData);
			return view('Books/confirmBook');
		}
	}
}
