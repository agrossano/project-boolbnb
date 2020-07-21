@extends('layouts.main_layout')

@section('main')

<div class="position-relative">
</div>
<div class="show-block-cover inner-page-cover"
  style="background-image: linear-gradient(to right bottom, rgba(126, 213, 111, 0.61), rgba(40, 180, 133, 0.644)),url({{$apartment['image']}}">
  <div class="container show">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
        <h1 class="text-white">{{$apartment['title']}}</h1>
        <p>€ {{$apartment['price_per_day']}} a notte</p>
        <div class="show-resp">
          <p class="mb-5">{{$apartment['description']}}</p>
          <ul class="property-list-details mb-5">
            <li class="text-black">Indirizzo: <strong class="text-black">{{$apartment['address']}}</strong></li>
            <li>Metri quadrati: <strong>{{$apartment['square_metres']}}</strong></li>
            <li>Stanze: <strong>{{$apartment['rooms_number']}}</strong></li>
            <li>Letti: <strong>{{$apartment['beds_number']}}</strong></li>
            <li>Bagni: <strong>{{$apartment['toilets_number']}}</strong></li>
            <li>Servizi: <strong>- @foreach ($apartment -> services as $services_apt)
                {{$services_apt -> type}} -
                @endforeach</strong></li>
          </ul>
        </div>
        
      </div>
    </div>

  </div>

</div>

<div class="container">
  <div class="apt-block">
    <div class="image" style="background-image: url('{{$apartment['image']}}')"></div>
    <div class="text-show">
      <h2>Descrizione</h2>
      <p class="mb-5">{{$apartment['description']}}</p>
      <ul class="property-list-details mb-5">
        <li class="text-black">Indirizzo: <strong class="text-black">{{$apartment['address']}}</strong></li>
        <li>Metri quadrati: <strong>{{$apartment['square_metres']}}</strong></li>
        <li>Stanze: <strong>{{$apartment['rooms_number']}}</strong></li>
        <li>Letti: <strong>{{$apartment['beds_number']}}</strong></li>
        <li>Bagni: <strong>{{$apartment['toilets_number']}}</strong></li>
        <li>Servizi: <strong>- @foreach ($apartment -> services as $services_apt)
            {{$services_apt -> type}} -
            @endforeach</strong></li>
      </ul>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-12 title-room">
      <div id='map'></div>
      <input id="current-lat" type="hidden" name="" value="{{$apartment['lat']}}">
      <input id="current-lon" type="hidden" name="" value="{{$apartment['lon']}}">
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 contacts">
      <div>
        <h2 class="pt-3 pb-3 pb-3 green">Contatta l'host:</h2>
      </div>
      <form action="{{route('storeMessage',$apartment->id)}}" method="post" autocomplete="on">
        @method('POST')
        @csrf
        <div class="form-group">
          <label for="email"></label>
          <input type="text" name="email" class="form-control" placeholder="Email*">
        </div>
        <label for="text"></label>
        <textarea class="form-control" name="text" placeholder="Message" rows="5" data-form-field="Message"></textarea>
        <input type="submit" value="Send Message">
      </form>
    </div>
  </div>
</div>
@endsection