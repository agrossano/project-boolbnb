<div class="col-md-3">
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
        <li class="active">
          <a href="{{route('create_apartment')}}">
          <i class="glyphicon glyphicon-home"></i>
          Inserisci nuovo appartamento </a>
        </li>
        <li>
          <a href="#">
          <i class="glyphicon glyphicon-user"></i>
          Leggi messaggi</a>
        </li>
      </ul>
    </div>


      <div class="view light bordered">

          <div class="row list-separated user-stat">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="uppercase user-stat-title"> 3 </div>
                <div class="uppercase user-stat-text"> Appartamenti </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="uppercase user-stat-title"> 2 </div>
                <div class="uppercase user-stat-text"> Messaggi </div>
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



