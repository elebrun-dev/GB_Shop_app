<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\product;
use App\Models\category;
use App\Models\Order;

class CartController extends Controller
{
//     public function displayCart(Request $request)
//     {
//         $data = [
            
//                 'id' => $request->get('id'),
//                 'name' => $request->get('name'),
//                 'quantity' => $request->get('quantity'),
//                 'price' => $request->get('price')
            
//             ];

//         return view('cart.cart', ['cart'=> $data]);

// }


public function create(Request $request)
{
    // $data = session()->get('cart');

    $product_details = [
        'id' => $request->get('id'),
        'name' => $request->get('name'),
        'quantity' => $request->get('quantity'),
        'price' => $request->get('price')
    ];
    
    // $cart[$request->get('id')] = $product_details; // On ajoute ou on met à jour le produit au panier
    // session()->put('cart', $cart); // On enregistre le panier



    return view('cart.cart', ['cart'=> $product_details]);
}


}