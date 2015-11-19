<?php

class CategoriaController extends BaseController {

	public function getCategorias()
	{
		$categorias = Categoria::all();
		return View::make('categories', ['categorias' => $categorias]);
	}

	public function getCategoria($id)
	{
		$categoria = Categoria::find($id);
		return Response::json($categoria);
	}

	public function saveCategoria()
	{
		$nombre = Input::get('nombre');
		$descripcion = Input::get('descripcion');

		$categoria = new Categoria();
		$categoria->nombre = $categoria;
		$categoria->descripcion = $descripcion;
		$categoria->save();

		return Response::json($categoria);
	}

}
