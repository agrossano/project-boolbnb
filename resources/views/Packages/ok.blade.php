@extends('layouts.app')
@section('panel_main')
    {{$message}}

    <a href="{{route('show_profile')}}">Torna indietro</a>
@endsection
