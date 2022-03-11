<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function displayCatalog()
    {   
        $products = DB::select('SELECT * FROM products LEFT JOIN categories ON  products.category_id = categories.cat_id');
        return view('catalog', ['products'=> $products]);
    }

    public function item(int $id)
    {   
        $products = DB::select('SELECT * FROM products LEFT JOIN categories ON  products.category_id = categories.cat_id  WHERE products.id=:id', array('id'=>$id));
        return view('productdetails',['products'=> $products])->with('id',$id); 
    }
}