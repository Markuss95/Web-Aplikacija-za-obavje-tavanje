<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        // $auth_userId = auth()->user()->id;
        // $upcommingevents =[];
        // $events = \App\event_user::where('user_id',$auth_userId)->get();
        // foreach($events as $x){
        //  $event_id = $x->event_id;
        // array_push($upcommingevents,\App\Event::where('id',$event_id)->first());
         
        // }
        
      
        // // dd(\App\Event::where('id');
        // return view('home',compact('upcommingevents'));
        return view('home');
    }
}
