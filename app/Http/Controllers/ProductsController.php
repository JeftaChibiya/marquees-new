<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Attribute;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
	 
	    /**
	     * 	Category index
	     *  for admin access 
	     * 
	     * @return [type] [description]
	     */
	    public function index()
	    {
	    	
	    	return view();

	    }

	    /**
	     * Edit product
	     * 
	     * @return [type] [description]
	     */
	    public function edit($id)
	    {
	    	
	    	$product = Product::with(['images', 'categories'])->find($id);
	    	$categories = Category::all();
	    	
	    	return view('product.edit', compact('product', 'categories'));

	    }	    

	    /**
	     * [all description]
	     * 
	     * @return [type] [description]
	     */
	    public function all()
	    {

	    	return Product::with('categories')->get();

	    }	    

	    /**
	     * Find individual product
	     * 
	     * @param  [type] $id [description]
	     * @return [type]     [description]
	     */
	    public function getProduct($id)
	    {	

	    	$product = Product::with(['images', 'categories'])->find($id);

	    	return $product;

	    }


	    /**
	     * Contact Marquees
	     * @return [type] [description]
	     */
	    public function show($id)
	    {
	    	
	    	$product = Product::with('images', 'cover')->find($id);
	    	$attributes = Attribute::all();

	    	return view('product.show', compact('product', 'attributes'));

	    }   

	    /**
	     * [store description]
	     * 
	     * @return [type] [description]
	     */
	    public function store(Request $request)
	    {

	    	$product = Product::create($request->all());

	    	$product->save();

	    	$product->categories()->attach($request->input('category'));

	    	return $product;

	    	// if category is provided, assoicate with it
	    	// if($request->get('category')){
		    	// 	$product->category()->toggle($product);
	    	// }	    	

	    }	


	    /**
	     * [update description]
	     * 
	     * @param  Product $product [description]
	     * @return [type]           [description]
	     */
	    public function update($id, Request $request, Product $product)
	    {

	    	 $product = Product::find($id);

	    	 $product->update($request->all());

	    }



	    /**
	     * ...
	     * @param  [type] $id [description]
	     * @return [type]     [description]
	     */
	    public function destroy($id)
	    {
	        
	        $product = Product::find($id);
	          
	        $product->delete();

	        if(request()->expectsJson()) {
	           
	           return response(['status' => 'Product removed']);
	           
	        }

	        return back();

	    }	          
}
