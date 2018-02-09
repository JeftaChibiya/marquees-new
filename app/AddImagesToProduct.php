<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\Dropbox\Client as DropboxClient;
use Symfony\Component\HttpFoundation\File\UploadedFile;


// WEBCRM
// AddPhotoToService is a service class

class AddImagesToProduct
{

    /**
     * Service object
     * @var [type]
     */
    protected $product;

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
    public function __construct(Product $product, UploadedFile $file, Thumbnail $thumbnail=null)
    {

        $this->product = $product;
        $this->file = $file;
        $this->thumbnail = $thumbnail ?: new Thumbnail;

    }

    /**
     * Save & persists a photo uploaded to a service
     * @return
     */
    public function save()
    {

          $image = $this->product->addImage($this->makeimage()); // add image 

          $this->file->storeAs($this->product->id . '/', $image->name, 'dropbox'); // move to directory 

          $client = new DropboxClient(config('filesystems.disks.dropbox.token'));
          
          $imageData = $client->getMetadata($this->product->id . '/' . $image->name); 
          
          $image->update(['dropbox_id' => $imageData['id']]);          

        //   $this->thumbnail->make($image->path, $image->thumbnail_path); // make thumbnail

    }


    /**
     * Generate a name for the uploaded photo
     * @return [type] [description]
     */
    protected function makeImage()
    {

          return new Image(['name' =>$this->makeFileName()]); //make a name 

    }

    /**
     * Construct a new name for the uploaded photo based on the original name of the photo the user has uploaded
     * @return [type] [description]
     */
    protected function makeFileName()
    {

          $name = time() . '_' . $this->file->getClientOriginalname();

          return "{$name}";

    }

}
