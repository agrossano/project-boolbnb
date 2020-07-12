@extends('layouts.app')
@section('main')
    {{$message}}

    <a href="{{route('showPackages')}}">Torna ai pacchetti</a>
@endsection
