<?php

namespace App\Http\Controllers;
use App\Partnership;
use Carbon\Carbon;
use App\Service;

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
        $sponsored_apartments = Partnership::with('apartment')->inRandomOrder()->where('end_date', '>', $now)->get();
        $services = Service::all();
        return view('index', compact('sponsored_apartments', 'services'));
    }


}
