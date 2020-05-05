<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\publisher;

class publisherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(auth()->user()->hasRole("bookstore")){
            return view('publishers');
        }else{
            return view('home');
        }
    }

    public function create()
    {
        if(auth()->user()->hasRole("bookstore")){
            return view('createpublisher');
        }else{
            return view('home');
        }
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $publisher=publisher::find($id);
        if(auth()->user()->hasRole("bookstore")){
            return view('editpublisher',compact('id'));
        }else{
            return view('home');
        }
        
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
