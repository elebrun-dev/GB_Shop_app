@extends('layout.template')

@section('title', "Espace Admin - Back Office")


@section('content')

<div class="back container-fluid">
    
    <h1>Espace Administrateur - Liste des produits</h1>

    {{-- @dd($products);  --}}

    <a class="btn btn-success" href="{{ url('backoffice/catalog/create') }}">Ajouter un produit au catalogue</a>
    <br><br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Réf</th>
            <th>Nom</th>
            <th>Catégorie</th>
            <th>Prix</th>
            <th>Actions</th>
        </tr>
       
        @foreach ($products as $product) 
        <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->category->name}}</td>
        <td>{{$product->price}}</td>
        <td>
            <form action="{{ url('backoffice/catalog/'. $product->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a class="btn btn-info" href="{{ url('backoffice/catalog/'. $product->id .'/show') }}">Voir</a>
                <a class="btn btn-primary" href="{{ url('backoffice/catalog/'. $product->id .'/edit') }}">Modifier</a>
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </td>
        </tr>
        @endforeach

    </table>
    
@endsection