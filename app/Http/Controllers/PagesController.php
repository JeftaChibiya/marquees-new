<?php

namespace App\Http\Controllers;

use App\User;
use App\Category;
use Illuminate\Http\Request;


class PagesController extends Controller
{
    	
    /**
     * Homepage
     * @return [type] [description]
     */
    public function index()
    {
    	
        // $category = new Category;
        // $category->name = 'Party';
        // $user->email = 'admin@marquees.com';        
        // $user->password = 'password';         
        // $category->save(); 

        $users = User::all();               
    	return view('welcome', compact('users'));

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


}
