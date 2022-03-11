@extends('template')

@section('title', "Catalogue Games Bond")

@section('content')

<section class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="a text-center text-white">
            <h1 class="title display-4 fw-bolder">CATALOGUE</h1>
            <p class="lead fw-normal mb-0">
                Ici, retrouvez toutes les dernières nouveautés et meilleures
                ventes.<br />1,2,3 clavier ou manette! Equipez-vous et devenez le
                roi de l’action.
            </p>
        </div>
    </div>
</section>


<section id="catalog" class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

@foreach ($products as $product) 
      
        <div class="col mb-5">
        <div class="card h-100 border border-dark">

        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">{{$product->discount}}% </div>

         <img class="card-img-top" src={{$product->image}} alt="Image Produit"/>

         <div class="card-body p-4">
            <div class="text-center">
            <h5 class="fw-bolder"> {{$product->name}}</h5>
            <p class="fw-bolder">Catégorie : {{$product->cat_name}}</p>
            <span class="text-muted"> {{$product->price}} HT </span>
            <br>
            <span class="text-decoration-line-through">{{$product->price}} TTC </span>
            <span class="fw-bold" style="color:red">{{$product->price}} TTC </span>
            </div>
        </div>

         <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center">
                <a class="btn btn-outline-dark mt-auto" href={{route('item',$product->id)}} >Plus d'infos</a>
            </div>
        </div>
        
         <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center">
            <form action="{{route('cart')}}" method="POST">
                <input type="hidden" value={{$product->id}} name="[{{$product->id}}][product_id]" id="product_id">
                <input type="hidden" value={{$product->name}} name="[{{$product->name}}][name]" id="name">
                <label for="quantity">Quantité</label>
                <input type="number" value="0" name="[{{$product->id}}][quantity]" id="quantity" style="width:40px;margin-bottom:10px">
                <button type="submit" class="btn btn-primary mt-auto" style="color:white;border-radius:5px">Ajouter au panier</button>
                <br>
            </form>
            </div>
        </div>
    </div>
</div>
        @endforeach
    
    </div>
    </div>
    </section>


@endsection