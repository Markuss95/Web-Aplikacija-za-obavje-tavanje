@extends('layouts.app')

@section('content')

<div class="container ">

<form action="newevent/create" enctype = "multipart/form-data" method="post">
@csrf
<div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Ime prijatelja</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">Prezime prijatelja</label>

                            <div class="col-md-4">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}"  autocomplete="surname" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Opis događaja</label>

                            <div class="col-md-4">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}"  autocomplete="description" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">Datum</label>

                            <div class="col-md-4">
                                <input id="date" type="date"  class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('name') }}"  autocomplete="date" autofocus>

                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="time" class="col-md-4 col-form-label text-md-right">Vrijeme</label>

                            <div class="col-md-4">
                                <input id="time" type="time" class="form-control @error('time') is-invalid @enderror" name="time" value="{{ old('time') }}"  autocomplete="time" autofocus>

                                @error('time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="row pt-5 pl-5"><button class="btn btn-primary">Stvori novi događaj!</button></div>
                            </div>
                          
                        </div>
                        
                        

                        </form>

</div>



@endsection