<?php

namespace App\Http\Controllers;
use App\Apartment;

use Illuminate\Http\Request;

class ApartmentController extends Controller
{
  public function show_apartment (Request $request) {
    // dd($request);
    $request -> validate([
      "address" => "required"
        ]);
      $ciao = $request["lat"] ;
    dd($request);

    return view("apartment_searched");
  }

}
