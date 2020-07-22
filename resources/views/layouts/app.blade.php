<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="https://api.tomtom.com/maps-sdk-for-web/cdn/5.x/5.41.0/maps/maps-web.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2/dist/Chart.min.js"></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">


  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://api.tomtom.com/maps-sdk-for-web/cdn/5.x/5.41.0/maps/maps.css">
</head>

<body>
  <header class="header">
    @include('components.dashboard_header')
  </header>
  <div class="main">
    <main class="py-4">
      <div class="container-fluid">
        <div class="row user">
          @include('components.left_panel')
          <div class="col-md-7">
            <div class="user-apartment">
              @yield('panel_main')
            </div>
          </div>
          @include('components.right_panel')
        </div>
      </div>
    </main>
  </div>
  <div class="footer">
    @include('components.footer')
  </div>
  @yield('scripts')
</body>

</html>