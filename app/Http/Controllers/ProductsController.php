<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Attribute;
use Illuminate\Http\Request;
use Spatie\Dropbox\Client as DropboxClient;


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
	    	
	    	return view('product.index');

		}
		

	    /**
	     * Create product
	     * 
	     * @return [type] [description]
	     */
	    public function create()
	    {	    	
	    	
	    	return view('product.create');

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
			
			$client = new DropboxClient(config('filesystems.disks.dropbox.token'));
			  			
	    	
	    	return view('product.edit', compact('product', 'categories','client'));

		}	    
		
		
	    /**
	     * Edit product
	     * 
	     * @return [type] [description]
	     */
	    public function view($id)
	    {
	    	
			$categories = Category::all();
	    	$product = Product::with(['images', 'categories'])->find($id);			
			$client = new DropboxClient(config('filesystems.disks.dropbox.token'));
			$product_img_links = $client->listFolder($product->id);
			
	    	return view('product.view', compact('product', 'categories', 'product_img_links', 'client'));

		}	
				

	    /**
	     * [all description]
	     * 
	     * @return [type] [description]
	     */
	    public function all()
	    {

	    	return Product::with(['categories','cover','images'])->get();

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
		 * 
	     * @return [type] [description]
	     */
	    public function show($id)
	    {
	    	
	    	$product = Product::find($id);
	    	$categories = $product->categories();
			$attributes = Attribute::all();
			$client = new DropboxClient(config('filesystems.disks.dropbox.token'));
			$productImgLinks = $client->listFolder($product->id);				

	    	return view('product.show', compact('product', 'attributes', 'categories', 'productImgLinks', 'client'));

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
