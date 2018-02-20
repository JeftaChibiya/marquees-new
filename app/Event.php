<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    
    protected $table = 'events';


	/** Fill the following fields */
    protected $fillable = ['title', 'desc', 'cover_image'];    


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
	 * [getCategoriesIds description]
	 * 
	 * @return [type] [description]
	 */
	public function getCategoriesIds()
	{

		return $this->categories->select('id')->where('id' ,'>' ,0)->lists('id')->toArray();

	}	


	/**
	 * [category description]
	 * 
	 *  Real Entity has many images
	 * 
	 * @return [type] [description]
	 */
	public function images()
	{

		return $this->hasMany(EventImg::class);

	}	


   /**
    *  Add image to Real entity
    *
    * @param EventImg $realEntImg
    */
    public function addImage(EventImg $image)
    {

    	return $this->images()->save($image);

    }	    
}
