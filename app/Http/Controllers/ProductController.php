<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\product;

class ProductController extends Controller
{
    public function displayCatalog()
    {   

    $products = product::orderBy('name')->get();
    return view('catalog', ['products'=> $products]);
 
    //    $productsByPrice = product::orderBy('price')
    //    ->get();
     //  return view('catalog', ['products'=> $products]);
        
         
        // $products = DB::select('SELECT * FROM products LEFT JOIN categories ON  products.category_id = categories.cat_id');
        // return view('catalog', ['products'=> $products]);
    
    }
    public function item(int $id)
    {   
        
        $products = product::where('id',$id)
        ->first();
        
       return view('productdetails',['products'=> $products]); 
        
        
        // $products = DB::select('SELECT * FROM products LEFT JOIN categories ON  products.category_id = categories.cat_id  WHERE products.id=:id', array('id'=>$id));
        // return view('productdetails',['products'=> $products])->with('id',$id); 
    }
}