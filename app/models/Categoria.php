<?php

class Categoria extends Eloquent
{
	// table name
	protected $table = 'categorias';

	// fillable attributes
	protected $fillable = ['nombre', 'descripcion'];

	// using default timestamps
	public $timestamps = false;

}