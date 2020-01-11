@extends('layouts.app')

@section('content')
<div class="container d-flex  ">
<div class ="col-sm-9 pl-5">
<table class="table table-dark">
  <thead>
    <tr>
      
      <th scope="col">Opis</th>
      <th scope="col">Datum</th>
      <th scope="col">Vrijeme</th>
      <th scope="col" class="text-center">Otkaži</th>
     

    </tr>
  </thead>
  <tbody>
  @foreach($upcommingevents as $event)
    <tr>
     
      <td>{{$event->description}}</td>
      <td>{{date('d-m-Y', strtotime($event->date))}}</td>
      <td>{{$event->time}}</td>
      
      <td class="text-center"><a href="{{route('delete',$event->id)}}">X</a></td>
      
     
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<div class="col-sm-3">
<table class="table table-dark text-center">
  <thead>
    <tr>
  
      <th scope="col">Prijatelj</th>
      </tr>
  </thead>
  <tbody>
  @foreach($partners as $partner)
  <tr>
  
     <td><a href="{{route('profile',$partner->id)}}">{{$partner->name}}   {{$partner->surname}}</a></td>
     </tr>
   @endforeach
  </tbody>
</table>
</div>
</div>

@endsection