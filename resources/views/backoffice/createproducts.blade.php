@extends('layout.template')

@section('content')


     {{-- @dd($data); --}}
    <section class="container-fluid">
      <form class="form" action="{{ route('back.store') }}" method="post">

        <h1>Espace Administrateur</h1>
        <h3> - Créer un nouveau produit - </h3>
        @csrf
  <div class="row">
          <div class="col-6 form-group mb-3">
              <label for="name">Nom du produit </label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="nom" placeholder="Entrez le nom du produit" name="name">
              @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
  
          <div class="col 6 form-group mb-3">
              <label for="category">Catégorie du produit</label>
                <select class="form-control" name="category" id="category"placeholder="Entrez la catégorie du produit">
                @foreach($data as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach
              </select>
          </div>
  
          <div class="col-6 form-group mb-3">
              <label for="price">Prix (€)</label>
              <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Entrez le prix du produit" name="price">
              @error('price')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-6 form-group mb-3">
            <label for="discount">Réduction </label>
            <input type="number" class="form-control" id="discount" placeholder="Entrez la réduction en %" name="discount">
        </div>
        <div class="col-6 form-group mb-3">
            <label for="quantity">Stock</label>
            <input type="number" class="form-control" id="quantity" placeholder="Entrez stock du produit" name="quantity">
        </div>
        <div class="col-6 form-group mb-3">
            <label for="available">Disponibilité</label>
            <input type="number" class="form-control" id="available" placeholder="Entrez disponibilité du produit" name="available">
        </div>
  
          <div class="col-6 form-group mb-3">
              <label for="description">Description</label>
              <textarea class="form-control" id="description" name="description" rows="5" cols="5" placeholder="Entrez la description du produit"></textarea>
          </div>
        </div>
          <button type="submit" class="btn btn-primary">Créer nouveau produit</button>
  
      </form>
    
    </section>
  @endsection
   

   