<?php

namespace App\Http\Controllers;
use App\Partnership;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {
        $now = Carbon::now()->toDateTimeString();
        $sponsored_apartments = Partnership::with('apartment')->where('end_date', '>', $now)->get();
        return view('index', compact('sponsored_apartments'));
    }


}
