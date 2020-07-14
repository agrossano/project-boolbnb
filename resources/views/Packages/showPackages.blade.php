@extends('layouts.app')
@section('panel_main')


    @foreach($packages as $package)
        <ul>
            <li>Tipo: {{$package->name}}</li>
            <li>Numero di ore{{$package->number_of_hours}}</li>
            <li>Prezzo: {{$package->price_of_package}}</li>
            <li><a href="{{route('detailsPackage',['id'=>$package->id,'id_apartment'=>$id_apartment])}}">Acquista
                    ora</a></li>
            <br><br>
        </ul>
    @endforeach
@endsection

