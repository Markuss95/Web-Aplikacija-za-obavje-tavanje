@extends('layouts.app')

@section('content')


    <div class = "container bg-secondary">
        
            <div class = "row">
                <div class ="text-center col-12 pr-5 pb-5 pt-3">
                <h1>Nadzorna ploča</h1>
                </div>
            
            </div>
            <div class = "row">
                <div class ="text-center col-12 pr-5 pb-3 pt-4">
                <!-- <h1>Search Contacts</h1> -->
            </div> 
            </div>
             <div class = "row">
                <div class ="text-center col-12 pt-5 pr-4 pb-3">
                <a href="{{ route('addcontact') }}">
                <img src="/svg/Plus.svg" height="70"></a> Dodaj prijatelja
                
                </div>
             </div>




           <hr>

         <div class = "row">
                <div class ="text-center col-12 pt-5 pl-5 pb-3">
                <a href="{{ route('incevent') }}">
                <img src="/svg/Notification.svg" height="70"></a> Nadolazeći događaji
                
                </div>
             </div>

             <div class = "row">
                <div class ="text-center col-12 pt-3 pl-5">
                
                </div>
             </div>
             <hr>

         <div class = "row pb-5">
                <div class ="text-center col-12 pt-5 pl-2">
                <a href="{{ route('event') }}">
                <img src="/svg/NewEvent.svg" height="70"></a> Stvori  događaj
                </div>
             </div>
             <hr>
             <div class = "row pb-3">
                <div class ="text-center col-12 pt-3 pl-3 pt-5">
                <!-- {{$id = Auth::user()->id}}; -->
                
                <a href="{{ route('profile', Auth::user()->id) }}">
                <img src="/svg/Profile.svg" height="80"></a> Stranica profila
                </div>
             </div>

    </div>


@endsection