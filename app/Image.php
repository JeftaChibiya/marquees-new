<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

	   /**
	    * Save the 'Photo' model to the 'photos' table 
	    * @var string
	    */
        protected $table = 'images';      


      // Fill in the following fields in the 'photos' table
	    protected $fillable = ['name', 'path', 'dropbox_id', 'thumbnail_path'];


    //    protected $casts = [
          
    //       'cover' => false,
    //       'outside' => false,
    //       'inside' => false                    
    //    ];      

      /**
       * Inverse of a one to many relationship between the Photo and Service model (JC - C3398189)
       * @return
       */
      public function product()
      {

          return $this->belongsTo('App\Product');          

      }      

      /**
       * Set 'cover' field in the 'photos' table as a boolean value (JC - C3398189)
       * Created on: 01.11.2016
       * 
       * @var [type]
       */
       protected $casts = [
          
          'cover' => false

       ];

     /**
       * Save an uploaded photo in uploads/photos (JC - C3398189)
       * @return
       */
      public function baseDir()
      {

          return 'products/images/';

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

          $this->thumbnail_path = $this->baseDir() . '/thumbnail-' . $name;

      }


      /**   
       * 
       *  
       */     
    //   public static function boot()
    //   {
    //       parent::boot();
  
    //       static::creating(function ($image) {
  
    //           $image->id = image + 2;
  
    //       });
    //    }      

    //    https://www.sitepoint.com/build-your-own-dropbox-client-with-the-dropbox-api/
    //   save file in dropbox using store method
   
}
