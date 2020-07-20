@extends('layouts.app')
@section('panel_main')

<ul>
  <div class="packages packages-modifier">
    @if ($package->name == "basic")
    <li>
    <li class="pack-title">{{$package->name}} Pack</li>
    <li>€ {{$package->price_of_package}}/{{$package->number_of_hours}} ore</li><img src="/assets/images/bronze.png"
      alt="">{{$package->name}}</li>
    @elseif ($package->name == "medium")
    <li>
    <li class="pack-title">{{$package->name}} Pack</li><img src="/assets/images/silver.png" alt=""></li>
    @elseif ($package->name == "gold")
    <li>
    <li class="pack-title">{{$package->name}} Pack</li>
    <li>€ {{$package->price_of_package}}/{{$package->number_of_hours}} ore</li><img src="/assets/images/gold.png"
      alt=""></li>
    @endif
  </div>
  <li>
    <div id="dropin-container"></div>
  </li>

  <li class="text-center">
    <a id="submit-button" class="btn btn-primary btn-pack">Acquista</a></li>
  <br><br>
</ul>

<script src="https://js.braintreegateway.com/web/dropin/1.22.1/js/dropin.min.js"></script>
<script>
  var button = document.querySelector('#submit-button');

        braintree.dropin.create({
            authorization: '{{$clientToken}}',
            container: '#dropin-container'
        }, function (createErr, instance) {
            button.addEventListener('click', function () {
                instance.requestPaymentMethod(function (err, payload) {
                    if (err) {

                    } else {
                        console.log(payload)
                        window.location.replace('{{$url}}' + '?nonce=' + payload.nonce);
                    }
                });
            });
        });
</script>
@endsection