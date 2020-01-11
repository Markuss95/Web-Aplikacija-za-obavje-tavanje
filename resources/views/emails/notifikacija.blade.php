@component('mail::message')


<h1 class="text-center">Vaš prijatelj {{$auth_user->name}} {{$auth_user->surname}} Vas poziva na novi događaj</h1>

@component('mail::button', ['url' => 'http://diplomskirad.test/upcomming/events'])
Poveznica
@endcomponent

Hvala što koristite našu uslugu,<br>
Osobni Asistent
@endcomponent
