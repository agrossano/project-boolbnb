{{-- <div class="col-md-3">
  <div class="user-sidebar">

    @auth
    @foreach ($apartments as $apartment)
          @if ($user['id'] == $apartment['user_id'])

  <div class="card_apt card_apt_panel wow fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
    <div class="card_apt_content">
      <div class="adress">
        
        <div class="imgpanel">
          <img class="img_panel" src="{{asset($apartment -> image)}}" alt="">
        </div>
        <br>
        
        TITOLO:  {{$apartment['title']}}  <br>
        STANZE:  {{$apartment['rooms_number']}} <br>
        INDIRIZZO:  {{$apartment['location_id']}} <br>
        SERVIZI: <br>
        

          @foreach ($apartment -> services as $apartment_service)
            {{$apartment_service -> type}}
          @endforeach
          <a href="{{route('edit_apartment', $apartment['id'])}}">Modifica appartamento</a>
      
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
        <i class="fa fa-home" aria-hidden="true"></i>{{$apartment['square_metres']}}<sup>2</sup>
      </div>
      <div class="icon room">
        <i class="fa fa-bed" aria-hidden="true"></i>{{$apartment['beds_number']}}
      </div>
      <div class="icon bath">
        <i class="fa fa-bath" aria-hidden="true"></i>{{$apartment['toilets_number']}}
      </div>
    </div> 
  </div>
  @endif
  @endforeach
@endauth                
                                
  </div>
</div> --}}