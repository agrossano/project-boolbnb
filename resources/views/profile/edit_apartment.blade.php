@extends('layouts.app')
@section('panel_main')

  <div class="form col-md-12">

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <form  action="{{route('update_apartment', $apartment -> id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('POST')


      <div class="form-group">

        <label for="title">TITOLO</label>
        <input type="text" class="form-control" name="title" value="{{$apartment -> title}}">

      </div>

      <div class="form-group">

        <label for="description">DESCRIZIONE</label>
        <textarea class="form-control" rows="4" name="description">{{$apartment -> description}}</textarea>

      </div>

      <div class="form-group">

        <label for="rooms_number">NUMERO DI STANZE</label>
        <input type="text" class="form-control" name="rooms_number" value="{{$apartment -> rooms_number}}">

      </div>


      <div class="form-group">

        <label for="toilets_number">NUMERO DI BAGNI</label>
        <input type="text" class="form-control" name="toilets_number" value="{{$apartment -> toilets_number}}">

      </div>

      <div class="form-group">

        <label for="beds_number">NUMERO DI LETTI</label>
        <input type="text" class="form-control" name="beds_number" value="{{$apartment -> beds_number}}">

      </div>

      <div class="form-group">

        <label for="square_metres">METRI QUADRATI</label>
        <input type="text" class="form-control" name="square_metres" value="{{$apartment -> square_metres}}">

      </div>


      <div class="form-group">

        <label for="price_per_day">PREZZO</label>
        <input type="text" class="form-control" name="price_per_day" value="{{$apartment -> price_per_day}}">

      </div>


      <div class="form-group">

        <label for="address">INDIRIZZO</label>
        <input type="text" class="form-control address" name="address" value="{{$apartment -> address}}">

      </div>

      <input type="hidden" class="lat-app" name="lat" value="">
      <input type="hidden" class="lon-app" name="lon" value="">

      <div class="user_hide">
        <label for="user_id">USER</label>
        <input type="text" class="form-control" name="user_id" value="{{$user['id']}}">
      </div>

      <div class="form-group">

        <img class="edit-image" src="{{$apartment -> image}}" alt=""> <br>
        <label for="image">Modifica Immagine</label>
        <input type="file" id="image" name="image" accept="image/*"> <br>

      </div>

      <label for="services">SERVIZI</label><br>
      <div class="form-check">
      @foreach ($services as $service)
      <input type="checkbox" class="form-check-input" name="services[]" value="{{$service -> id}}"
        @foreach ($apartment -> services as $apartment_service)
          @if ($service -> id == $apartment_service -> id)
            checked
          @endif
        @endforeach
        >
        {{$service['type']}} <br>
      @endforeach
    </div>

    <select class="custom-select custom-select-lg mb-5 mt-5" name="is_visible">
      <label for="services">SERVIZI</label><br>
      <option selected>Seleziona la visibilità dell'annuncio</option>
      <option value="1">APPARTAMENTO VISIBILE</option>
      <option value="0">APPARTAMENTO NON VISIBILE</option>
    </select>

      <input type="submit" name="submit" value="MODIFICA">

    </form>
  </div>
@endsection
