<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

use \App\User;

class ProfileController extends Controller
{
    public function index(\App\User $user) 
    { 
       
        $userid=$user->id;
        
        
        $profile = \App\Profile::where('user_id',$userid)->first();
        
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;
        
        return view('profile',compact(['user','profile','follows']));
    }
    
    public function edit()
    {
       
        return view('editprofile');
    }

    public function search()
    {
        $name = request()->name;
        $surname = request()->surname;

        if($name != null){
        $users = User::where([
            ['name','=',$name],
            ['surname','=',$surname]
            ])->get();
        }

        if($name == null){
         $users = User::where([
            ['surname','=',$surname],
            ])->get();
        }

        if($surname == null){
            $users = User::where([
                ['name','=',$name],
                ])->get();
            }
        
       return view('searchedprofiles',compact(['users']));
    }

    public function store()
    {
        $data = request()->validate([
            'description' => 'required',
            'image' => ['required','image'],
        ]);

        $userid= auth()->user()->id;
        $imagePath = $data['image']->store('uploads','public');
        
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1400,1400);
        $image->save();
        
        $profile = \App\Profile::where('user_id',$userid)->first();
        $profile->description = $data['description'];
        $profile->image = $imagePath;
        $profile->save();

        return redirect('profile/'.auth()->user()->id);
      
     }
}
