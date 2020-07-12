<?php

namespace App\Http\Controllers;
use App\Partnership;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {
        $sponsored_apartments = Partnership::with('apartment')->where('is_active', '1')->get();
        return view('index', compact('sponsored_apartments'));
    }


}
