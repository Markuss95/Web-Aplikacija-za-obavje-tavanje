@component('mail::message')


<h1 >{{$auth_user->name}} {{$auth_user->surname}} je upravo otkazao događaj</h1>

@component('mail::button', ['url' => 'http://diplomskirad.test/upcomming/events'])
Poveznica
@endcomponent

Hvala što koristite našu uslugu,<br>
Osobni Asistent
@endcomponent
