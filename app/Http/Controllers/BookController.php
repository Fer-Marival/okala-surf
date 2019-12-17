<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\BookForm;
use App\Mail\Reservation;
use Illuminate\Support\Facades\Mail;
//use Mail;


class BookController extends Controller
{
    public function booknow()
    {
    	return view('pages.booking');
    }

    public function booknowPost(Request $request)
    {
	//dd($request->all());
    	$this->validate($request,[
    		'name' => 'required',
    		'lastname' => 'required',
    		'email' => 'required|email',
    		'cellphone' => 'required',
    		'country' => 'required',
    		'city' => 'required',
    		'state' => 'required',
    		'pk_adress' => 'required'
    	]);
		BookForm::create($request->all());
		
		Mail::to($request->email)->send(new Reservation($request));

		
		// function($message)
        // {
        // 	$message->from('web@okalasurfschool.com');
        // 	$message->to('okalasurfschool@gmail.com.com', 'Admin')->subject('new booking');
        // });
        return back()->with('success', 'Thanks for contact');
    }
}
