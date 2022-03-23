<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\CartInterfaceRepository;
use App\Models\product;
use Illuminate\Contracts\Session\Session;

class CartController extends Controller
{

    protected $cart;

    public function __construct (CartInterfaceRepository $cart) {
    	$this->cart = $cart;
    }


    public function show(Session $session)
    {
        $cart=session()->get('cart');
        
        foreach($cart as $value)
        { 
               
       
        // $total = 0;
        // $priceDiscounted = 0;
        // $priceDiscounted = $value['price']-($value['price']* ($value['discount']/100));
        // $total = $priceDiscounted * $value['quantity'];
        
        }
        return view('cart.cart', 
        [
        
            // 'priceDiscounted'=>$priceDiscounted,
            // 'totalCart'=>$total
        ]);
        }
    

    public function add (Product $product, Request $request) {
    	
    // Validation de la requête
    $this->validate($request, [
        "quantity" => "numeric|min:1"
    ]);

    // Ajout/Mise à jour du produit au panier avec sa quantité
    $this->cart->add($product, $request->quantity);

    // Redirection vers le panier avec un message
    return redirect()->route("cart.show")->withMessage("Produit ajouté au panier");
}

// Suppression d'un produit du panier
public function remove (Product $product) {

    // Suppression du produit du panier par son identifiant
    $this->cart->remove($product);

    // Redirection vers le panier
    return back()->withMessage("Produit retiré du panier");
}

// Vider la panier
public function empty () {

    // Suppression des informations du panier en session
    $this->cart->empty();

    // Redirection vers le panier
    return back()->withMessage("Panier vidé");

}


}