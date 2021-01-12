<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index(){

    	return view('hello') ;
    }

    public function about(){

    	return view('about');
    }

    public function hairstyles(){

    	return view('hairstyles');
    }

    public function news(){
        
        return view('news');
    }

    public function contact(){

    	return view('contact');
    }
}
