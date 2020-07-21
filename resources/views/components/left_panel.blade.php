<div class="col-md-4 col-lg-3">
  <div class="user-sidebar">

    <div class="user-userpic">
      <img src="/assets/images/placeholder.png" class="img-responsive" alt="">
    </div>

    <div class="user-usertitle">
      <div class="user-usertitle-name">
        {{$user['name']}}
      </div>

    </div>

    <div class="user-usermenu">
      <ul class="nav flex-nowrap">
        <li class="">
          <a href="{{route('show_profile')}}">
            Lista appartamenti </a>
        </li>
        <li class="">
          <a href="{{route('create_apartment')}}">
            Inserisci nuovo appartamento </a>
        </li>
        <li>
          <a href="{{route('showMessages')}}">
            Leggi messaggi</a>
        </li>
      </ul>
    </div>

    <div class="view light bordered">

      <div class="row list-separated user-stat">
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="uppercase user-stat-title">
            @if($user->apartments->count()===0)
            0
            @else{{$user->apartments->count()}}
            @endif
          </div>
          <div class="uppercase user-stat-text"> Appartamenti</div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="uppercase user-stat-title">

            {{$user->messages->where('is_read', 0)->count()}}

          </div>

          <div class="uppercase user-stat-text">

            @if($user->messages->where('is_read', 0) -> count() === 0 || $user->messages->where('is_read', 0) -> count()
            > 1 )
            Messaggi da leggere
            @else
            Messaggio da leggere
            @endif

          </div>
        </div>
      </div>

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

  </div>
</div>