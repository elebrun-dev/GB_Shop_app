@extends('layout.template')

@section('title', "Fiche produit")

@section('content')

<section class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="a text-center text-white">
            <h1 class="title display-4 fw-bolder">FICHE PRODUIT</h1>
        </div>
    </div>
</section>

 <section id="catalog" class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
         <div class="card h-100 border border-dark">

        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">{{$products->discount}}% </div>

         <img class="card-img-top" src="{{$products->image}}" alt="Image Produit" width=50%/>

         <div class="card-body p-4">
            <div class="text-center">
            <h5 class="fw-bolder"> {{$products->name}}</h5>
            <p class="fw-bolder">Catégorie : {{$products->category->name}}</p>
            <br>
            <span class="text-decoration-line-through">{{$products->price}} TTC </span>
            <span class="fw-bold" style="color:red">{{$products->price - ($products->price * $products->discount)/100 }} TTC </span>
            <p>{{$products->description}} </p>
            </div>
        </div>

        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center">
            <form action="{{url('/cart/add/'.$products->id )}}" method="post">
                @csrf
                <input type="hidden" value="{{$products->id}}" name="id" id="id">
                <label for="quantity">Quantité</label>
                <input  type="number" value="0" placeholder="Quantité?" name="quantity" id="quantity" style="width:40px;margin-bottom:10px">
                <button type="submit" class="btn btn-primary mt-auto" style="color:white;border-radius:5px">Ajouter au panier</button>
                <br>
            </form>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection