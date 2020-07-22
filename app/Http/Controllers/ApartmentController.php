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

    if($request['services']){
      $servicesSelected = $request['services'];
    } else {
      $servicesSelected = [];
    }

    // seleziono gli appartamenti per num stanze, letti e visibilità
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

    // inizializzazione array vuoto di appartamenti che appariranno in pag
    $apartmentSelected = [];
    // ciclo gli appartamenti e faccio un array dei servizi di ogni appartamento
    foreach ($apartments as $apartment) {
      $allServices = [];
      foreach ($apartment -> services as $service) {
        $allServices[] = $service['id'];
      }
      // calcolo la distanza da lat e lon indicata con formula di vincenty
      $distance = vincentyGreatCircleDistance(
        $latCity, $lonCity, $apartment['lat'], $apartment['lon'], $earthRadius = 6371000);
        // faccio un array di appartamenti che hanno i filtri indicati dall'utente (e aggiungo la chiave distanza)
        if($distance <= $radius && in_array_all($servicesSelected, $allServices)){
          $apartmentSelected[$distance]= $apartment;
        }

    }

    // per ordinare per distanza da lat e lon inserita gli appartamenti
    ksort($apartmentSelected);

    return view('apartment-selected', compact('services', 'apartmentSelected'));
  }

}
