@extends('layouts.main_layout')
@section('main')
    ​
    <div class="wrapper">
        ​
        <div id="" class="home">
            ​
            <video id="cover" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="" type="video/mp4">
            </video>
            ​
            <div class="text">
                <h1 id="bottoneInvio">Non devi andare lontano <br> per trovare ciò che conta.</h1>
            </div>
            ​
            <div class="ae">
                ​
            </div>
            ​
        </div>

        {{-- form ricerca appartamento, ale perdonami --}}
        <div class="">
          <form  class="search-form" method="post" action="{{route('apartment-selected')}}">
          @csrf
          @method('POST')
          <input type="search" id="search-app" name="address" placeholder="Dove vuoi andare?">
          <input type="hidden" id="lat" name="lat" value="">
          <input type="hidden" id="lon" name="lon" value="">

          <br>
          <label for="">Numero stanze</label>
          <input type="number" name="rooms_number" value="">
          <br>

          <label for="">Numero letti</label>
          <input type="number" name="beds_number" value="">
          <br>

          <label for="">Raggio di km</label>
          <input type="number" name="radius" value="">
          <br>

          <label for="services[]">SERVIZI</label> <br>
          @foreach ($services as $service)
          <input type="checkbox" name="services[]" value="{{$service -> id}}">
          {{$service -> type}} <br>
          @endforeach
          <br>

          <input type="submit" value="Cerca">
          </form>
        </div>
        {{-- ​fine form ricerca appartamenti --}}
        <div class="main-search">
            ​
            <form class="search-form">
                <input type="search" id="indirizzo" placeholder="Dove vuoi andare?">
                <input type="submit" value="Cerca">
            </form>
            ​
        </div>
        ​
    </div>
    ​
    <div id="content" class="wrap_content">
        <svg viewBox="0 0 1440 120" class="wave">
            <path
                d="M1440,21.2101911 L1440,120 L0,120 L0,21.2101911 C120,35.0700637 240,42 360,42 C480,42 600,35.0700637 720,21.2101911 C808.32779,12.416393 874.573633,6.87702029 918.737528,4.59207306 C972.491685,1.8109458 1026.24584,0.420382166 1080,0.420382166 C1200,0.420382166 1320,7.35031847 1440,21.2101911 Z"></path>
        </svg>
        <a class="arrow-wrap" href="#content">
            <span class="arrow"></span>
        </a>
        ​
        <h1 class="sponsored">Appartamenti in evidenza</h1>
        ​
        <div class="container-fluid position-relative">
            ​
            <img src="/assets/images/scroll-home-l.png" class="img-scroll-right" alt="">
            ​
            <img class="animated img-scroll-left" id="freepik_stories-house-searching"
                 src="/assets/images/left_home_scroll.svg" alt="">
            ​
        </div>
        ​
        <div class="container position-relative">
            <div class="row">
                @foreach($sponsored_apartments->take(9) as $apartment_selected)
                    ​
                    <div class="card_apt">
                        <div class="card_apt_header">
                            ​
                            <img src="{{$apartment_selected->apartment->image}}">
                            ​
                        </div>
                        <div class="card_apt_content">
                            <div class="address">
                                ​
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                {{$apartment_selected->apartment->title}}
                            </div>
                            <div class="text_info">
                                {{$apartment_selected->apartment->description}}
                                <div class="text_info_shade"></div>
                            </div>
                        </div>
                        <div class="price_info">
                            <span class="price_w">Prezzo:</span>
                            <span class="price_v">€ {{$apartment_selected->apartment->price_per_day}}</span>
                        </div>
                        <div class="card_apt_footer">
                            <div class="icon area">
                                <i class="fa fa-home"
                                   aria-hidden="true"></i>{{$apartment_selected->apartment->square_metres}}
                                <sup>2</sup>
                            </div>
                            <div class="icon room">
                                <i class="fa fa-bed"
                                   aria-hidden="true"></i>{{$apartment_selected->apartment->beds_number}}
                            </div>
                            <div class="icon bath">
                                <i class="fa fa-bath"
                                   aria-hidden="true"></i>{{$apartment_selected->apartment->toilets_number}}
                            </div>
                        </div>
                        <a href="{{route('createMessage', $apartment_selected->apartment->id)}}"
                           class="btn btn-primary">Invia un messaggio</a>
                    </div>
                @endforeach

                {{-- <div class="illustra">
    ​
                  <img src="/assets/images/illustrate.jpg" alt="">
    ​
                </div> --}}
                ​
            </div>
            ​
@endsection
