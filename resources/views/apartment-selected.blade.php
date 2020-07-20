@extends('layouts.main_layout')

@section('main')

<div class="search container">

  <div class="row">
    <div class="col-lg-12">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
          <form action="{{route('apartment-selected')}}" method="post" novalidate="novalidate">
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
            <input type="search" id="search-app" name="address" class="form-control search-slt"
              placeholder="Dove vuoi andare?" value="">
            <input type="hidden" id="lat" name="lat" value="">
            <input type="hidden" id="lon" name="lon" value="">
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
          <input type="number" class="form-control search-slt" placeholder="Numero stanze">
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
          <input type="number" class="form-control search-slt" name="beds_number" placeholder="Numero letti" value="">
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
          <button type="submit" class="btn btn-danger wrn-btn">Cerca</button>
        </div>
      </div>
    </div>
  </div>


  <div class="col-md-12 search-result">
    @if (count($apartmentSelected) > 0)
    <h1>La tua ricerca ha prodotto i seguenti risultati:</h1>
    @elseif (count($apartmentSelected) === 0)
    <h1>Nessun appartamento corrispondente ai tuoi criteri di ricerca</h1>
    @endif
  </div>


</div>

</div>


<div class="container pt-5">

  <div class="row">
    @foreach($apartmentSelected as $eachApartment)

    <div class="col-md-3 search-card">
      <div class="card_apt">
        <div class="card_apt_header" style="background: url({{$eachApartment->image}}) 50% 0% no-repeat">

          <!--IMMAGINE DI SFONDO-->
        </div>
        <div class="card_apt_content">
          <div class="address">

            <i class="fa fa-map-marker" aria-hidden="true"></i>
            {{$eachApartment-> title}}
          </div>
          <div class="text_info">
            {{$eachApartment-> description}}
            <div class="text_info_shade"></div>
          </div>
        </div>
        <div class="price_info">
          <span class="price_w">Prezzo:</span>
          <span class="price_v">€ {{$eachApartment->price_per_day}}</span>
        </div>
        <div class="card_apt_footer">
          <div class="icon area">
            <i class="fa fa-home" aria-hidden="true"></i>{{$eachApartment->square_metres}}
            <sup>2</sup>
          </div>
          <div class="icon room">
            <i class="fa fa-bed" aria-hidden="true"></i>{{$eachApartment->beds_number}}
          </div>

          <div class="icon bath">
            <i class="fa fa-bath" aria-hidden="true"></i>{{$eachApartment->toilets_number}}
          </div>

          <div class="card-buttons d-flex">

            <div class="mb-2">
              <a href="{{route('showApartment', $eachApartment ->id)}}" class="btn btn-primary">Mostra
                appartamento</a>
            </div>

          </div>

        </div>
      </div>

    </div>

    @endforeach

  </div>

</div>











@endsection