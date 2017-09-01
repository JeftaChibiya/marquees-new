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
     * [register description]
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