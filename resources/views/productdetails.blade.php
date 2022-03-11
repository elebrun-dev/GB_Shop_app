@extends('template')

@section('title', "Fiche produit")

@section('content')

<section class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="a text-center text-white">
            <h1 class="title display-4 fw-bolder">FICHE PRODUIT</h1>
        </div>
    </div>
</section>

 {{-- @dd($products);  --}}
 <section id="catalog" class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
         <div class="card h-100 border border-dark">

        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">{{$products[0]->discount}}% </div>

         <img class="card-img-top" src={{$products[0]->image}} alt="Image Produit" width=50%/>

         <div class="card-body p-4">
            <div class="text-center">
            <h5 class="fw-bolder"> {{$products[0]->name}}</h5>
            <p class="fw-bolder">Catégorie : {{$products[0]->cat_name}}</p>
            <br>
            <span class="fw-bold" style="color:red">{{$products[0]->price}} TTC </span>
            <p>{{$products[0]->description}} </p>
            </div>
        </div>
        </div>
    </div>
</div>


@endsection