<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\BookForm;
use Mail;

class BookController extends Controller
{
    public function booknow()
    {
    	return view('pages.booking');
    }

    public function booknowPost(Request $request)
    {

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
        Mail::send('emails.email',
        array(
           	'name' => $request->get('name'),
    		'lastname' => $request->get('lastname'),
    		'email' => $request->get('email'),
    		'cellphone' => $request->get('cellphone'),
    		'country' => $request->get('country'),
    		'city' => $request->get('city'),
    		'state' => $request->get('state'),
    		'pk_adress' => $request->get('pk_adress')

        ), function($message)
        {
        	$message->from('web@okalasurfschool.com');
        	$message->to('okalasurfschool@gmail.com.com', 'Admin')->subject('new booking');
        });
        return back()->with('success', 'Thanks for contact');
    }
}
