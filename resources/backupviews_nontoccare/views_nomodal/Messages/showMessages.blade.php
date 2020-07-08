@extends('layouts.main_layout')

@section('main')
    <ul>
        @foreach($messages as $message)
            <li>
                Mail address: {{$message->email}}<br>
                Text: {{$message->text}}
            </li><br><br>
        @endforeach
        <a href="{{route('createMessage',$message->apartment_id)}}">Ask informations</a>
@endsection
