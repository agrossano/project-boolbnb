@extends('layouts.main_layout')

@section('main')
  <ul>
    @foreach ($apartmentSelected as $eachApartment)
      <li>
        {{$eachApartment-> title}} <br>
        Numero stanze: {{$eachApartment-> rooms_number}} <br>
        Numero letti: {{$eachApartment-> beds_number}} <br>
        Indirizzo: {{$eachApartment-> address}} <br>
        Servizi:
        @foreach ($eachApartment -> services as $services_apt)
          {{$services_apt -> type}}
        @endforeach
        <br>
        <a href="{{route('showApartment', $eachApartment -> id)}}"> Vedi i dettagli</a>
      </li>
      <br>
    @endforeach
  </ul>
@endsection
