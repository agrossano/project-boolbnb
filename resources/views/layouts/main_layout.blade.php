<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel='stylesheet' type='text/css' href='https://api.tomtom.com/maps-sdk-for-web/cdn/5.x/5.37.2/maps/maps.css'/>
  <script src='https://api.tomtom.com/maps-sdk-for-web/cdn/5.x/5.37.2/maps/maps-web.min.js'></script>
  <title>Home</title>

  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/animate.css">
  <link rel="shortcut icon" href="https://cdn2.iconfinder.com/data/icons/social-icons-33/128/Airbnb-512.png">


  <script src="/js/app.js"></script>

</head>
<body>

  <header class="header">
    @include('components.header')
  </header>
  <div class="main">
    @yield('main')
  </div>
  <div class="footer">
    @include('components.footer')
  </div>
</body>
</html>
