@extends('layouts.app')

@section('content')
<div class="container ">
<h1 class="text-center pb-5">Uredite Vaš profil</h1>


<form action="/p" enctype = "multipart/form-data" method="post">
@csrf
<div class="form-group row offset-0 col-10 p-3 ">
                            
                          
                          
                            
                            <label for="description" class="col-md-4 col-form-label text-md-right">Opis</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? Auth::user()->profile->description }}"  autocomplete="description" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                               
                                <div class="d-flex pt-5 pl-2 ">
                                <label for="image" class="col-md-4 col-form-label text-md-right">Profilna slika</label>
                                <input type="file", class="form-control-file" id="image" name="image">
                                @error('image')
                                    
                                        <strong>{{ $message }}</strong>
                          
                                @enderror
                                </div>
                                <div class="row pt-5 pl-3"><button class="btn btn-primary">Spremi promjene</button></div>
                            </div>
                           
                        </div>
                        

 </form>
 </div>
@endsection