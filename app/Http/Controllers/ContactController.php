<?php

namespace App\Http\Controllers;

use App\ContactMessage;
use Illuminate\Http\Request;
use App\Mail\ContactSubmitted;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Returns a view with the contact form
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        return view('contacts.create');
    }

    /**
     * Validates and submits a new contact form.
     * Sends an e-mail address if all went as expected.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:60',
            'email' => 'required|email',
            'message' => 'required|string|max:2000',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        $name = $request->get('name');

        $contactMessage = ContactMessage::create([
            'name' => $name,
            'email' => $request->get('email'),
            'message' => $request->get('message'),
        ]);

        $recipientAddress = config('mail.to')['address'];

        if ($recipientAddress && (config('mail.status') || app()->environment(['production']))) {
            // Send e-mail to admin alerting about new contact
            Mail::to($recipientAddress)->send(new ContactSubmitted($contactMessage));
            Log::info('New e-mail sent.');
        }

        return redirect()->route('home')
            ->with('success', "<p>Obrigado, $name!</p><p>A tua mensagem foi enviada com sucesso! Responderemos 
                assim que possível.</p>");
    }
}
