<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Mail\ContactSalesTeam;
use App\Mail\RequestQuote;

class ContactController extends Controller 
{
    
    /**
     *  Send Contact Message to Marquees
     * 
     */
    public function send(Request $request)
    {
        $this->validate($request, [ 
            'full_name' => 'required', 
            'email' => 'required|email',
            'msg' => 'required' 
        ]);

        Mail::to(config('mail.from.address'))
            ->send(new ContactSalesTeam($request->full_name, $request->email, $request->msg));
     
        return redirect()->route('contact.confirmation');        
    }



    /** 
     *  
     *  Return a confirmation for customer contact
     * 
     */
    public function contactConfirm()
    {

        return view('contact-confirmation');

    }




    /** 
     *  Send request for service
     * 
     */
    public function quotation(Request $request)
    {

        $this->validate($request, [ 
            'full_name' => 'required', 
            'email' => 'required|email',
            'phone_number' => 'required',
            'best_time' => 'required',
            'event_date' => 'required',  
            'guests_no' => 'required',                                                
            'event_location' => 'required' 
        ]);

        Mail::to(config('mail.from.address'))->send(new RequestQuote($request->full_name, $request->email, $request->phone_number, $request->best_time, $request->event_date, $request->guests_no,$request->event_location));
     
        return redirect()->route('quote-confirmation')->withInput($request->only('best_time'));        

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
