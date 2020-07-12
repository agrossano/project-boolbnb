@extends('layouts.main_layout')
@section('main')

    <div class="home">


        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="/assets/video/cover.mp4" type="video/mp4">
        </video>


        <svg viewBox="0 0 1440 120" class="wave">
            <path
                d="M1440,21.2101911 L1440,120 L0,120 L0,21.2101911 C120,35.0700637 240,42 360,42 C480,42 600,35.0700637 720,21.2101911 C808.32779,12.416393 874.573633,6.87702029 918.737528,4.59207306 C972.491685,1.8109458 1026.24584,0.420382166 1080,0.420382166 C1200,0.420382166 1320,7.35031847 1440,21.2101911 Z"></path>
        </svg>


        <div class="text">
            <h1 class="">Non devi andare lontano <br> per trovare ciò che conta.</h1>
        </div>

        <div class="ae">


        </div>


    </div>


    <div class="main-search">

        <form class="search-form">
            <input type="search" placeholder="Dove vuoi andare?">
            <input type="submit" value="Cerca">
        </form>

    </div>


    <h1 class="sponsored wow fadeInDown animated">Appartamenti in evidenza</h1>

    <div class="shape wow fadeInDown animated" data-wow-delay="0.3s"
         style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;"></div>

    <div class="container-fluid">
        <div class="row">
            @foreach($sponsored_apartments as $apartment_selected)
                @foreach($apartments as $apartment)
                    @if ($apartment_selected->id===$apartment->id)
                        <div class="card_apt wow fadeInLeft animated" data-wow-delay="0.3s"
                             style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                            <div class="card_apt_header">

                                <!--IMMAGINE DI SFONDO-->

                            </div>
                            <div class="card_apt_content">
                                <div class="address">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    {{$apartment->address}}
                                </div>
                                <div class="text_info">
                                    {{$apartment->description}}
                                    <div class="text_info_shade"></div>
                                </div>
                            </div>
                            <div class="price_info">
                                <span class="price_w">Prezzo:</span>
                                <span class="price_v">€ {{$apartment->price_per_day}}</span>
                            </div>
                            <div class="card_apt_footer">
                                <div class="icon area">
                                    <i class="fa fa-home" aria-hidden="true"></i>{{$apartment->square_metres}}
                                    <sup>2</sup>
                                </div>
                                <div class="icon room">
                                    <i class="fa fa-bed" aria-hidden="true"></i>{{$apartment->beds_number}}
                                </div>
                                <div class="icon bath">
                                    <i class="fa fa-bath" aria-hidden="true"></i>{{$apartment->toilets_number}}
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endforeach
        </div>

@endsection
