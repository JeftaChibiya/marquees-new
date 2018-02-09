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
	public function index()
	{

		$attributes = Attribute::all();

		return view('attribute.index', compact('attributes'));

	} 


	/**
	 * [store description]
	 * @return [type] [description]
	 */
	public function create()
	{

		return view('attribute.create');

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
