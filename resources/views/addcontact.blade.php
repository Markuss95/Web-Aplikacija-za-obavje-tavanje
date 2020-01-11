@extends('layouts.app')

@section('content')


<div class = "container d-flex pl-5 pt-3">
<h1 class="text-xs-center">Potražite osobu:</h1>
<form action="/search" enctype = "multipart/form-data" method="post">
@csrf
<div class="form-group row pt-2">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Ime') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row pt-2">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">Prezime</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}"  autocomplete="surname" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="row pt-5 pl-3"><button class="btn btn-primary">Pretraži bazu podataka!</button></div>
                            </div>
                            
                        </div>
                        </form>
<div>
@endsection