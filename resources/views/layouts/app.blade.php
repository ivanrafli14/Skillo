<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Skillo</title>
  <link rel="icon" type="image/svg+xml"
    href="{{ asset('assets/brand-logo.png') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;600;700&display=swap"
    rel="stylesheet" />
  @vite('resources/css/app.css')
</head>

<body>
  @include('partials.navbar')
  <main>
    @yield('content')
  </main>
  @include('partials.footer')
  
</body>

</html>
