<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <style>
    *{
      margin:0;
      padding:0;
      box-sizing: border-box;
    }
      :root{
        --darkestShade:#0d1117;
        --darkerShade:#161b22;
        --green:#A8E5A9;
        --yellow:#FBCC7C;
        --blue:#5B9CF8;
        --pink:#F264D4;
        --lightGreen:#80D1E4;
        --lightGrey:#87CBE2;
      }
      body{
        background: var(--darkestShade);
        color:#fffa;
      }
  </style>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta charset='UTF-8'>
     <meta name='keywords' content='{{$keywords ?? ""}},blog,semikolan,technical,programming,blogs'>
     <meta name='description' content='Semikolan Blogs is a platform where you can write technical blogs, read useful technical content related to various fields including Website Development, Mobile Appplication Development, Machine Learning, Blockchain and almost everything technological you can think of.'>
     <meta name='subject' content='SemiKolan Blogs'>
     <meta name='copyright' content='SemiKolan'>
     <meta name='language' content='ES'>
     <meta name='summary' content='Semikolan Blogs is a platform where you can write technical blogs, read useful technical content related to various fields including Website Development, Mobile Appplication Development, Machine Learning, Blockchain and almost everything technological you can think of.'>
     <meta name='Classification' content='Education/Programming'>
     <meta name='author' content='SemiKolan, contact@semikolan.co'>
     <meta name='designer' content='SemiKolan'>
     <meta name='reply-to' content='contact@semikolan.co'>
     <meta name='owner' content='SemiKolan'>
     <meta name='category' content='Education'>
     <meta name='subtitle' content='A Platform to create and find all your Technical solutions.'>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Semikolan Blogs | Never Stop Learning' }}</title>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <!-- Fonts --><!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> --}}
<!-- Styles -->
<link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
     
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"> </script>
<style>
  
  .form-control{
        background: var(--darkestShade);color:#fffa;
        border:none;
    }
    .form-control:active,.form-control:hover,.form-control:focus{
        background: var(--darkestShade);color:#fffa;
    }
</style>
</head>
<body>
  <div id="app">
    @include('flash')
    @include('components.header')
    
{{-- <div id="the-basics">
  <input class="typeahead" type="text" placeholder="States of USA">
</div> --}}
    @yield('content')
    @include('components.footer')
    
  </div>
</body>
</html>
