<?php

namespace App\Http\Controllers;
use App\Apartment;
use App\Partnership;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $sponsored_apartments = Partnership::where('is_active', '1')->get();
        $apartments = Apartment::all();
        return view('index', compact('sponsored_apartments', 'apartments'));
    }


}
