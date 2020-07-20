@extends('layouts.app')
@section('panel_main')

<div class="container">
  <div id="accordion">
    @foreach($messages as $index => $message)
    <div class="card">
      <div class="card-header ">
        <a class="card-link d-flex flex-column" data-toggle="collapse" href="#collapse-{{ $index }}">
          <div class="messages-header">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <span>Messaggio per l'appartamento <strong>{{ $message->apartment->title }}</strong><span>
          </div>
          <div class="messages-header">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <span>Ricevuto il <strong>{{date('d-m-Y H:i:s',strtotime($message->created_at))}}</strong></span>
          </div>
          <div class="messages-header">
            <i class="fa fa-reply" aria-hidden="true"></i>
            Da: <strong>{{$message->email}}</strong>
          </div>
        </a>
      </div>
      <div id="collapse-{{ $index }}" class="collapse" data-parent="#accordion">
        <div class="card-body">
          {{$message->text}}
        </div>
      </div>
    </div>
    @endforeach
    @endsection