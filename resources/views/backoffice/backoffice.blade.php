@extends('layout.template')

@section('title', "Espace Admin - Back Office")


@section('content')

<div class="back container-fluid">
    
    <h1>Espace Administrateur </h1>
    <br><br>
    <div class="row">
    <div class="col-6 text-center">
        <a href="{{route('backcatalog')}}"><img width="300" src="\images\catalog.jpg" class="img-thumbnail" alt=""></a>
    </div>
    <div class="col-6 text-center">
    <a href="{{route('backorders')}}"><img width="300" src="\images\orders.png" class="img-thumbnail" alt=""></a>
</div>
</div>
@endsection