<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('page_title', 'Mia Crud')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>

  <body>

    @include('includes.navbar')

    @yield('content')


    <script src="{{ asset('js/app.js') }}"></script>

  </body>
</html>
