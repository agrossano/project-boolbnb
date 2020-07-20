@extends('layouts.app')
@section('panel_main')
<div class="row">
  @auth
  @foreach ($apartments as $apartment)
  @if ($user['id'] == $apartment['user_id'])
  <div class="card card-block mb-3 item-card col-md-12 col-lg-6">
    <div class="imgpanel">
      <img class="img_panel" src="{{asset($apartment -> image)}}" alt="">
    </div>

    <div class="debugmsg text-center">

      <a href="{{route('createMessage', $apartment['id'])}}" class="">
        <h4 class="card-title text-center">{{$apartment['title']}}</h4>
      </a>

    </div>

    <div class="card_apt card_apt_panel card_apt-modifier">
      <div class="card_apt_content user_modifier card_apt_content_user">
        <div class="adress">

        </div>
        <div class="text_info">
          {{$apartment['description']}}
          <div class="text_info_shade"></div>
        </div>
      </div>
    </div>

    <div class="apt-options">

      <a href="{{route('showPackages',$apartment['id'])}}" class="btn btn-primary">Promuovi l'appartamento</a>
      <a href="{{route('edit_apartment', $apartment['id'])}}" class="btn btn-primary">Modifica appartamento</a>
      <a href="{{route('delete_apartment', $apartment['id'])}}" class="btn btn-primary">Elimina appartamento</a>

    </div>
  </div>

  @endif
  @endforeach
  @endauth
</div>
@endsection