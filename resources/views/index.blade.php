@extends('layouts.main_layout')
@section('main')

<div class="video-background-holder">
  <div class="video-background-overlay"></div>
  <video class="video-home" id="cover" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="" type="video/mp4">
  </video>
  <div class="video-background-content container h-100">
    <div class="d-flex h-100 text-center align-items-center">

      <div class="w-100 text-white">
        <div class="text">
          <h1 id="">Non devi andare lontano <br> per trovare ciò che conta.</h1>
        </div>
        <div class="home-form">
          <form action="{{route('apartment-selected')}}" method="post" novalidate="novalidate" class="form-search">
            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
            @csrf
            @method('POST')
            <fieldset>
              <legend>Dove vuoi andare?</legend>
              <div class="inner-form">
                <div class="input-field">
                  <div id="search-app">
                  </div>
                  <input type="hidden" id="lat" name="lat" value="">
                  <input type="hidden" id="lon" name="lon" value="">
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="content" class="wrap_content">
  <svg viewBox="0 0 1440 120" class="wave">
    <path
      d="M1440,21.2101911 L1440,120 L0,120 L0,21.2101911 C120,35.0700637 240,42 360,42 C480,42 600,35.0700637 720,21.2101911 C808.32779,12.416393 874.573633,6.87702029 918.737528,4.59207306 C972.491685,1.8109458 1026.24584,0.420382166 1080,0.420382166 C1200,0.420382166 1320,7.35031847 1440,21.2101911 Z">
    </path>
  </svg>

  <div class="outer">
    <div class="bg">
      <div class="inner">

        <h1 class="sponsored">Appartamenti in evidenza</h1>

      </div>
    </div>
  </div>

  <div class="position-relative">

    <img src="/assets/images/scroll-home-l.png" class="img-scroll-right" alt="">

    <img class="animated img-scroll-left" id="freepik_stories-house-searching" src="/assets/images/left_home_scroll.svg"
      alt="">

  </div>

  <div class="container">

    {{-- <img id="bg" src="/assets/images/bck.png" alt=""> --}}

    <div class="row">
      @foreach($sponsored_apartments->take(8) as $apartment_selected)

      <div class="card_apt">
        <div class="card_apt_header"
          style="background: url({{$apartment_selected->apartment->image}}) 50% 0% no-repeat">

          <!--IMMAGINE DI SFONDO-->
        </div>
        <div class="card_apt_content">
          <div class="address">

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
            <i class="fa fa-home" aria-hidden="true"></i>{{$apartment_selected->apartment->square_metres}}
            <sup>2</sup>
          </div>
          <div class="icon room">
            <i class="fa fa-bed" aria-hidden="true"></i>{{$apartment_selected->apartment->beds_number}}
          </div>

          <div class="icon bath">
            <i class="fa fa-bath" aria-hidden="true"></i>{{$apartment_selected->apartment->toilets_number}}
          </div>

          <div class="card-buttons d-flex">

            <div class="mb-2">
              <a href="{{route('showApartment', $apartment_selected->apartment ->id)}}" class="btn btn-primary">Mostra
                appartamento</a>
            </div>

          </div>

        </div>
      </div>
      @endforeach

    </div>
  </div>

  @endsection



  