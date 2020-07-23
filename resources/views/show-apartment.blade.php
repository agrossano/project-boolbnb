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
      <div class="boxback"></div>
      <p class="mb-3">{{$apartment['description']}}</p>
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
  <div class="row filter">
    <div class="col-md-6 contacts">
      <div>
        <h2 class="pt-5 pb-3 pb-3 green">Contatta l'host:</h2>
      </div>
      <form action="{{route('storeMessage',$apartment->id)}}" method="post" autocomplete="off">
        @method('POST')
        @csrf
        <div class="form-group">
          <label for="email"></label>
          @if($user)
          <p>Email</p>
          <input type="text" id="mail" name="email" class="form-control" placeholder="Email*" value="{{$user->email}}">
          @else
          <input type="text" id="mail" name="email" class="form-control" placeholder="Email*" value="">
          @endif
          <ul id="mailList"></ul>
        </div>
        <p>Messaggio</p>
        <textarea class="form-control" name="text" placeholder="Messaggio" rows="5"
          data-form-field="Message"></textarea>
        <input type="submit" value="Invia Messaggio">
      </form>
      @if(session('success'))
      <h1>{{session('success')}}</h1>
      @endif
    </div>
    <div class="col-md-6 title-room">
      <div id='map'></div>
      <input id="current-lat" type="hidden" name="" value="{{$apartment['lat']}}">
      <input id="current-lon" type="hidden" name="" value="{{$apartment['lon']}}">
    </div>
  </div>
  <div class="row">

  </div>
</div>
@endsection