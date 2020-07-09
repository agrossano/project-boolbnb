<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
  
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/animate.css">
  
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