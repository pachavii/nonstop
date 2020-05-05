<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;

class bookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        if(auth()->user()->hasRole("bookstore")){
            return view('books');
        }else{
            return view('home');
        }
    }
    
    public function create()
    {
        if(auth()->user()->hasRole("bookstore")){
            return view('createbook');
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
        $book=Book::find($id);
        if(auth()->user()->hasRole("bookstore")){
            return view('editbook',compact('id'));
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
