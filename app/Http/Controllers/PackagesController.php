<?php

namespace App\Http\Controllers;

use App\Package;
use App\Partnership;
use Braintree;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class PackagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    // Ciao Alessandro!Spero funzioni tutto!!!!!!!
    public function showPackages($id)
    {
        $id_apartment = $id;
        $user = Auth::user();
        $packages = Package::all();

        return view('Packages.showPackages', compact('packages', 'id_apartment', 'user'));
    }

    public function detailsPackage($id, $id_apartment)
    {
        $package = Package::findOrFail($id);
        $user = Auth::user();
        $gateway = new Braintree\Gateway([
            'environment' => env('BRAINTREE_ENVIRONMENT'),
            'merchantId' => env('BRAINTREE_MERCHANT_ID'),
            'publicKey' => env('BRAINTREE_PUBLIC_KEY'),
            'privateKey' => env('BRAINTREE_PRIVATE_KEY')
        ]);

        $clientToken = $gateway->clientToken()->generate();
        $url = route('buyPackage', ['id' => $id, 'id_apartment' => $id_apartment]);
        return view('Packages.detailsPackage', compact('package', 'clientToken', 'url', 'user'));
    }


    //Instanzio connessione con Braintree
    public function buyPackage(Request $request, $id, $id_apartment)
    {
        $user = Auth::user();
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
            $message = "Transazione eseguita con successo";

            $transaction = new Partnership();
            $transaction->package_id = $id;
            //salvo l'id dell'appartamento
            $transaction->apartment_id = $id_apartment;
            $transaction->transaction_id = $result->transaction->id;
            //salvo la data con Carbon::now()
            $transaction->start_date = Carbon::now();// poi
            // aggiungo ->addHours(24); x la data di scadenza
            $transaction->end_date = Carbon::now()->addHours($package->number_of_hours);
            //imposto is_active a 1
            $transaction->is_active = 1;

            $transaction->save();

        } else {
            $message = "Esecuzione errata";
        }
        return view('Packages.ok', compact('message', 'user'));
    }
}

