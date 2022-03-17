@extends('layout.template')

@section('title', "Espace Admin - Back Office")


@section('content')

<div class="back container-fluid">
    
    <h1>Espace Administrateur - Liste des commandes</h1>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-hover">
        <tr class="table-dark">
            
            
            <th>Numéro de commande</th>
            <th>Date</th>
            <th>Client</th>
            <th>Actions</th>
            
        </tr>
       
        @foreach ($orders as $order) 
        <tr>
           
            <td>{{$order->number}}</td>
            <td>{{$order->date}}</td>
            <td>{{$order->customer->last_name . " ". $order->customer->first_name}}</td>
        
        <td>
            <form action="{{ url('backoffice/orders'. $order->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a class="btn btn-warning" href="{{ url('backoffice/orders/show/' .$order->id)}}">Voir</a>
                <a class="btn btn-primary" href="{{ url('backoffice/orders.edit/'. $order->id )}}">Modifier</a>
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </td>
        </tr>
        @endforeach

    </table>
    
@endsection