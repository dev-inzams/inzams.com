<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\contactMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller {

    public function store(Request $request) {
        $request->validate([
            'email' => 'required|email|max:255|',
            'g-recaptcha-response' => ['required', function (string $attribute, mixed $value, \Closure $fail) {
                $g_response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                    'secret' => '6LeN0A8qAAAAANK5zc7ovRLVYW8eWPAsKwo7azvC',
                    'response' => $value,
                    'remoteip' => \request()->ip(),
                ]);
                if(!$g_response->json('success')) {
                    $fail('foo is not allowed');
                }
            }],
        ]);
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $subject = $request->input('subject');
        // make message is string
        $message = strval($request->input('message'));


        Mail::to($email)->send( new contactMailer($name, $email, $phone, $subject, $message));
        $contact = new Contact();
        $contact->name = $name;
        $contact->email = $email;
        $contact->phone = $phone;
        $contact->subject = $subject;
        $contact->message = $message;
        $contact->save();




        return redirect()->back()->with('message', 'Thank you for your message. We will get back to you shortly.');
    }
}
