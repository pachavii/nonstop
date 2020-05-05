<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class storeanalyseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $order1=DB::table('subbookorders')
            ->join('subagents', 'subbookorders.subagent_id', '=', 'subagents.id')
            ->join('subbookorder_details', 'subbookorder_details.subbookorder_id', '=', 'subbookorders.id')
            ->join('books', 'subbookorder_details.book_id', '=', 'books.id')
            ->select('books.price','subbookorder_details.quantity')
            ->where('subbookorders.subagent_id',1)
            ->get();

        $order2=DB::table('subbookorders')
            ->join('subagents', 'subbookorders.subagent_id', '=', 'subagents.id')
            ->join('subbookorder_details', 'subbookorder_details.subbookorder_id', '=', 'subbookorders.id')
            ->join('books', 'subbookorder_details.book_id', '=', 'books.id')
            ->select('books.price','subbookorder_details.quantity')
            ->where('subbookorders.subagent_id',2)
            ->get();

        $order3=DB::table('subbookorders')
            ->join('subagents', 'subbookorders.subagent_id', '=', 'subagents.id')
            ->join('subbookorder_details', 'subbookorder_details.subbookorder_id', '=', 'subbookorders.id')
            ->join('books', 'subbookorder_details.book_id', '=', 'books.id')
            ->select('books.price','subbookorder_details.quantity')
            ->where('subbookorders.subagent_id',3)
            ->get();

        $order4=DB::table('subbookorders')
            ->join('subagents', 'subbookorders.subagent_id', '=', 'subagents.id')
            ->join('subbookorder_details', 'subbookorder_details.subbookorder_id', '=', 'subbookorders.id')
            ->join('books', 'subbookorder_details.book_id', '=', 'books.id')
            ->select('books.price','subbookorder_details.quantity')
            ->where('subbookorders.subagent_id',4)
            ->get();

        $order5=DB::table('subbookorders')
            ->join('subagents', 'subbookorders.subagent_id', '=', 'subagents.id')
            ->join('subbookorder_details', 'subbookorder_details.subbookorder_id', '=', 'subbookorders.id')
            ->join('books', 'subbookorder_details.book_id', '=', 'books.id')
            ->select('books.price','subbookorder_details.quantity')
            ->where('subbookorders.subagent_id',5)
            ->get();
            
        if(auth()->user()->hasRole("bookstore")){
            return view('storeanalyse',compact('order1','order2','order3','order4','order5'));
        }else{
            return view('home');
        }
        
            
    }

    // public function data1()
    // {

    // }

}
