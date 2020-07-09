<?php

namespace App\Http\Controllers;
use Str;
use App\User;
use App\Apartment;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function show_profile(){

  $apartments = Apartment::with(['services']) -> get();
  $user = Auth::user();
  return view('user_profile', compact('user', 'apartments'));
  }

  public function create_apartment(){
    $user = Auth::user();
    $services = Service::all();

    return view('create_apartment', compact('user', 'services'));
  }

  public function store_apartment(Request $request){

    $validateData = $request -> validate([
      'title' => 'required|alpha',
      'description' => 'required',
      'rooms_number'=>'required|integer',
      'toilets_number' => 'required|integer',
      'beds_number' => 'required|integer',
      'square_metres' => 'required|integer',
      'price_per_day' => 'required|integer',
      'user_id' => 'required',
      'location_id' => 'required',
      'image' => 'required',
      'services' => 'required'
    ]);

    $apartment = new Apartment;

    $apartment -> title =$validateData['title'];
    $apartment -> description =$validateData['description'];
    $apartment -> rooms_number =$validateData['rooms_number'];
    $apartment -> toilets_number =$validateData['toilets_number'];
    $apartment -> beds_number =$validateData['beds_number'];
    $apartment -> square_metres =$validateData['square_metres'];
    $apartment -> price_per_day =$validateData['price_per_day'];
    $apartment -> user_id =$validateData['user_id'];
    $apartment -> location_id = $validateData['location_id'];
    $apartment -> image = $validateData['image'];
    $image = $request -> file('image');
    $extension = $image -> getClientOriginalExtension();
    $name = Str::slug($request -> input('title'). '_'. time());
    $folder = '/uploads/images/';
    $filePath = $folder . $name . '.' .  $extension;
    $apartment -> image = $filePath;
    $image -> storeAs($folder , $name .'.'. $extension , 'public');
    $apartment -> save();
    $apartment -> services() -> sync( $validateData['services']);

    return redirect() -> route('show_profile');
  }

  public function edit_apartment(Request $request, $id){
    $user = Auth::user();
    $services = Service::all();
    $apartment = Apartment::findOrFail($id);

    return view('edit_apartment', compact('user', 'services','apartment'));
  }

  public function update_apartment(Request $request, $id){

    $validateData = $request -> validate([
      'title' => 'required|alpha',
      'description' => 'required',
      'rooms_number'=>'required|integer',
      'toilets_number' => 'required|integer',
      'beds_number' => 'required|integer',
      'square_metres' => 'required|integer',
      'price_per_day' => 'required|integer',
      'user_id' => 'required',
      'location_id' => 'required',
      'image' => 'required|mimes:jpg,jpeg,png,bmp,tiff |max:4096',
      'services' => 'required'
    ]);

    $apartment = Apartment::findOrFail($id);

    $apartment -> title =$validateData['title'];
    $apartment -> description =$validateData['description'];
    $apartment -> rooms_number =$validateData['rooms_number'];
    $apartment -> toilets_number =$validateData['toilets_number'];
    $apartment -> beds_number =$validateData['beds_number'];
    $apartment -> square_metres =$validateData['square_metres'];
    $apartment -> price_per_day =$validateData['price_per_day'];
    $apartment -> user_id =$validateData['user_id'];
    $apartment -> location_id = $validateData['location_id'];
    $apartment -> image = $validateData['image'];
    $image = $request -> file('image');
    $extension = $image -> getClientOriginalExtension();
    $name = Str::slug($request -> input('title'). '_'. time());
    $folder = '/uploads/images/';
    $filePath = $folder . $name . '.' .  $extension;
    $apartment -> image = $filePath;
    $image -> storeAs($folder , $name .'.'. $extension , 'public');


    $apartment -> save();


    $apartment -> services() -> attach($validateData['services']);

    return redirect() -> route('show_profile');
  }
}
