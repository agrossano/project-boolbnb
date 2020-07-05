<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Omini Home</title>

  <link rel="stylesheet" href="/css/app.css">
  <script src="/js/app.js"></script>

</head>
<body>
  <div class="header">
    @include('components.header')
  </div>
  <div class="main">
    @yield('main')
  </div>
  <div class="footer">
    @include('components.footer')
  </div>
</body>
</html>