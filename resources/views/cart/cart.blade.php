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
      
         {{-- @dd($cart) --}}
            {{-- @foreach ($cart as $product) --}}
          
            <tr>
                <td>{{ $cart['id'] }}</td>
                <td><strong><a href="{{ route('item', $cart['id']) }}" title="Afficher le produit" >{{ $cart['name'] }}</a></strong></td>
                <td><img src="" class="img-thumbnail" width="100" alt="Image Produit"></td>
                <td style="text">{{$cart['price']}} €</td>
                <td style="text-decoration:line-through">{{$cart['price']}} €</td>
                <td>
                <form method="POST" action="{{ route('cart.add', $cart['id']) }}" class="form-inline d-inline-block" >
                    @csrf
                    <input type="number" name="quantity" placeholder="Quantité ?" value="{{ $cart['quantity'] }}" class="form-inline d-inline-block form-control mr-2" style="width: 80px" >
                    <input type="submit" class="btn btn-primary" value="Actualiser" class="form-inline d-inline-block"  />
                </form>
                </td>
                <td>{{$cart['price'] * $cart['quantity']  }} €</td>
                <td>
                <form action="{{ route('cart.remove', $cart['id']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
                </td>
            </tr>
            {{-- @endforeach --}}
            <tr colspan="2" >
                <td colspan="6" >Total général</td>
                <td colspan="3">
                <strong>{{ $cart['price'] * $cart['quantity']  }} €</strong>
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