<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

       /**
     * Display the specified resource.y
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return response()->json($product);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //     $this->validate($request, [
    //     'name' => 'required|max:45',
    //     'price' => 'required',
    //     'discount' => 'required',
    //     'description'=> 'required',
    //     'quantity'=> 'required',
    //     'weight'=> 'required',
    //     'image'=> 'required',
    //     'available'=> 'required',
    //     'category_id'=> 'required',
    // ]);

        $product = Product::create([
        //'id' => $request->id,
        'name' => $request->name,
        'price' => $request->price,
        'discount' => $request->discount,
        'description'=> $request->description,
        'quantity'=> $request->quantity,
        'weight'=> $request->weight,
        'image'=> $request->image,
        'available'=> $request->available,
        'category_id'=> $request->category_id,
    ]);

       return response()->json($product, 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
    // $this->validate($request, [
    //     'name' => 'required|max:45',
    //     'price' => 'required',
    //     'discount' => 'required',
    //     'description'=> 'required',
    //     'quantity'=> 'required',
    //     'weight'=> 'required',
    //     'image'=> 'required',
    //     'available'=> 'required',
    //     'category_id'=> 'required',
    // ]);

    $product->update([
        
        'name' => $request->name,
        'price' => $request->price,
        'discount' => $request->discount,
        'description'=> $request->description,
        'quantity'=> $request->quantity,
        'weight'=> $request->weight,
        'image'=> $request->image,
        'available'=> $request->available,
        'category_id'=> $request->category_id,
    ]);

    return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json();
    }
}
