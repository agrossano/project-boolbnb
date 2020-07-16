<?php

namespace App\Http\Controllers;
use App\Apartment;
use App\Service;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
  public function index()
  {
    $services = Service::all();
    return view('index', compact('services'));
  }

  public function apartmentList(Request $request)
  {
    $request -> validate([
        'address' => 'required',
        'rooms_number' => 'integer|nullable',
        'beds_number' => 'integer|nullable',
        'radius' => 'integer|nullable'
    ]);

    $services = Service::all();
    $address = $request['address'];
    $latCity = $request['lat'];
    $lonCity = $request['lon'];
    // dd($latCity);

    $apartmentLat= Apartment::all()->where("lat", "=", $latCity);
    $apartmentLon= Apartment::all()->where("lat", "=", $lonCity);
    dd($apartmentLat);


    return view('apartment-selected', compact('services'));

  }

}
