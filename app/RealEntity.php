<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RealEntity extends Model
{

    protected $table = 'realentities';

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
	public function realImages()
	{

		return $this->hasMany(RealEntImg::class);

	}	


   /**
    *  Add image to Real entity
    *
    * @param RealEntImg $realEntImg
    */
    public function addImage(RealEntImg $image)
    {

    	return $this->realImages()->save($image);

    }	
    	    
}
