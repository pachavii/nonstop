<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\member;

class memberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        if(auth()->user()->hasRole("bookstore")){
            return view('members');
        }else{
            return view('home');
        }
    }
    
    public function create()
    {
        if(auth()->user()->hasRole("bookstore")){
            return view('createmember');
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
        $member=member::find($id);
        if(auth()->user()->hasRole("bookstore")){
            return view('editmember',compact('id'));
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
