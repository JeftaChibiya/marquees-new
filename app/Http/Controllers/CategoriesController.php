<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;


class CategoriesController extends Controller
{
    
	    /**
	     * 	Category index
	     *  for admin access 
	     * 
	     * @return [type] [description]
	     */
	    public function index()
	    {
	    	
	    	return view('category.index');

	    }

	    /**
	     * All categories for public access
	     * 
	     * @return [type] [description]
	     */
	    public function all()
	    {
	    	
	    	return Category::all();

	    } 	    


	    /**
	     * All categories for public access
	     * 
	     * @return [type] [description]
	     */
	    public function getCategory($id)
	    {
	    	
	    	$category = Category::with('products')->find($id);

	    	return $category;

	    }	    


	    /**
	     * All categories for public access
	     * 
	     * @return [type] [description]
	     */
	    public function store(Request $request)
	    {
	    	
	    	$category = Category::create($request->all());

	    	return $category;

	    }	 

	    /**
	     * [getAll description]
	     * 
	     * @return [type] [description]
	     */
	    public function getAll()
	    {

	    	$categories = Category::all();

	    	return view('category.all', compact('categories'));

	    }


	    /**
	     * Contact Marquees
	     * @return [type] [description]
	     */
	    public function show($id)
	    {
	    	
	    	$category = Category::find($id);
	    	$products = $category->products;

	    	return view('category.show', compact('products', 'category'));

	    }    	      



	    /**
	     * ...
	     * @param  [type] $id [description]
	     * @return [type]     [description]
	     */
	    public function destroy($id)
	    {
	        
	        $category = Category::find($id);
	          
	        $category->delete();

	        if(request()->expectsJson()) {
	           return response(['status' => 'Category removed']);
	        }

	        return back();

	    }		    
}
