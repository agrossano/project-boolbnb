@extends('layouts.app')
@section('main')
    ​
    ​
    <div class="container-fluid">
        <div class="row user">
            <div class="col-md-3">
                <div class="user-sidebar">
                    ​
                    <div class="user-userpic">
                        <img src="/assets/images/placeholder.png" class="img-responsive" alt="">
                    </div>
                    ​
                    <div class="user-usertitle">
                        <div class="user-usertitle-name">
                            {{$user['name']}}
                        </div>
                        ​
                    </div>
                    ​
                    <div class="user-usermenu">
                        <ul class="nav">
                            <li class="active">
                                <a href="{{route('create_apartment')}}">
                                    <i class="glyphicon glyphicon-home"></i>
                                    Inserisci nuovo appartamento </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="glyphicon glyphicon-user"></i>
                                    Promuovi un appartamento</a>
                            </li>
                        </ul>
                    </div>
                    ​
                    ​
                    <div class="view light bordered">
                        ​
                        <div class="row list-separated user-stat">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="uppercase user-stat-title"> 3</div>
                                <div class="uppercase user-stat-text"> Appartamenti</div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="uppercase user-stat-title"> 2</div>
                                <div class="uppercase user-stat-text"> Messaggi</div>
                            </div>
                        </div>
                        ​
                        <div>
                            <h4 class="user-desc-title">Cosa si dice di {{$user['name']}}</h4>
                            <span class="user-desc-text"> Lorem ipsum dolor sit amet diam nonummy nibh dolore. </span>
                            <div class="margin-top-20 user-desc-link">
                                <i class="fa fa-globe"></i>
                                <a href="#">alegro.com</a>
                            </div>
                            <div class="margin-top-20 user-desc-link">
                                <i class="fa fa-twitter"></i>
                                <a href="https://www.twitter.com/">@twitterprofilo</a>
                            </div>
                            <div class="margin-top-20 user-desc-link">
                                <i class="fa fa-facebook"></i>
                                <a href="https://www.facebook.com/">Ale G.</a>
                            </div>
                        </div>
                    </div>
                    ​
                </div>
            </div>
            <div class="col-md-9">
                <div class="user-apartment">
                    @auth
                        @foreach ($apartments as $apartment)
                            @if ($user['id'] == $apartment['user_id'])
                                <div class="card_apt card_apt_panel wow fadeInLeft animated" data-wow-delay="0.3s"
                                     style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                                    <div class="card_apt_content">
                                        <div class="adress">
                                            <div class="imgpanel">
                                                <img class="img_panel" src="{{asset($apartment -> image)}}" alt="">
                                            </div>
                                            <br>
                                            ​
                                            TITOLO: {{$apartment['title']}} <br>
                                            STANZE: {{$apartment['rooms_number']}} <br>
                                            INDIRIZZO: {{$apartment['address']}} <br>
                                            SERVIZI: <br>
                                            ​
                                            @foreach ($apartment -> services as $service)
                                                {{$service -> type}} <br>
                                            @endforeach
                                            ​
                                            <a href="{{route('edit_apartment', $apartment['id'])}}">Modifica
                                                appartamento</a>
                                        </div>
                                        <div class="text_info">
                                            {{$apartment['description']}}
                                            <div class="text_info_shade"></div>
                                        </div>
                                    </div>
                                    <div class="price_info">
                                        <span class="price_w">Prezzo:</span>
                                        <span class="price_v">€ {{$apartment['price_per_day']}}</span>
                                    </div>
                                    <div class="card_apt_footer">
                                        <div class="icon area">
                                            <i class="fa fa-home" aria-hidden="true"></i>{{$apartment['square_metres']}}
                                            <sup>2</sup>
                                        </div>
                                        <div class="icon room">
                                            <i class="fa fa-bed" aria-hidden="true"></i>{{$apartment['beds_number']}}
                                        </div>
                                        <div class="icon bath">
                                            <i class="fa fa-bath"
                                               aria-hidden="true"></i>{{$apartment['toilets_number']}}
                                        </div>
                                        @if ($apartment['is_visible'] == 1)
                                            {{'Appartamento visibile'}}
                                        @else {{'Appartamento non visibile'}}
                                        @endif
                                        <a href="{{route('delete_apartment', $apartment['id'])}}">DELETE</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                </div>
                <div id="map-div"></div>
                @endauth
            </div>
        </div>
    </div>
@endsection
