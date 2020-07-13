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

    <form  action="{{route('store_apartment')}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('POST')

      <label for="title">TITOLO</label>
      <input type="text" name="title" value=""><br>

      <label for="description">DESCRIZIONE</label>
      <input type="text" name="description" value=""><br>

      <label for="rooms_number">NUMERO DI STANZE</label>
      <input type="text" name="rooms_number" value=""><br>

      <label for="toilets_number">NUMERO DI BAGNI</label>
      <input type="text" name="toilets_number" value=""><br>

      <label for="beds_number">NUMERO DI LETTI</label>
      <input type="text" name="beds_number" value=""><br>

      <label for="square_metres">METRI QUADRATI</label>
      <input type="text" name="square_metres" value=""><br>

      <label for="price_per_day">PREZZO</label>
      <input type="text" name="price_per_day" value=""><br>

      <label for="address">ADDRESS</label>
      <input type="text" name="address" value=""><br>

      <input type="hidden" name="lat" value="10000"><br>
      <input type="hidden" name="lon" value="20000"><br>


      <div class="user_hide">
        <label id="user_input"for="user_id">USER</label>
        <input type="text" name="user_id" value="{{$user['id']}}"><br>
      </div>


      <label for="image">Select image:</label>
      <input id="image" type="file" name="image" accept="image/*"> <br>

      <label for="services[]">SERVIZI</label> <br>
      @foreach ($services as $service)
        <input type="checkbox" name="services[]" value="{{$service -> id}}">
        {{$service -> type}} <br>
      @endforeach

      <select name="is_visible">
        <label for="is_visible">SCEGLI SE RENDERE VISIBILE L'APPARTAMENTO</label>
        <option value="1">APPARTAMENTO VISIBILE</option>
        <option value="0">APPARTAMENTO NON VISIBILE</option>
      </select>


      <input type="submit" name="submit" value="CREA">

    </form>
  </div>
@endsection
