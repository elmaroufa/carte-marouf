<!doctype html>
 <html lang="{{ app()->getLocale() }}">
  <head>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ page_title($title ?? "")}}</title>
  </head>
    <body>
    @include('layouts.partial._nav')
    <h1 class="text-center">
    @yield('moncontent')
    </h1>
    @yield('content')
    @include('layouts.partial.footer')
    <script src="{{ asset('js/myjquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    </body>
 </html>