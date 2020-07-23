@extends('layouts.main_layout')
@section('main')
<main class="py-4">
  <div class="container-fluid">
    <div class="row user">
      <div class="col-md-4 col-lg-3">
        <div class="user-sidebar selected">
          <div class="search container">
            <div class="row">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 pb-3">
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
                      <p>Dove</p>
                      <div class="search-app">
                      </div>
                      <input type="hidden" class="lat" name="lat" value="">
                      <input type="hidden" class="lon" name="lon" value="">     
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 pb-3">
                    <p>Stanze</p>
                    <input type="number" class="form-control search-slt" name="rooms_number"
                      placeholder="Numero stanze">
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 pb-3">
                    <p>Letti</p>
                    <input type="number" class="form-control search-slt" name="beds_number" placeholder="Numero letti"
                      value="">
                  </div>
                  <div class="col-lg-12">
                    <div class="slidecontainer">
                      <p>Raggio di ricerca: <span id="actualRange"></span> Km</p>
                      <input name="radius" type="range" min="1" max="100" value="20" class="slider" id="myRange">
                      
                    </div>
                  </div>
                </div>
                <div class="row pt-3">
                  <div class="col-lg-12 col-md-12 col-sm-12 services">
                    <p>Servizi:</p>
                    @foreach ($services as $service)
                    <input type="checkbox" name="services[]" value="{{$service -> id}}">
                    {{$service -> type}} <br>
                    @endforeach
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 p-2">
                  <button type="submit" class="btn btn-danger wrn-btn">Cerca</button>
                 </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <div class="user-apartment">
          <div class="container">
            <div class="row">
              <div class="col-md-12 search-result">
                @if (count($apartmentSelected) > 0)
                <h1>La tua ricerca ha prodotto i seguenti risultati:</h1>
                @elseif (count($apartmentSelected) === 0)
                <h1>Nessun appartamento corrispondente ai tuoi criteri di ricerca</h1>
                @endif
              </div>
            </div>
            <div class="row">
              @foreach($apartmentSelected as $eachApartment)
              {{-- <div class="row"> --}}
              <div class="card_apt col-md-12 col-lg-4 box" id="selected-modifier">
                <div class="card_apt_header" style="background: url({{$eachApartment->image}}) 50% 0% no-repeat">
                </div>
                <div class="card_apt_content" id="selected-modifier">
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
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</main>
<script>
  var slider = document.getElementById("myRange");
  var output = document.getElementById("actualRange");
  output.innerHTML = slider.value;
  
  slider.oninput = function() {
    output.innerHTML = this.value;
    document.getElementById("myRange").value = this.value;

  }
</script>
@endsection