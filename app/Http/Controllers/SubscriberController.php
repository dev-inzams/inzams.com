<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SubscriberController extends Controller {

    public function store( Request $request ) {
        try{
            $request->validate([
                'email' => 'required|email',
                'g-recaptcha-response' => ['required', function (string $attribute, mixed $value, \Closure $fail) {
                    $g_response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                        'secret' => config('services.recaptcha.secret_key'),
                        'response' => $value,
                        'remoteip' => \request()->ip(),
                    ]);
                    if(!$g_response->json('success')) {
                        $fail('foo is not allowed');
                    }
                }],
            ]);

            $email = $request->input('email');
            $subscriber = new Subscriber();
            $subscriber->email = $email;
            $subscriber->ip = $request->ip();
            $subscriber->save();
            return redirect()->back()->with('success', 'Subscriber Added Successfully');
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
