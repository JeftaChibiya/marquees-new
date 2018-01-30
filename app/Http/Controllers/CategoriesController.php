<?php

namespace App\Http\Controllers;

use Storage;
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
	     * Create
	     * 
	     * @return [type] [description]
	     */
	    public function create()
	    {
	    	
	    	return view('category.create');

		} 		
		

		/**
	     * Edit
	     * 
	     * @return [type] [description]
	     */
	    public function edit($id)
	    {
			
			$category = Category::find($id);

	    	return view('category.edit', compact('category'));

		} 
		
		/**
	     * View
	     * 
	     * @return [type] [description]
	     */
	    public function view($id)
	    {
			
			$category = Category::find($id);

	    	return view('category.view', compact('category'));

		}		
		

		/**
	     * Update
	     * 
	     * @return [type] [description]
	     */
	    public function update($id, Request $request)
	    {
			$category = Category::find($id);

			$category->fill($request->except('cover_image'));
						
			// $category->name = $request->input('name');
			// $category->brief_desc = $request->input('brief_desc');

			if($request->hasFile('cover_image'))
			{
				$image = $request->file('cover_image');
				// name = time + original file name
				$filename = time() . '_' . $image->getClientOriginalName();
				// store in this folder
				$image->storeAs('/cover_images/categs',  $filename, 'uploads');
				// get old file 
				$oldCoverImg = $category->cover_image;
				
				$category->cover_image = $filename;

				// delete the old file from the disk
				Storage::delete($oldCoverImg);
			}
			
			$category->save();

	    	return back();

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
			$category = new Category;

			$category->name = $request->input('name');
			$category->brief_desc = $request->input('brief_desc');
			

			if($request->hasFile('cover_image'))
			{

				$cover_image = $request->file('cover_image');
				// name = time + original file name
				$filename = time() . '_' . $cover_image->getClientOriginalname();
				// store in this folder
				$cover_image->storeAs('/cover_images/categs',  $filename, 'uploads');

				$category->cover_image = $filename;

			}

			// see: https://laracasts.com/discuss/channels/laravel/symbolic-link

			$category->save();

			return redirect()->route('manage-categs', [$category]);

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
	    	// $products = $category->products;

	    	return view('category.show', compact('category'));

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
