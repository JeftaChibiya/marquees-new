<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Mail\ContactSalesTeam;


class ContactController extends Controller 
{
    
    /**
     *  Send Contact Message to Marquees
     * 
     */
    public function send(Request $request)
    {
        $this->validate($request, [ 
            'title' => 'required', 
            'full_name' => 'required', 
            'email' => 'required|email',
            'msg' => 'required' 
        ]);

        Mail::to(config('mail.from.address'))
            ->send(new ContactSalesTeam($request->title, $request->full_name, $request->email, $request->msg));
     
        return redirect()->route('contact.create');        
    }
    

    /** 
     * ...
     */
    public function OldSolution()
    {

        Mail::send(markdown('email.sales-contact'), [
            'msg' => $request->input('msg')
        ], function($mail) use($request) {
            $mail->from($request->input('email'), $request->input('full_name'));
            
            $mail->to('sales.itm-marquees@gmail.com')->subject('Contact Message');
        });

    }
}
