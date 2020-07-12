@extends('layouts.app')
@section('main')

    <ul>
        <li>Tipo: {{$package->name}}</li>
        <li>Numero di ore: {{$package->number_of_hours}}</li>
        <li>Prezzo: {{$package->price_of_package}}</li>


        <li>
            <div id="dropin-container"></div>
        </li>

        <li><a id="submit-button">Acquista</a></li>
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
