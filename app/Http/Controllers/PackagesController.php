<?php

namespace App\Http\Controllers;

use App\Package;
use Braintree;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showPackages()
    {
        $packages = Package::all();

        return view('Packages.showPackages', compact('packages'));
    }

    public function detailsPackage($id)
    {
        $package = Package::findOrFail($id);
        $gateway = new Braintree\Gateway([
            'environment' => env('BRAINTREE_ENVIRONMENT'),
            'merchantId' => env('BRAINTREE_MERCHANT_ID'),
            'publicKey' => env('BRAINTREE_PUBLIC_KEY'),
            'privateKey' => env('BRAINTREE_PRIVATE_KEY')
        ]);

        $clientToken = $gateway->clientToken()->generate();
        $url = route('buyPackage', ['id' => $id]);
        return view('Packages.detailsPackage', compact('package', 'clientToken', 'url'));
    }


    //Instanzio connessione con Braintree
    public function buyPackage(Request $request, $id)
    {
        $gateway = new Braintree\Gateway([
            'environment' => env('BRAINTREE_ENVIRONMENT'),
            'merchantId' => env('BRAINTREE_MERCHANT_ID'),
            'publicKey' => env('BRAINTREE_PUBLIC_KEY'),
            'privateKey' => env('BRAINTREE_PRIVATE_KEY')
        ]);

        //creazione transazione
        $package = Package::findOrFail($id);
        $nonce = $request->query('nonce');
        $result = $gateway->transaction()->sale([
            'amount' => $package->price_of_package,
            'paymentMethodNonce' => $nonce,
            'options' => ['submitForSettlement' => true]
        ]);
        if ($result->success) {

            $message = "Esecuzione ok";
        } else {
            $message = "Esecuzione errata";
        }
        return view('Packages.ok', compact('message', 'transazione'));
    }
}

