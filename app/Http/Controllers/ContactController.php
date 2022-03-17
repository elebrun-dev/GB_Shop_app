<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }


    public function store(ContactRequest $request)
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

        return view('contactresult', $data);
    }


}