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

  public function showApartment($id) {
    $apartment = Apartment::findOrFail($id);
    return view('show-apartment', compact('apartment'));
  }

  public function apartmentList(Request $request)
  {
    $services = Service::all();
    $servicesSelected = $request['services'];
    $latCity = $request['lat'];
    $lonCity = $request['lon'];
    $radius = $request['radius'];
    $roomNumber = $request['rooms_number'];
    $bedsNumber = $request['beds_number'];
    if($request['radius']){
      $radius= $request['radius'] * 1000;
    } else {
      $radius = 20000;
    }

    $apartments= Apartment::all() -> where('beds_number', '>=', $bedsNumber)
                                  -> where('rooms_number', '>=', $roomNumber)
                                  -> where('is_visible', '1');

    // funzione vincenty calcolo distanze lat e lon
    function vincentyGreatCircleDistance(
    $latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371000)
    {
        // convert from degrees to radians
        $latFrom = deg2rad($latitudeFrom);
        $lonFrom = deg2rad($longitudeFrom);
        $latTo = deg2rad($latitudeTo);
        $lonTo = deg2rad($longitudeTo);

        $lonDelta = $lonTo - $lonFrom;
        $a = pow(cos($latTo) * sin($lonDelta), 2) +
          pow(cos($latFrom) * sin($latTo) - sin($latFrom) * cos($latTo) * cos($lonDelta), 2);
        $b = sin($latFrom) * sin($latTo) + cos($latFrom) * cos($latTo) * cos($lonDelta);

        $angle = atan2(sqrt($a), $b);
        $result = $angle * $earthRadius;
        return $result;
    }

    // verificare array dentro array
    function in_array_all($needles, $haystack) {
       return empty(array_diff($needles, $haystack));
    }

    $apartmentSelected = [];
    $allServices = [];

    foreach ($apartments as $apartment) {
      foreach ($services as $service) {
        $serviceId = $service['id'];
        $allServices[] = $serviceId;
      }

      $distance = vincentyGreatCircleDistance(
      $latCity, $lonCity, $apartment['lat'], $apartment['lon'], $earthRadius = 6371000);

      if($distance <= $radius && in_array_all($servicesSelected, $allServices)){
        $apartmentSelected[]= $apartment;
      }
    }

    return view('apartment-selected', compact('services', 'apartmentSelected'));
  }

}
