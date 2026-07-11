<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('ContactPage');
    }

    public function submitContactForm(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'societe' => 'nullable|string|max:255',
            'fonction' => 'nullable|string|max:255',
            'telephone' => 'nullable|string|max:30',
            'country' => 'required|string',
            'ville' => 'nullable|string|max:255',
            'adresse' => 'nullable|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'g-recaptcha-response' => 'nullable|string',
        ]);

        $secret = env('RECAPTCHA_SECRET_KEY');
        if ($secret) {
            $recaptchaToken = $request->input('g-recaptcha-response');
            $recaptchaResponse = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret'   => $secret,
                'response' => $recaptchaToken,
            ]);
            $recaptchaBody = $recaptchaResponse->json();

            if (!($recaptchaBody['success'] ?? false) || ($recaptchaBody['score'] ?? 0) < 0.5) {
                return back()->withErrors(['captcha' => 'Vérification anti-robot échouée. Veuillez réessayer.']);
            }
        }

        try {
            Mail::to('contact@somafiam.com')->send(new ContactFormMail($validated));
        } catch (\Exception $e) {
            \Log::error('ContactForm mail error: ' . $e->getMessage());
            return back()->withErrors(['email_send' => 'Une erreur est survenue lors de l\'envoi. Veuillez nous contacter directement à contact@somafiam.com.'])->withInput();
        }

        return back()->with('success', 'Votre message a bien été envoyé. Nous vous répondrons dans les plus brefs délais.');
    }
}
