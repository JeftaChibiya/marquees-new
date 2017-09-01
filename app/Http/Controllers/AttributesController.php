<?php

namespace App\Http\Controllers;

use App\Attribute;
use Illuminate\Http\Request;


class AttributesController extends Controller
{


	/**
	 * [store description]
	 * @return [type] [description]
	 */
	public function all()
	{

		$attributes = Attribute::all();

		return $attributes;

	} 


	/**
	 * [store description]
	 * @return [type] [description]
	 */
	public function store(Request $request)
	{

		$attribute = Attribute::create($request->all());

		return $attribute;

	}   

	 
}
