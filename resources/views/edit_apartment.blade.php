@extends('layouts.app')
@section('content')

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
      <input type="text" name="title" value="{{$apartment -> title}}">

      <label for="description">DESCRIZIONE</label>
      <input type="text" name="description" value="{{$apartment -> description}}">

      <label for="rooms_number">NUMERO DI STANZE</label>
      <input type="text" name="rooms_number" value="{{$apartment -> rooms_number}}">

      <label for="toilets_number">NUMERO DI BAGNI</label>
      <input type="text" name="toilets_number" value="{{$apartment -> toilets_number}}">

      <label for="beds_number">NUMERO DI LETTI</label>
      <input type="text" name="beds_number" value="{{$apartment -> beds_number}}">

      <label for="square_metres">METRI QUADRATI</label>
      <input type="text" name="square_metres" value="{{$apartment -> square_metres}}">

      <label for="price_per_day">PREZZO</label>
      <input type="text" name="price_per_day" value="{{$apartment -> price_per_day}}">

      <label for="location_id">INDIRIZZO</label>
      <input type="text" name="location_id" value="{{20}}">

      <label for="user_id">USER</label>
      <input type="text" name="user_id" value="{{$user['id']}}">

      <label for="image">Select image:</label>
      <input type="file" id="img" name="image" accept="image/*">

      <label for="services">SERVIZI</label>

      @foreach ($services as $service)
        <input type="checkbox" name="services[]" value="{{$service['id']}}"
        @foreach ($apartment -> services as $apartment_service)
          @if ($service -> id == $apartment_service -> id)
            checked
          @endif
        @endforeach
        >
        {{$service['type']}}
      @endforeach

      <input type="submit" name="submit" value="MODIFICA">

    </form>
  </div>
@endsection
