<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home(){
		return view('_home');
	}
 
	public function tentang(){
		return view('tentang');
	}
}
