<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class storeanalyseController extends Controller
{
    public function index()
    {
    	$orderprice=DB::table('subbookorders')
            ->join('subagents', 'subbookorders.subagent_id', '=', 'subagents.id')
            ->join('subbookorder_details', 'subbookorder_details.subbookorder_id', '=', 'subbookorders.id')
            ->join('books', 'subbookorder_details.book_id', '=', 'books.id')
            ->select('books.price','subbookorder_details.quantity','subbookorders.subagent_id')
            ->get();
        // foreach($request->item_name as $item => $value) 
        //         $data2=array(
        //             'subreturnlists_id' =>$lastid,
        //             'item_name' => $request->item_name[$item],
        //             'quantity' => $request->quantity[$item],
        //             'price' => $request->price[$item],
        //             'amount' => $request->amount[$item],
        //         );
        // foreach ($orderprice as $key => $value) 
        //     # code...
        //     $price = ($value->price)*($value->quantity);
        
        return response()->json($orderprice);
    }
}
