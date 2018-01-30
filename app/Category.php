<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Category extends Model
{
    
    /**
     * [$table description]
     * @var string
     */
    protected $table = 'categories';


    /**
     * [$fillable description]
     * @var [type]
     */
    protected $fillable = [
    	'name',
        'brief_desc',
        'cover_image'
    ];


    /**
     * [products description]
     * 
     // * @return [type] [description]
     */
    public function products()
    {

    	return $this->belongsToMany(Product::class);

    }


    /**
     * [getRouteKeyName description]
     * 
     * @return [type] [description]
     */
    public function getRouteKeyName()
    {

        return 'name';

    }


}
