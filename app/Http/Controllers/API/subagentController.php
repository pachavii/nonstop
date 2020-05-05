<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\subagent;
use App\subreturnlist;
use DB;

class subagentController extends Controller
{
    public function index()
    {
        $subagents=subagent::all();
        return response()->json($subagents);
    }

    public function create()
    {
        
    }

    public function store()
    {
        //
    }

    public function show($id)
    {
        $subagents=subagent::find($id);
        return response()->json($subagents);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $subagents=subagent::find($id);
        $subagents->member_id=$request->get('member_id');
        $subagents->name=$request->get('name');
        $subagents->address=$request->get('address');
        $subagents->phone=$request->get('phone');
        $subagents->discount=$request->get('discount');
        $subagents->delivery_cost=$request->get('delivery_cost');
        $subagents->update();
        return response()->json($subagents);
    }

    public function destroy($id)
    {
        $subagent=subagent::find($id);
        $subagent->delete();
        return response()->json($subagent);
    }

    public function showReturnlist()
    {
        $lists=subreturnlist::with('subagent')->get();
        return response()->json($lists);
    }

    public function deleteReturnlist($id)
    {
        $lists=subreturnlist::find($id);
        $lists->delete();
        return response()->json($lists);
    }

    public function showReturnlistdata($id)
    {
        $lists=DB::table('subreturnlist_details')
        ->join('subreturnlists', 'subreturnlist_details.subreturnlists_id', '=', 'subreturnlists.id')
        ->select('subreturnlist_details.item_name','subreturnlist_details.quantity','subreturnlist_details.price','subreturnlist_details.amount','subreturnlists.total')
        ->where('subreturnlists.id',$id)
        ->get();
        return response()->json($lists);
    }
    
    public function subagentbooklist($id)
    {
        $lists=DB::table('recievelists')
            ->join('recievelist_details', 'recievelists.id', '=', 'recievelist_details.recievelist_id')
            ->join('books', 'books.id', '=', 'recievelist_details.book_id')
            ->select('books.init_name', 'books.name', 'books.price', 'recievelist_details.quantity')
            ->where('recievelists.subagent_id',$id)
            ->get();
        return response()->json($lists);
    }
    
    public function total1()
    {
        $total=DB::table('subbookorders')
            ->where('subagent_id','1')
            ->whereMonth('created_at', '4')
            ->sum('total');
        return response()->json($total);
    }

    public function total2()
    {
        $total=DB::table('subbookorders')
            ->where('subagent_id','2')
            ->whereMonth('created_at', '4')
            ->sum('total');
        return response()->json($total);
    }

    public function total3()
    {
        $total=DB::table('subbookorders')
            ->where('subagent_id','3')
            ->whereMonth('created_at', '4')
            ->sum('total');
        return response()->json($total);
    }

    public function total4()
    {
        $total=DB::table('subbookorders')
            ->where('subagent_id','4')
            ->whereMonth('created_at', '4')
            ->sum('total');
        return response()->json($total);
    }

    public function total5()
    {
        $total=DB::table('subbookorders')
            ->where('subagent_id','5')
            ->whereMonth('created_at', '4')
            ->sum('total');
        return response()->json($total);
    }
    
    public function return1()
    {
        $total=DB::table('subreturnlists')
            ->where('subagents_id','1')
            ->whereMonth('created_at', '4')
            ->sum('total');
        return response()->json($total);
    }
    public function return2()
    {
        $total=DB::table('subreturnlists')
            ->where('subagents_id','2')
            ->whereMonth('created_at', '4')
            ->sum('total');
        return response()->json($total);
    }
    public function return3()
    {
        $total=DB::table('subreturnlists')
            ->where('subagents_id','3')
            ->whereMonth('created_at', '4')
            ->sum('total');
        return response()->json($total);
    }
    public function return4()
    {
        $total=DB::table('subreturnlists')
            ->where('subagents_id','4')
            ->whereMonth('created_at', '4')
            ->sum('total');
        return response()->json($total);
    }
    public function return5()
    {
        $total=DB::table('subreturnlists')
            ->where('subagents_id','5')
            ->whereMonth('created_at', '4')
            ->sum('total');
        return response()->json($total);
    }
}
