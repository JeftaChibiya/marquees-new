<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RealEntImg extends Model
{

        /**
	    * Save the 'Photo' model to the 'photos' table 
	    * @var string
	    */
        protected $table = 'images';     

        /** Fill the following fields */
        protected $fillable = ['name', 'dropbox_id'];       

        
        /** 
         *  Belongs to one real-life entity
         * 
         */
        public function realEntity()
        {
  
            return $this->belongsTo('App\RealEntity');          
  
        }         
}
