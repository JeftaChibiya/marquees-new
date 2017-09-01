<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Attribute extends Model
{

	/**
	 * [$table description]
	 * @var string
	 */
    protected $table = 'attributes';


    /**
     * [$fillable description]
     * @var [type]
     */
    protected $fillable = ['span', 'length'];

    
    protected $cast = [
        'span'   => 'integer',
        'length' => 'integer'
    ];

}
