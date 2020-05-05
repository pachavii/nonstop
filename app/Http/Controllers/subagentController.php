<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subagent;

class subagentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(auth()->user()->hasRole("bookstore")){
            return view('subagents');
        }else{
            return view('home');
        }
    }

    public function create()
    {
        //
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
        $subagent=subagent::find($id);
        if(auth()->user()->hasRole("bookstore")){
            return view('editsubagent',compact('id'));
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

    public function returnlist()
    {
        if(auth()->user()->hasRole("bookstore")){
            return view('returnlist');
        }else{
            return view('home');
        }
    }

}
