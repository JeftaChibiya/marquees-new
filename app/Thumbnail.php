<?php
 
namespace App; // the pathway of this class

use Image; // The intevention class imported on 01.11.2016


// Created: 01.11.2016
class Thumbnail
{

	/**
	 * Make a thumbnail for an image thats been uploaded to a service item (JC, C3398189)
	 * @param  [type] $src         [description]
	 * @param  [type] $destination [description]
	 * @return [type]              [description]
	 */
    public function make($src, $destination)
    {
        Image::make($src)
            ->fit(200)
            ->save($destination);
    }


}