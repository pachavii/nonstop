<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\member;
use DB;

class memberController extends Controller
{
    public function index()
    {
        $members=member::all();
        return response()->json($members);
    }

    public function create()
    {
        
    }

    public function store()
    {
        $data = request()->validate([
            'init_name' =>  'required',
            'name' =>  'required',
            'address' =>  'required',
            'phone' =>  'required',
            'order_of_delivery' =>  'required',

        ]);

        $member = new member();
        $member->init_name = request('init_name');
        $member->name = request('name');
        $member->address = request('address');
        $member->phone = request('phone');
        $member->order_of_delivery = request('order_of_delivery');
        $member->save();
        
        return response()->json($member);
    }

    public function show($id)
    {
        $members=member::find($id);
        return response()->json($members);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $members=member::find($id);
        $members->init_name=$request->get('init_name');
        $members->name=$request->get('name');
        $members->address=$request->get('address');
        $members->phone=$request->get('phone');
        $members->oeder_of_delivery=$request->get('order_of_delivery');
        $members->update();
        return response()->json($members);
    }

    public function destroy($id)
    {
        $member=member::find($id);
        $member->delete();
        return response()->json($member);
    }

    public function memberbooklist($id)
    {
        $lists=DB::table('recievelists')
            ->join('recievelist_details', 'recievelists.id', '=', 'recievelist_details.recievelist_id')
            ->join('books', 'books.id', '=', 'recievelist_details.book_id')
            ->select('books.init_name', 'books.name', 'books.price', 'recievelist_details.quantity')
            ->where('recievelists.member_id',$id)
            ->get();
        return response()->json($lists);
    }
}
