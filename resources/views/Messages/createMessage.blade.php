@extends('layouts.main_layout')
@section('main')

    <div style="margin-top: 100px">
        <li>Invia Messaggio a: {{$apartment->title}}</li><!-- stile impovvisato!-->
        <form action="{{route('storeMessage',$apartment->id)}}" method="post" autocomplete="on">
            @method('POST')
            @csrf
            <label for="email">Your email</label>
            <input type="text" name="email" value="">
            <label for="text">Text message</label>
            <input type="text" name="text" value="">
            <input type="submit" value="Send Message">
        </form>
        <a href="{{route('home')}}">Torna indietro</a>
    </div>
@endsection
