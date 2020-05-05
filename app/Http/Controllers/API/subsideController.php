<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\subbookorder;
use App\subbookorderDetail;
use DB;


class subsideController extends Controller
{
    public function orderlist($id)
    {
        $lists = DB::table('subbookorders')
        ->join('subagents','subbookorders.subagent_id','=','subagents.id')
        ->join('subbookorder_details', 'subbookorders.id', '=', 'subbookorder_details.subbookorder_id')
        ->join('books','books.id','=','subbookorder_details.book_id')
        ->select('books.name','books.price','subbookorder_details.quantity')
        ->where('subbookorders.subagent_id',$id)
        ->get();

        return response()->json($lists);
    }

    // public function showreturnlist()
    // {
        // $books=DB::table('subbookorders')
        // ->join('subagents','subbookorders.subagent_id','=','subagents.id')
        // ->join('subbookorder_details', 'subbookorders.id', '=', 'subbookorder_details.subbookorder_id')
        // ->join('books','books.id','=','subbookorder_details.book_id')
        // ->select('books.name')
        // ->where('subbookorders.subagent_id','1')
        // ->get();
        // dd($u);
        // return response()->json($books);
    // }


    //     $book = new book();
    //     $book->init_name = request('init_name');
    //     $book->name = request('name');
    //     $book->price = request('price');
    //     $book->quantity = request('quantity');
    //     $book->booktype_id = request('booktype_id');
    //     $book->publisher_id = request('publisher_id');
    //     $book->recieve = request('recieve');
    //     $book->save();
        
        // return response()->json($book);

    // }
}
