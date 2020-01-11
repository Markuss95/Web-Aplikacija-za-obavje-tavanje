@extends('layouts.app')

@section('content')
<div class="container">

@foreach($users as $user)


<div class="row">
<div class="col-4">
<img src="/storage/{{$user->profile->image}}" class="rounded-circle p-4" height="270px" alt="">
</div>
<div class="col-8">
        
        <div class="d-inline-flex"><h1 class="pt-5 pl-5 pr-3 ">{{$user->name}}</h1><h1 class="pt-5 pl-1 pr-3 pb-3">{{$user->surname}}</h1>
        
        </div>
        
        <div class="pl-5 pt-3 pb-3"><strong><h5>{{$user->profile->user->email}}</h5><strong></div>
        <div class="pl-5"><strong><h5>{{$user->profile->description}}</h5><strong></div>
        <a href="profile/{{$user->id}}" class= "text-right"><h5>Idi na profil</h5></a>
        </div>

</div>
<hr>


@endforeach



</div>
@endsection