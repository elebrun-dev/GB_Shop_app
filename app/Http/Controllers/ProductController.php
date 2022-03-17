<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function displayCatalog()
    {     
        $products = Product::all();
        return view('catalog', ['products'=> $products]);
    }

    public function displayCatalogByCategory($cat)
    {     
        $category = Category::all();
        $products = Product::where('category_id',$cat)->first();
        return view('catalog', ['products'=> $products],['category'=> $category]);
    }


    public function displayItem(int $id)
    {   
        $products = Product::where('id',$id)->first();
        return view('productdetails',['products'=> $products]); 
    }
}