<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\Customer;

class BackOfficeController extends Controller
{
    public function index()
    {
        return view('backoffice.backoffice');
    }
    
        public function catalog()
    {
        $data = Product::all();
        return view('backoffice.backofficeproducts',['products'=> $data]);
    }

    public function show(int $id)
    {   
        $products = Product::where('id',$id)->first();
        return view('productdetails',['products'=> $products]); 
    }


    public function orders()
    {
        $data = Order::all();
        return view('backoffice.backofficeorders',['orders'=> $data]);
    }


    public function showOrder(int $id)
    {   
        $order = Order::where('id',$id)->first();
        return view('orderdetails',['orders'=> $order]); 
    }


   //Display form to create new product

    public function create()
    {
        $data = Category::all();
        return view('backoffice.createproducts',compact('data'));
    }

    //Save new product on the database
    
    public function store(ProductRequest $request)
    {
        $product = new Product([
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'discount' => $request->get('discount'),
            'description' => $request->get('description'), 
            'quantity' => $request->get('quantity'),
            'weight' => $request->get('weight'),
            'image' => $request->get('image'),
            'available' => $request->get('available'),
            'category_id' => $request->get('category'),
        ]);

        $product->save();
        return redirect('/backoffice/catalog')->with('success', 'Produit Ajouté avec succès');
    }


    // Display modification form
     
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('backoffice.editproducts', compact('product'));
    }

    //Save product modification
    
    public function update(Productrequest $request,$id)
    {

        $product = Product::findOrFail($id);
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->category_id = $request->get('category');
        $product->price = $request->get('price');
        $product->discount = $request->get('discount');
        $product->available = $request->get('available');

        $product->update();

        return redirect('/backoffice/catalog')->with('success', 'Produit Modifié avec succès');
    }


 // Delete product
     
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/backoffice/catalog')->with('success', 'Produit supprimé avec succès');
    }





}


