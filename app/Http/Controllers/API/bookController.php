<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\book;
use DB;

class bookController extends Controller
{
    public function index()
    {
        $books=book::with('booktype','publisher')->get();
        return response()->json($books);
    }

    public function create()
    {
        
    }

    public function store()
    {
        $data = request()->validate([
            'init_name' =>  'required',
            'name' =>  'required',
            'price' =>  'required',
            'booktype_id' =>  'required',
            'publisher_id' =>  'required',

        ]);

        $book = new book();
        $book->init_name = request('init_name');
        $book->name = request('name');
        $book->price = request('price');
        $book->booktype_id = request('booktype_id');
        $book->publisher_id = request('publisher_id');
        $book->save();
        
        return response()->json($book);

    }

    public function show($id)
    {
        $book=book::find($id);
        return response()->json($book);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $id, $request)
    {
        // $book = book::find($id);
        // $book->init_name => request('init_name');
        // $book->name => request('name');
        // $book->price => request('price');
        // $book->quantity => request('quantity');
        // $book->booktype_id => request('booktype_id');
        // $book->publisher_id => request('publisher_id');
        // $book->update();
        DB::table('books')
        ->where('id',$id)
        ->update([
            'init_name' => $request->init_name,
            'name' => $request->name,
            'price' => $request->price,
            'booktype_id' => $request->booktype_id,
            'publisher_id' => $request->publisher_id
        ]);
        return response()->json($book);
    }

    public function destroy($id)
    {
        $book=book::find($id);
        $book->delete();
        return response()->json($book);
    }

    public function publisherbooklist($id)
    {
        $publsherbooklists=book::where('publisher_id',$id)->get();
        return response()->json($publsherbooklists);
    }

    public function sub1orderlist($day)
    {
            $lists = DB::table('recievelists')
            ->join('subagents','recievelists.subagent_id','=','subagents.id')
            ->join('recievelist_details', 'recievelists.id', '=', 'recievelist_details.recievelist_id')
            ->join('books','books.id','=','recievelist_details.book_id')
            ->select('books.name','books.price','recievelist_details.quantity')
            ->where('recievelists.subagent_id','1')
            ->where('books.booktype_id','3')
            ->get();

        return response()->json($lists);
    }

    public function sub2orderlist($day)
    {
            $lists = DB::table('recievelists')
            ->join('subagents','recievelists.subagent_id','=','subagents.id')
            ->join('recievelist_details', 'recievelists.id', '=', 'recievelist_details.recievelist_id')
            ->join('books','books.id','=','recievelist_details.book_id')
            ->select('books.name','books.price','recievelist_details.quantity')
            ->where('recievelists.subagent_id','2')
            ->where('books.booktype_id','3')
            ->get();
        return response()->json($lists);
    }

    public function sub3orderlist($day)
    {
            $lists = DB::table('recievelists')
            ->join('subagents','recievelists.subagent_id','=','subagents.id')
            ->join('recievelist_details', 'recievelists.id', '=', 'recievelist_details.recievelist_id')
            ->join('books','books.id','=','recievelist_details.book_id')
            ->select('books.name','books.price','recievelist_details.quantity')
            ->where('recievelists.subagent_id','3')
            ->where('books.booktype_id','3')
            ->get();
        return response()->json($lists);
    }

    public function sub4orderlist($day)
    {
            $lists = DB::table('recievelists')
            ->join('subagents','recievelists.subagent_id','=','subagents.id')
            ->join('recievelist_details', 'recievelists.id', '=', 'recievelist_details.recievelist_id')
            ->join('books','books.id','=','recievelist_details.book_id')
            ->select('books.name','books.price','recievelist_details.quantity')
            ->where('recievelists.subagent_id','4')
            ->where('books.booktype_id','3')
            ->get();
        return response()->json($lists);
    }

    public function sub5orderlist($day)
    {
            $lists = DB::table('recievelists')
            ->join('subagents','recievelists.subagent_id','=','subagents.id')
            ->join('recievelist_details', 'recievelists.id', '=', 'recievelist_details.recievelist_id')
            ->join('books','books.id','=','recievelist_details.book_id')
            ->select('books.name','books.price','recievelist_details.quantity')
            ->where('recievelists.subagent_id','5')
            ->where('books.booktype_id','3')
            ->get();
        return response()->json($lists);
    }
}
