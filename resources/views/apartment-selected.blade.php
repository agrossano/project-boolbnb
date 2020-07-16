@extends('layouts.main_layout')

@section('main')
  <ul>
    @foreach ($apartmentSelected as $eachApartment)
      <li>
        {{$eachApartment-> title}}
        Descrizione: {{$eachApartment-> description}} <br>
        Numero stanze: {{$eachApartment-> rooms_number}} <br>
        Numero letti: {{$eachApartment-> beds_number}} <br>
        Indirizzo: {{$eachApartment-> address}} <br>
      </li>
      <br>
    @endforeach
  </ul>
@endsection
