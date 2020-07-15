@extends('layouts.app')

@section('panel_main')
    <ul>
        @foreach($messages as $message)
            <li>Messaggio per: <b>{{$message->apartment->title}} </b>in
                data {{date('d-m-Y H:i:s',strtotime($message->created_at))}}</li>
            <li>
                Mail address: {{$message->email}}<br>
                Text: {{$message->text}}
            </li><br><br>

        @endforeach
        <a href="{{route('show_profile')}}">Torna indietro</a>
@endsection
