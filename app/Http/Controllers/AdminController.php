<?php

namespace App\Http\Controllers;

use Auth;
use App\RealEntity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{      
    
    /**
     * Auth before all else!
     * 
     */
    public function __construct()
    {

        $this->middleware('auth');
        // $this->middleware('password.reenter', ['only' =>['users']]);

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function catalog()
    {
        
        return view('admin.catalog');        

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function categories()
    {
        
        return view('admin.categories');          

    }


    /**
     * Manage Users
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function users()
    {
            
        return view('admin.users');    
   
    }    


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function assignRole(Request $request, $id)
    {
            
            return view('auth.password.assign-role');     
    }


    /** 
     *  Verify authenticated User password before action
     * 
     */
    public function verifyPassword(){
        
        return view('auth.passwords.verify-password');

    }


    /** 
     *  Verify authenticated User password before action
     * 
     */
    public function postPasswordVerification(Request $request){
        
        $hashedPassword = Auth::user()->password;
        
        // if passwords match
        if (Hash::check($request->input('rentered-password'), $hashedPassword)) {
                        
            return redirect('manage-users');

        }  

    }    


    /** 
     *  
     *  Return view for creating a real entity
     * 
     */
    public function createRealEntity()
    {
        
        return view('real-entity.create');

    }

}
