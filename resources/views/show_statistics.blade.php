@extends('layouts.app')
@section('panel_main')

{{'Il numero delle visite è ' . $count_views}}
<div class="row">
  <input id="id" type="hidden" name="" value="{{$apartment -> id}}">
  <div class="col-md-6">
    <canvas id="views-line"></canvas>
  </div>
  <div class="col-md-6">
    <canvas id="views-bar"></canvas>
  </div>
</div>


{{'Il numero dei messaggi è ' . $count_messages}}

<div class="row">
  <div class="col-md-6">
    <canvas id="messages-line"></canvas>
  </div>
  <div class="col-md-6">
    <canvas id="messages-bar"></canvas>
  </div>
</div>


@endsection