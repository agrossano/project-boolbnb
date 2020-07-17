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

      <form action="{{route('store_apartment')}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('POST')

          <div class="form-group">

              <label for="title">Titolo:</label>
              <input type="text" class="form-control" placeholder="Titolo" name="title" value="{{ old('title') }}">

          </div>

          <div class="form-group">

              <label for="description">Descrizione:</label>
              <textarea class="form-control" placeholder="Descrizione" rows="4" name="description"
                        value="{{ old('description') }}"></textarea>

          </div>


          <div class="form-group">

              <label for="rooms_number">Numero di Stanze:</label>
              <input type="text" class="form-control" placeholder="Numero di Stanze" name="rooms_number"
                     value="{{ old('rooms_number') }}">

          </div>

          <div class="form-group">
              <label for="toilets_number">Numero di bagni:</label>
              <input type="text" class="form-control" placeholder="Numero di Bagni" name="toilets_number"
                     value="{{ old('toilets_number') }}">

          </div>

          <div class="form-group">

              <label for="beds_number">Numero di letti</label>
              <input type="text" class="form-control" placeholder="Numero di Letti" name="beds_number"
                     value="{{ old('beds_number') }}">

          </div>

          <div class="form-group">

              <label for="square_metres">Metri quadrati:</label>
              <input type="text" class="form-control" placeholder="Metri quadrati" name="square_metres"
                     value="{{ old('square_metres') }}">

          </div>

          <div class="form-group">

              <label for="price_per_day">Prezzo:</label>
              <input type="text" class="form-control" placeholder="Prezzo" name="price_per_day"
                     value="{{ old('price_per_day') }}">

          </div>

          <div class="form-group">

              <label for="address">Indirizzo:</label>
              <input type="text" class="form-control address" placeholder="Indirizzo" name="address"
                     value="{{ old('address') }}">

          </div>

          <input type="hidden" class="lat-app" name="lat" value=""><br>
          <input type="hidden" class="lon-app" name="lon" value=""><br>


          <div class="user_hide">
              <label id="user_input" for="user_id">USER</label>
              <input type="text" name="user_id" value="{{$user['id']}}"><br>
      </div>


          <label for="image">Select image:</label>
      <input id="image" type="file" name="image" accept="image/*"> <br>


          <label for="services[]">SERVIZI</label> <br>
      <div class="form-check">
        @foreach ($services as $service)
          <input type="checkbox" class="form-check-input" name="services[]" value="{{$service -> id}}">
          {{$service -> type}} <br>
        @endforeach


        <select name="is_visible">
          <label for="is_visible">SCEGLI SE RENDERE VISIBILE L'APPARTAMENTO</label>
          <option value="1">APPARTAMENTO VISIBILE</option>
          <option value="0">APPARTAMENTO NON VISIBILE</option>
        </select>

    </div>

      <input type="submit" name="submit" value="CREA">

    </form>
  </div>
@endsection
