@extends('layouts.app')
@section('main')

  <div class="form">

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

      <label for="title">TITOLO</label>
      <input type="text" name="title" value="{{$apartment -> title}}"> <br>

      <label for="description">DESCRIZIONE</label>
      <input type="text" name="description" value="{{$apartment -> description}}"><br>

      <label for="rooms_number">NUMERO DI STANZE</label>
      <input type="text" name="rooms_number" value="{{$apartment -> rooms_number}}"><br>

      <label for="toilets_number">NUMERO DI BAGNI</label>
      <input type="text" name="toilets_number" value="{{$apartment -> toilets_number}}"><br>

      <label for="beds_number">NUMERO DI LETTI</label>
      <input type="text" name="beds_number" value="{{$apartment -> beds_number}}"><br>

      <label for="square_metres">METRI QUADRATI</label>
      <input type="text" name="square_metres" value="{{$apartment -> square_metres}}"><br>

      <label for="price_per_day">PREZZO</label>
      <input type="text" name="price_per_day" value="{{$apartment -> price_per_day}}"><br>

      <label for="address">ADDRESS</label>
      <input type="text" name="address" value="{{$apartment -> address}}"><br>

      <label for="lat"></label>
        <input type="hidden" name="lat" value="10000"><br>

      <label for="lon"></label>
      <input type="hidden" name="lon" value="20000"><br>

      <div class="user_hide">
        <label for="user_id">USER</label>
        <input type="text" name="user_id" value="{{$user['id']}}"><br>
      </div>

      <img src="{{$apartment -> image}}" alt=""> <br>
      <label for="image">MODIFICA IMMAGINE</label>
      <input type="file" name="image" accept="image/*"> <br>

       <label for="services">SERVIZI</label> <br>
      @foreach ($services as $service)
        <input type="checkbox" name="services[]" value="{{$service -> id}}"
        @foreach ($apartment -> services as $apartment_service)
          @if ($service -> id == $apartment_service -> id)
            checked
          @endif
        @endforeach
        >  {{$service['type']}} <br>
      @endforeach

      <select name="is_visible">
        <option value="1">APPARTAMENTO VISIBILE</option>
        <option value="0">APPARTAMENTO NON VISIBILE</option>
      </select>
      <input type="submit" name="submit" value="MODIFICA">

    </form>
  </div>
@endsection
