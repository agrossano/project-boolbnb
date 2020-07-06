@extends('layouts.main_layout')
@section('main')

<div class="home">

    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="/assets/video/cover.mp4" type="video/mp4">
    </video>


    <svg viewBox="0 0 1440 120" class="wave"><path d="M1440,21.2101911 L1440,120 L0,120 L0,21.2101911 C120,35.0700637 240,42 360,42 C480,42 600,35.0700637 720,21.2101911 C808.32779,12.416393 874.573633,6.87702029 918.737528,4.59207306 C972.491685,1.8109458 1026.24584,0.420382166 1080,0.420382166 C1200,0.420382166 1320,7.35031847 1440,21.2101911 Z" > </path></svg>

    <svg viewBox="0 0 1440 120" class="aa"><path d="M1440,21.2101911 L1440,120 L0,120 L0,21.2101911 C120,35.0700637 240,42 360,42 C480,42 600,35.0700637 720,21.2101911 C808.32779,12.416393 874.573633,6.87702029 918.737528,4.59207306 C972.491685,1.8109458 1026.24584,0.420382166 1080,0.420382166 C1200,0.420382166 1320,7.35031847 1440,21.2101911 Z" > </path></svg>


    <div class="text">
      <h1 class="">Non devi andare lontano per trovare <br> ciò che conta.</h1>
    </div>

    <div class="ae">



    </div>


</div>


<div class="main-search">

  <form  class="search-form">
    <label for="from">
      <i class="ion-location"></i>
    </label>
    <input type="search" id="address-input" placeholder="Where are we going?" />
    <input type="submit" value="Search">
  </form>

</div>



@endsection
