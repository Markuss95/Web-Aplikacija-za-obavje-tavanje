<?php

namespace App\Http\Controllers;
use App\User;
use App\Mail\Notifikacija;
use App\Mail\otkazivanje;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('event');
    }

    public function info()
    {
        $all_event_users = \App\event_user::all();
        
         $auth_userId = auth()->user()->id;
        $upcommingevents =[];
        
        $events = \App\event_user::where('user_id',$auth_userId)->get();
        
        // dd(\App\event_user::where([
        //     ['event_id',65],
        //     ['user_id','!=',$auth_userId],
        // ])->get());
        $friends = collect();
        $partners = collect();
        
        foreach($events as $event)
        {
        $id = $event->event_id;
       
            if( $y = \App\event_user::where([
                ['event_id',$id],
                ['user_id','!=',$auth_userId],
            ])->first() != null)
            {
                $y = \App\event_user::where([
                    ['event_id',$id],
                    ['user_id','!=',$auth_userId],
                ])->first();
        $friends->push($y);
            }

         
        }
       
        foreach($friends as $z)
        {
            if (\App\User::where('id',$z->user_id)->first())
            {
            $n  =\App\User::where('id',$z->user_id)->first();
            }
            $partners->push($n);
        }
       
        
        foreach($events as $x){
         $event_id = $x->event_id;
        array_push($upcommingevents,\App\Event::where('id',$event_id)->first());
         
        }

  
        
      
        return view('upcommingevents',compact(['upcommingevents','partners']));
    }

    public function create()
    {
        $data = request()->validate([
            'name'        => ['required','exists:users,name'],
            'surname'     => ['required','exists:users,surname'],
            'description' => 'required',
            'date'        => ['required','date'],
            'time'        => ['required'],
            
        ]);
        
        
        // $followed_profiles = auth()->user()->following()->get();
      

        $auth_user = auth()->user();
        
        $name = $data['name'];
        $surname = $data['surname'];
        $event = \App\Event::Create($data);
        $event->save();
        
        $users = User::where([
            ['name','=',$name],
            ['surname','=',$surname]
            ])->first();
           
        foreach($users->following as $user)
        {
            
            if($user->id == $auth_user->id)
            {
                
                $event_user = \App\event_user::create([
                    'user_id' => $users->id,
                     'event_id' => $event->id,
                ]);
                $event_user->save();

                $event_user = \App\event_user::create([
                    'user_id' => $auth_user->id,
                     'event_id' => $event->id,
                ]);
                $event_user->save();

                \Mail::to($users)->send(new Notifikacija($auth_user));
                return view('success');
            }
        }

        return view('fail');
        
    }

    public function remove(\App\Event $event)
    {
        $ids = [];
        $auth_user = auth()->user();
        $events = \App\event_user::where('event_id',$event->id)->get();
        foreach($events as $x)
        {
            array_push($ids,$x->user_id);
        }
        $usersParticipating = collect();

        foreach($ids as $y)
        {
            $usersParticipating->push(\App\User::where('id',$y)->first());
        }
       

        $eventUserDelete = \App\event_user::where('event_id',$event->id)->delete();
        
        // $users = \App\User::where('id')

        $eventToBeDeleted = $event;
        $eventToBeDeleted->delete();
        $eventToBeDeleted->save();

         \Mail::to($usersParticipating)->send(new otkazivanje($auth_user));
       return view('successfuldeletion');
    }
}
