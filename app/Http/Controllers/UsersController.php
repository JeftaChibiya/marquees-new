<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    
    
    /**
     * [all description]
     * 
     * @return [type] [description]
     */
    public function all()
    {

    	return User::all();

    }


    /**
     * Create user record
     * 
     *
     */
    protected function create()
    {

    	return view('user.create');

    }     


    /**
     * Edit User record
     * 
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    protected function edit()
    {

        $user = User::find($id); 

    	return view('user.edit');

    }  
    
    
    /**
     * Update User record
     * 
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    protected function update()
    {

        $user = User::find($id); 

        $user->update($request->all());

    	return back();

    }    

    
    /**
     * register via Ajax 
     * 
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    protected function register(Request $request)
    {

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]); 

    	return response()->json(['success' => true, 'message' => 'User Created!']);

    }

}