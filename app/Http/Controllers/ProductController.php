<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function showCatalog()
    {     
        $products = Product::all();
        return view('catalog', ['products'=> $products]);
    }

    public function showCatalogByCategory($cat)
    {     
        $category = Category::all();
        $products = Product::where('category_id',$cat)->first();
        return view('catalog', ['products'=> $products],['category'=> $category]);
    }


    public function showOneItem(int $product)
    {   
        $products = Product::where('id',$product)->first();
        return view('productdetails',['products'=> $products]); 
    }
}