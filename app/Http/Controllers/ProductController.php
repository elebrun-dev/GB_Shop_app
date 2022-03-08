<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function catalog()
    {
        return view('product-list');
    }

    public function item(int $id)
    {
        return view('product-details')->with('id',$id); 
    }
}