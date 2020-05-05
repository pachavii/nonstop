<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class recievebookController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	if(auth()->user()->hasRole("bookstore")){
            return view('recievebook');
        }else{
            return view('home');
        }
    }

    public function payment()
    {
    	if(auth()->user()->hasRole("bookstore")){
            return view('payment');
        }else{
            return view('home');
        }
    }
}
