<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ContactMessage;

class ContactController extends Controller
{
    public function show(Request $request)
    {
        return view('contacts');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:55',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $request = $request->only(['name', 'email', 'message']);

        $name = $request['name'];

        ContactMessage::create([
            'name' => $name,
            'email' => $request['email'],
            'message' => $request['message'],
        ]);

        return redirect('/')->with('success', "Obrigado $name! A tua mensagem foi enviada com sucesso!");
    }
}
