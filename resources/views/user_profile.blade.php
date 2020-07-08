@extends('layouts.app')
@section('content')

  @auth
      <div class="profile">
        <h3>Le mie info sono :</h3>
        {{$user['name']}}

        <h3>I miei appartamenti sono: </h3>
        @foreach ($apartments as $apartment)
          @if ($user['id'] == $apartment['user_id'])
          TITOLO:  {{$apartment['title']}}  <br>
          DESCRIZIONE:  {{$apartment['description']}} <br>
          STANZE:  {{$apartment['rooms_number']}} <br>
          BAGNI:  {{$apartment['toilets_number']}} <br>
          LETTI:  {{$apartment['beds_number']}} <br>
          AMPIEZZA:  {{$apartment['square_metres']}} <br>
          PREZZO:  {{$apartment['price_per_day']}} <br>
          INDIRIZZO:  {{$apartment['location_id']}} <br>
          IMMAGINE:  <img src="{{asset($apartment -> image)}}" alt=""> <br>

          SERVIZI: <br>

            @foreach ($apartment -> services as $apartment_service)
              {{$apartment_service -> type}}
            @endforeach
          @endif
        @endforeach
      </div>


    <a href="{{route('create_apartment')}}">Create new apartment</a>
    <a href="{{route('edit_apartment', $apartment['id'])}}">Edit apartment</a>

  @endauth

@endsection
