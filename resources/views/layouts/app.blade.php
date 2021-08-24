<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.metatags')
    @include('layouts.gtags')
    @include('layouts.styles')
    <title>{{ $title ?? 'Semikolan Blogs | Never Stop Learning' }}</title>
    <script src="{{ asset('public/js/app.js') }}" defer></script>
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    @include('layouts.scripts')
</head>
<body>
  <div id="app">
    @include('flash')
    @include('components.header')
    @yield('content')
    @include('components.footer')
  </div>
</body>
</html>
