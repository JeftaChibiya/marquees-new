<?php

namespace App\Http\Controllers;


use App\Image;
use App\Product;
use App\AddImagesToProduct;
use Illuminate\Http\Request;
use App\Http\Requests\AddProductImagesRequest;


class ImagesController extends Controller
{

    /**
     * Upload a photo and assign it to a given service item
     * @param  Product     $product the parent relation
     * @param  AddPhotoToProductRequest $request     a service class
     * @return
     */
    public function store($id, AddProductImagesRequest $request)
    {   
        
        $product = Product::find($id);

        // Target the 'photo' form field from the given view
        $image = $request->file('file');	      

        // Make a new instance of the 'AddPhotoToService' class
        (new AddImagesToProduct($product, $image))->save();

        return $image;

    }

    /**
     * Delete the photo along with the image files related to it
     *
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function delete($id)
    {	
    	
    	// flash()->confirmation('Warning', 'Are you sure?', 'warning');

        // Find this instance of the 'Photo' model, & delete it using the 'delete' method in the 'Photo' model
        Image::findOrFail($id)->delete();	        

        // return back
        return back();

    }


    /**
     * Update the 'cover' boolean field in the 'photos' table (JC, C3398189)
     * Update the default value to true or back to false (JC, C3398189)
     * Method created: 20.11.2016 (JC, C3398189)
     *
     * @return
     */

    public function update($id, Request $request)
    {

        $image = Image::find($id);

        $image->cover = $request->has('cover');

        // flash()->success('Success', 'This photo was set as a cover image');

        $image->save();

        return $image;

    }    
}