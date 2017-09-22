<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //
    public function index(){
        //$assignedassets = DB::table('assets')->get();
       if (Auth::check()){
        $assignedassets= DB::select( DB::raw("select assets.id, assets.url, assets.name, assignedassets.completed from assignedassets inner join assets on assignedassets.asset_id = assets.id where assignedassets.user_id=".Auth::user()->id));
       }
        return view('welcome', compact('assignedassets'));
    }
    
    
            
}
