<?php

namespace App\Http\Controllers;


use App\Shape;
use App\ShapeImage;
use App\AddImagesToShape;
use Illuminate\Http\Request;
use App\Http\Requests\AddShapeImagesRequest;


class ShapesController extends Controller
{
     
     /**
      * [store description]
      * 
      * @return [type] [description]
      */
     public function store(Request $request)
     {

    	  $shape = Shape::create($request->all());

    	  return $shape;     	

     }

     
     /**
      * [getAll description]
      * 
      * @return [type] [description]
      */
     public function getAll()
     {

        return Shape::all();

     }


     /**
      * [getAll description]
      * 
      * @return [type] [description]
      */
     public function getAllShapeImages()
     {

        return ShapeImage::all();

     }



     /**
      * [getAll description]
      * 
      * @return [type] [description]
      */
     public function getShape($id)
     {

        $shape = Shape::with('shapeImages')->find($id);

        return $shape;

     }

     
     /**
      * [getAll description]
      * 
      * @return [type] [description]
      */
     public function customShape($id)
     {

        $shape = Shape::with('shapeImages')->find($id);

        return view('custom-shape', compact('shape'));

     }     


     /**
      * [addImages description]
      * 
      */
     public function addImages($id, AddShapeImagesRequest $request)
     {

        $shape = Shape::find($id);

        // Target the 'photo' form field from the given view
        $image = $request->file('file');        

        // Make a new instance of the 'AddPhotoToService' class
        (new AddImagesToShape($shape, $image))->save();

        return $image;        

     }


}
