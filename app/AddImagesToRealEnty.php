<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\Dropbox\Client as DropboxClient;
use Symfony\Component\HttpFoundation\File\UploadedFile;


// This is a service class: [Wed, 14 Feb 2017]
class AddImagesToRealEnty
{

    /**
     * Real Entity object
     * @var [type]
     */
    protected $realEntity;

    /**
     * File object
     * @var [type]
     */
    protected $file;


    /**
     * Required Objects to the methods in this class
     * @param Service      $service   [description]
     * @param UploadedFile $file      [description]
     * @param [type]       $thumbnail [description]
     */
    public function __construct(RealEntity $realEntity, UploadedFile $file)
    {

        $this->realEntity = $realEntity;
        $this->file = $file;

    }

    /**
     * Save & persists a photo uploaded to a service
     * @return
     */
    public function save()
    {
        $image = $this->realEntity->addImage($this->makeimage()); // add image 

        $this->file->storeAs($this->realEntity->slug . '/', $image->name, 'dropbox'); // move to directory 

        $client = new DropboxClient(config('filesystems.disks.dropbox.token'));
        
        $imageData = $client->getMetadata($this->realEntity->slug . '/' . $image->name); 
        
        $image->update(['dropbox_id' => $imageData['id']]);          

    }


    /**
     * Generate a name for the uploaded photo
     * @return [type] [description]
     */
    protected function makeImage()
    {

          return new Image(['name' => $this->makeFileName()]); // make a name

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
