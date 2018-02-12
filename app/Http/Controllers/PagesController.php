<?php

namespace App\Http\Controllers;

use App\User;
use App\Product;
use App\Category;
use App\Attribute;
use App\CategoriesCache;
use Illuminate\Http\Request;
use Spatie\Dropbox\Client as DropboxClient;


class PagesController extends Controller
{
    	
    /**
     * Homepage
     * @return [type] [description]
     */
    public function index(CategoriesCache $categoriesCache)
    {    	
        $categories = $categoriesCache->all();
        $client = new DropboxClient(config('filesystems.disks.dropbox.token'));         

    	return view('welcome', compact('client', 'categories'));

    }


    /**
     * Contact Marquees
     * @return [type] [description]
     */
    public function help()
    {
        
        return view('help');

    } 

    /**
     * [findUs description]
     * 
     * @return [type] [description]
     */
    public function findUs()
    {

        return view('find-us');

    }

    /**
     * Contact Marquees
     * @return [type] [description]
     */
    public function contact()
    {
    	
    	return view('contact');

    }  
    
    
    /**
     * Test Marquees
     * @return [type] [description]
     */
    public function test()
    {
        $categories = Category::all();
        $client = new DropboxClient(config('filesystems.disks.dropbox.token'));

    	return view('test', compact('categories', 'client'));

    }  

    // For creating permanent links to dropbox
    // https://blog.fortrabbit.com/new-app-cloud-storage-dropbox

}
