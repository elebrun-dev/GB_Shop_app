@extends('layout.template')

@section('title', "Panier Games Bond")

@section('content')

<section id="cart">

<div class="container">

    @if (session()->has('message'))
	<div class="alert alert-info">{{ session('message') }}</div>
	@endif

	@if (session()->has("cart"))

    <h1>Récapitulatif de votre panier</h1>
     
        <table class="table">

            <tr class="table-dark">
                <th scope="col">Référence</th>
                <th scope="col">Produit</th>
                <th scope="col">Image</th>
                <th scope="col">Prix unitaire remisé</th>
                <th scope="col">Prix unitaire </th>
                <th scope="col">Quantité</th>
                <th scope="col">Total</th>
                <th scope="col"></th>
            </tr>
      
         
            @foreach (session("cart") as $key => $product)
          
            <tr>
                <td>{{ $product['id'] }}</td>
                <td><strong><a href="{{ route('item', $key) }}" title="Afficher le produit" >{{ $item->name }}</a></strong></td>
                <td><img src="{{ $item->image }}" class="img-thumbnail" width="100" alt="Image Produit"></td>
                <td style="text">{{$priceDiscounted}} €</td>
                <td style="text-decoration:line-through">{{$item->price}} €</td>
                <td>
                <form method="POST" action="{{ route('cart.add', $key) }}" class="form-inline d-inline-block" >
                    @csrf
                    <input type="number" name="quantity" placeholder="Quantité ?" value="{{ $product['quantity'] }}" class="form-inline d-inline-block form-control mr-2" style="width: 80px" >
                    <input type="submit" class="btn btn-primary" value="Actualiser" class="form-inline d-inline-block"  />
                </form>
                </td>
                <td>{{ $totalCart }} €</td>
                <td>
                <form action="{{ route('cart.remove', $key) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
                </td>
            </tr>
            @endforeach
            <tr colspan="2" >
                <td colspan="6" >Total général</td>
                <td colspan="3">
                <strong>{{ $totalCart }} €</strong>
                </td>
            </tr>
        </table>
<br>
<br>
    <form action="#" method="get" class="text-center">
        <a class="btn btn-danger" href="{{ route('cart.empty') }}" title="Retirer tous les produits du panier" >Vider le panier</a>
        <button class="btn btn-warning" type="submit">Valider le panier</button>
    </form>

@else
<div class="alert alert-info">Aucun produit au panier</div>
@endif
</div>
</section>
@endsection