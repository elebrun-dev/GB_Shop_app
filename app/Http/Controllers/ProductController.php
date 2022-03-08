<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function catalog()
    {
        return 'Liste des produits';
    }

    public function item(int $id)
    {
        return 'Fiche du produit' .$id;
    }



}