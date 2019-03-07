<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request\file;
use App\Project;

class PageController extends Controller
{
   	
   	public function index()
   	{
   		$projects = Project::all();
   		return view('pages.articles', compact('projects'));
   	}

   	public function store(Request $request)
   	{
   		//dd( $request->all() );
   		$file = $request->file('media');
   		$filename = $file->getClientOriginalName();
   		//dd($file);
   		$path = public_path().'/img/image'.$filename;
   		dd($path);
   	}
}
