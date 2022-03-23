@extends('layout.template')

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

    {{-- <label for="category">Trier par catégorie:</label>
        <select name="category" id="category"  onchange="window.location.href = this.value">
            
                <option value="{{route('category')}}" @unless($cat) selected @endunless>Toutes catégories </option>
               @foreach($category as $cat)
               <option value="{{route('category')}}">{{ $cat->name }}</option>
        @endforeach
            </select>
    <input type="submit" value="Valider"> --}}


<section id="catalog" class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

@foreach ($products as $product) 

{{-- @dd($products) --}}
      
        <div class="col mb-5">
        <div class="card h-100 border border-dark">

        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">{{$product->discount}}% </div>

         <img class="card-img-top" src="{{$product->image}}" alt="Image Produit"/>

         <div class="card-body p-4">
            <div class="text-center">
            <h5 class="fw-bolder"> {{$product->name}}</h5>
            <p class="fw-bolder">Catégorie : {{$product->category->name}}</p>
            <span class="text-muted"> {{number_format($product->price/1.2,2,',')}} HT </span>
            <br>
            <span class="text-decoration-line-through">{{$product->price}} TTC </span>
            <span class="fw-bold" style="color:red">{{$product->price - ($product->price * $product->discount)/100 }} TTC </span>
            </div>
        </div>

         <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center">
            <a class="btn btn-primary mt-auto" href={{route('item',$product->id)}} >Acheter</a>
            </div>
        </div>
    </div>
</div>
        @endforeach
    </div>
    </div>
    </section>
@endsection