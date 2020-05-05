<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         // auth()->user()->assignRole('subagent'); 


        if(auth()->user()->hasRole("admin")){
            $user=auth()->user();
            // $user->syncPermissions(['manageuser','addorder','editorder','deleteorder','readorder']);
            //$user->revokePermissionTo('deleteorder');
            //dd($user->hasPermissionTo('editorder'));
            return view('home');
        }else if(auth()->user()->hasRole("bookstore")){
            // $user=auth()->user();
            // $user->syncPermissions(['addorder','editorder','deleteorder','readorder']);
            return view('mainbookstore');
        }else{
            $user=auth()->user()->id;
            $subname=DB::table('subagents')
            ->select('name','id')
            ->where('users_id',$user)
            ->get();
            // $user->givePermissionTo('readorder');
            // dd($user);
            return view('mainsubagent',compact('subname'));
        }
        
    }
}
