@extends('layout.template')

@section('content')

<section class="container-fluid">

    {{-- @dd($product); --}}

      <form class="form" method="POST" action="{{ url('backoffice/catalog/'. $product->id) }}" >
        @method('PATCH')
        @csrf
        
        @if (session('success'))
        <div class="alert alert-success">
            <p>{{ session('success') }}</p>
        </div>
        @endif

        <h1>Espace Administrateur</h1>
        <h3> - Modifier un produit - </h3>

        <div class="row">
            <div class="col-6 form-group mb-3">
                <label for="name">Nom du produit </label>
                <input value="{{$product->name}}" type="text" class="form-control" id="nom" name="name">
            </div>
    
            <div class="col 6 form-group mb-3">
                <label for="category">Catégorie du produit</label>
                  <input class="form-control" value="{{$product->category_id}}" name="category" id="category">
            </div>
    
            <div class="col-6 form-group mb-3">
                <label for="price">Prix (€)</label>
                <input value="{{$product->price}}" type="number" class="form-control" id="price" name="price">
            </div>
            <div class="col-6 form-group mb-3">
              <label for="discount">Réduction </label>
              <input value="{{$product->discount}}" type="number" class="form-control" id="discount" name="discount">
          </div>
          <div class="col-6 form-group mb-3">
              <label for="quantity">Stock</label>
              <input value="{{$product->quantity}}" type="number" class="form-control" id="quantity" name="quantity">
          </div>
          <div class="col-6 form-group mb-3">
              <label for="available">Disponibilité</label>
              <input value="{{$product->available}}" type="number" class="form-control" id="available" name="available">
          </div>
    
            <div class="col-6 form-group mb-3">
                <label for="description">Description</label>
                <input value="{{$product->description}}" type="text" class="form-control" id="description" name="description">
            </div>
          </div>
            <button type="submit" class="btn btn-primary">Enregister</button>
    
        </form>
      
      </section>
    @endsection
   

   