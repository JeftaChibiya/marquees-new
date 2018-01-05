<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Shape extends Model
{	
	
	/**
	 * [$table description]
	 * @var string
	 */
	protected $table = 'shapes';



	/**
	 * [$fillable description]
	 * @var [type]
	 */
	protected $fillable = [
		'name'
	];	



	/**
	 * [category description]
	 * 
	 *  Product has many embedded Images
	 * 
	 * @return [type] [description]
	 */
	public function shapeImages()
	{

		return $this->hasMany(ShapeImage::class);

	}	

   /**
    * Add image to a shape
    * 
    *
    * @param Image $image
    */
    public function addImage(ShapeImage $image)
    {

    	return $this->shapeImages()->save($image);

    }	
}
