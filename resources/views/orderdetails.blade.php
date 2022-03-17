@extends('layout.template')

@section('title', "Détail commande")

@section('content')

<section class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="a text-center text-white">
            <h1 class="title display-4 fw-bolder">Détails de la commande {{$orders['number']}}</h1>
        </div>
    </div>
</section>

 {{-- @dd($orders);  --}}


 <div class="form container">
     
        <table class="table">
            <tr class="table-dark">
                <th scope="col">Numéro de la commande</th>
                <th scope="col">Date</th>
                <th scope="col">Client</th>
            </tr>
            <tr>
                <td> {{$orders['number']}}</td>
                <td> {{$orders['date']}}</td>
                <td > {{$orders->customer->last_name ." ". $orders->customer->first_name}}</td>
            </tr>
</table>
<br><br>
<table class="table table-sm">
    <tr class="table-warning">
        <th scope="col">Produits</th>
        <th scope="col">Quantité</th>
        <th scope="col">Prix unitaire</th>
        <th scope="col">Total</th>
    </tr>
    @foreach ($orders->products as $product)
                <tr>
                <td >{{$product->name}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->quantity * $product->price}}</td>
                </tr>
                @endforeach
    </tr>
</table>
         
    
    </div>

@endsection