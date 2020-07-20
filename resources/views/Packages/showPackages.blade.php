@extends('layouts.app')
@section('panel_main')


<div class="container">
  <div class="row">
    <div class="col-md-offset-3">
    </div>
    @foreach($packages as $package)
    <div class="card card-block mb-3 item-card col-md-4 col-lg-4">
      <ul class="packages">
        <div class="medal">
          @if ($package->name == "basic")
          <li><img src="/assets/images/bronze.png" alt=""></li>
          @elseif ($package->name == "medium")
          <li><img src="/assets/images/silver.png" alt=""></li>
          @elseif ($package->name == "gold")
          <li><img src="/assets/images/gold.png" alt=""></li>
          @endif
        </div>
        <li class="pack-title">{{$package->name}} Pack</li>
        <li>€ {{$package->price_of_package}}/{{$package->number_of_hours}} ore</li>
        <li><a href="{{route('detailsPackage',['id'=>$package->id,'id_apartment'=>$id_apartment])}}"
            class="btn btn-primary btn-pack">Scegli ></a></li>
        <br><br>
      </ul>
    </div>
    @endforeach

  </div>


</div>









@endsection