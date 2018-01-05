<?php

namespace App;

use Carbon\Carbon;
use Symfony\Component\HttpFoundation\File\UploadedFile;


// WEBCRM
// AddPhotoToService is a service class

class AddImagesToShape
{

    /**
     * Service object
     * @var [type]
     */
    protected $shape;

    /**
     * Photo object
     * @var [type]
     */
    protected $file;


    /**
     * Required Objects to the methods in this class
     * @param Service      $service   [description]
     * @param UploadedFile $file      [description]
     * @param [type]       $thumbnail [description]
     */
    public function __construct(Shape $shape, UploadedFile $file, Thumbnail $thumbnail=null)
    {

        $this->shape = $shape;
        $this->file = $file;
        $this->thumbnail = $thumbnail ?: new Thumbnail;

    }

    /**
     * Save & persists a photo uploaded to a service
     * @return
     */
    public function save()
    {

          $image = $this->shape->addImage($this->makeimage()); // add image 

          $this->file->move($image->baseDir(), $image->name); // move to directory 

          $this->thumbnail->make($image->path, $image->thumbnail_path); // make thumbnail

    }


    /**
     * Generate a name for the uploaded photo
     * @return [type] [description]
     */
    protected function makeImage()
    {

          return new ShapeImage(['name' =>$this->makeFileName()]); //make a name 

    }

    /**
     * Construct a new name for the uploaded photo based on the original name of the photo the user has uploaded
     * @return [type] [description]
     */
    protected function makeFileName()
    {

          $name = sha1( Carbon::now()->year . $this->file->getClientOriginalName());

          $extension = $this->file->getClientOriginalExtension();

          return "{$name}.{$extension}";

    }

}
