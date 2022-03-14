<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function displayContactForm()
    {
        return view('contact');
    }


    public function storeResultsContactForm(Request $request)
    {
        $data = [
            'datas' => [
                'lastname' => $request->input('nom'),
                'firstname' => $request->input('prenom'),
                'email' => $request->input('email'),
                'message' => $request->input('raison'),
                'email' => $request->input('message'),
            ]
            ];

        return view('contact.result', $data);
    }


}