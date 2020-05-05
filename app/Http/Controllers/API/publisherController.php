<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\publisher;

class publisherController extends Controller
{
    public function index()
    {       
        $publishers=publisher::with('book')->get();
        return response()->json($publishers);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'init_name' =>  'required',
            'name' =>  'required',
            'address' =>  'required',
            'phone' =>  'required',
            'credit' =>  'required',
            'payment' =>  'required',

        ]);

        $publisher = new publisher();
        $publisher->init_name = request('init_name');
        $publisher->name = request('address');
        $publisher->address = request('price');
        $publisher->phone = request('phone');
        $publisher->credit = request('credit');
        $publisher->payment = request('payment');
        $publisher->save();

        return response()->json($publisher);
    }

    public function show($id)
    {
        $publisher=publisher::find($id);
        return response()->json($publisher);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $publisher=publisher::find($id);
        $publisher->init_name=$request->get('init_name');
        $publisher->name=$request->get('name');
        $publisher->address=$request->get('address');
        $publisher->phone=$request->get('phone');
        $publisher->credit=$request->get('credit');
        $publisher->payment=$request->get('payment');
        $publisher->update();
        return response()->json($publisher);
    }

    public function destroy($id)
    {
        $publisher=publisher::find($id);
        $publisher->delete();
        return response()->json($publisher);
    }
}
