@extends('layouts.main_layout')

@section('main')

    <div style="margin-top: 100px"><!-- stile impovvisato!-->
        <form action="{{route('storeMessage',$apartment_id)}}" method="post">
            @method('POST')
            @csrf
            <label for="email">Your email</label>
            <input type="text" name="text" value="">
            <label for="text">Text message</label>
            <input type="text" name="text" value="">
            <input type="submit" value="Send Message">
        </form>

    </div>
@endsection
