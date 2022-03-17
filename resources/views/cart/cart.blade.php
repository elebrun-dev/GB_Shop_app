@extends('layout.template')

@section('title', "Panier Games Bond")

@section('content')

<section id="cart">

    {{-- @dd($cart['name']); --}}

<div class="container">

    <h1>Récapitulatif de votre panier</h1>
     
        <table class="table">

            <tr class="table-dark">
                <th scope="col">Référence</th>
                <th scope="col">Produit</th>
                <th scope="col">Prix unitaire</th>
                <th scope="col">Prix unitaire remisé</th>
                <th scope="col">Quantité</th>
                <th scope="col">Total</th>
            </tr>

            {{-- @foreach ($cart as $value)  --}}
              
            <tr>
                <td>{{ "Ref : " .$cart['id'] }}</td>
                <td>{{ $cart['name']}}</td>
                <td style="text">{{$cart['price']}}</td>
                <td style="text-decoration:line-through">{{$cart['price']}}</td>
                <td>{{$totalQuantity = $cart['quantity']}}</td>
                <td>{{$totalPrix = ($cart['price'] * $totalQuantity)}}</td>
            </tr>
         
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <th class="table-dark">Total HT</th>
                <td>{{$totalHT = $totalPrix / 1.2}}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <th class="table-dark">TVA 20%</th>
                <td>{{$TVA = $totalPrix - $totalHT}}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <th></th>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <th></th>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <th></th>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <th class=table-dark>Prix TTC</th>
                <td>{{$totalHT + $TVA}}</td>
            </tr>
        </table>
    </div>
{{-- @endforeach --}}
    </form>
    <br>
    <br>
    <form action="#" method="get" class="text-center">
        <button class="btn-warning" type="submit">Valider le panier</button>
    </form>

</section>
@endsection