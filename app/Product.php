<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{	

	protected $table = 'products';


	protected $fillable = [
		'name',
		'span',
		'length'
	];

	/**
	 * [cover description]
	 * 
	 * @return [type] [description]
	 */
	public function cover()
	{
        
        return $this->hasOne(Image::class)->where('cover', '=', 1);

	}	


	/**
	 * [category description]
	 *  Here the Product model references the Category model and table 
	 * 
	 * @return [type] [description]
	 */
	public function categories()
	{

		return $this->belongsToMany(Category::class);

	}


	/**
	 * [category description]
	 * 
	 *  Product has many embedded Images
	 * 
	 * @return [type] [description]
	 */
	public function images()
	{

		return $this->hasMany(Image::class);

	}


   /**
    * Save a new photo to the 'images' tables and relate the photo to a service item (JC, C3398189)
    * Method created: 01/11/2016 by JC (C3398189)
    *
    * @param Image $image
    */
    public function addImage(Image $image)
    {

    	return $this->images()->save($image);

    }	
}
