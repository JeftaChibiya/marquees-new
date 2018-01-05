<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ShapeImage extends Model
{

	   /**
	    * Save the 'Photo' model to the 'photos' table 
	    * @var string
	    */
      protected $table = 'shape_images';


      // Fill in the following fields in the 'photos' table
      protected $fillable = ['name', 'path', 'thumbnail_path']; 


      /**
       * Inverse of a one to many relationship between the Photo and Service model (JC - C3398189)
       * @return
       */
      public function shape()
      {

          return $this->belongsTo('App\Shape');          

      }  


     /**
       * Save an uploaded photo in uploads/photos (JC - C3398189)
       * @return
       */
      public function baseDir()
      {

          return 'shape/images';

      }      


      /**
       * 'setNameAttribute' is a mutator (JC - C3398189)
       * Match the path of the original service_item with that of its thumbnail (JC - C3398189)
       * @param
       */
      public function setNameAttribute($name)
      {
          $this->attributes['name'] = $name;

          $this->path = $this->baseDir() . '/' . $name;

          $this->thumbnail_path = $this->baseDir() . '/tn-' . $name;

      }                      
}
