<?php

namespace App\Http\Controllers;


use Braintree;

class PackagesController extends Controller
{
    //Instanzio connessione con Braintree

    public function payments()
    {
        $gateway = new Braintree\Gateway([
            'environment' => env(),
            'merchantId' => env(),
            'publicKey' => env(),
            'privateKey' => env()
        ]);
        dd($gateway);

        return view('packages');

    }
}

