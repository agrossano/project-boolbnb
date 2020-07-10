<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apartment;
use App\Session;
use App\Message;
use App\Partnership;
use App\Service;

class apartmentController extends Controller
{
  public function showApartment(){
        $apartments = Apartment::all();
        $services = Service::all();
        return view('index', compact("apartments", "services"));
      });
}
