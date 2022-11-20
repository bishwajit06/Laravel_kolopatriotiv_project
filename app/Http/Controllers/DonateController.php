<?php

namespace App\Http\Controllers;
use App\Models\Donate;

use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function donateCreate()
    {
        return view('frontend/pages/donate');
    }

    public function donateStore(Request $request)
    {
        $request->validate([
            'name' => ['string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255']
        ]);

        Donate::create([
            'name' => $request->name,
            'email' => $request->email
        ]);

        if ($request->payment == 'paypal') {
            return redirect('https://www.paypal.com/donate/?hosted_button_id=3YDQUDGSYHA8S');
        }elseif($request->payment == 'btc') {
            return redirect('https://commerce.coinbase.com/checkout/b7dd039c-f50d-45d5-b414-83eb174fa4b5');
        }
        
    }
}
