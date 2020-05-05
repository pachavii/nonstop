<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subreturnlistDetail;
use App\subreturnlist;

class subsideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $lastid=subreturnlist::create($data)->id;
        if(count($request->item_name) > 0)
        {
            foreach($request->item_name as $item => $value) 
                $data2=array(
                    'subreturnlists_id' =>$lastid,
                    'item_name' => $request->item_name[$item],
                    'quantity' => $request->quantity[$item],
                    'price' => $request->price[$item],
                    'amount' => $request->amount[$item],
                );
            subreturnlistDetail::insert($data2);
        }
        return redirect()->back()->with('success','data insert successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
