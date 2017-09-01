<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BYOController extends Controller
{
    
	/**
	 * 
	 * index page 
	 * 
	 * @return [type] [description]
	 */
    public function index()
    {

    	return view('byo');

    }


	/**
	 * 
	 * index page 
	 * 
	 * @return [type] [description]
	 */
    public function builder()
    {

    	return view('builder');

    }

}
