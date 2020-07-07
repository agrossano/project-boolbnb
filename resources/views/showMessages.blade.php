@extends('layouts.main_layout')

@section('main')
    <ul>
        @foreach($messages as $message)
            <li>
                Mail address: {{$message->email}}<br>
                Text: {{$message->text}}
            </li><br><br>
        @endforeach
    </ul>

@endsection
