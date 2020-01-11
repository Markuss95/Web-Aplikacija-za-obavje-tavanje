@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-4">
        <img src="/storage/{{$profile->image}}" class="rounded-circle p-4" height="270px" alt="">
       
        @if($user->id == Auth::user()->id)
        
        <a href="{{ route('edit') }}">Uredi profil</a>
        @endif
        </div>
        
        <div class="col-8">
        <div class="d-inline-flex"><h1 class="pt-5 pl-5 pr-3 ">{{$user->name}}</h1><h1 class="pt-5 pl-1 pr-3 pb-3">{{$user->surname}}</h1>
        
        @if($user->id != Auth::user()->id)
            @if($follows != true)

            <div class="pt-5 pl-4">
            <a href="{{route('friend',$user->id)}}">
            <button class="btn btn-primary">Dodaj prijatelja</button>
            </a>
            </div>
            @else
            <div class="pt-5 pl-4">
            <a href="{{route('friend',$user->id)}}">
            <button class="btn btn-danger">Obriši prijatelja</button>
            </a>
            </div>
            @endif
        @endif
        </div>
        <div class="pl-5 pt-3 pb-3"><strong><h5>{{$profile->user->email}}</h5><strong></div>
        <div class="pl-5"><strong><h5>{{$profile->description}}</h5><strong></div>
        </div>

    </div>

</div>
@endsection