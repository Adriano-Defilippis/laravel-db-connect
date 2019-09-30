<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $type }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    </head>
    <body>
      <header class="bg_{{ $color }}">
        @include ('elements.header')
      </header>

      <div class="container">

        <h1>All {{ $type }} </h1>

          @yield('content')

      </div>




      <footer class="bg_{{ $color }}">
        @include('elements.footer')
      </footer>

    </body>
</html>
