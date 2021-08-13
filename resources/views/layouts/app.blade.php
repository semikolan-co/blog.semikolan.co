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
     <meta name='description' content='{{ $description ?? "Semikolan Blogs is a platform where you can write technical blogs, read useful technical content related to various fields including Website Development, Mobile Appplication Development, Machine Learning, Blockchain and almost everything technological you can think of."}}'>
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
     <meta name="monetization" content="$ilp.uphold.com/H82qqmD6EFq2">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/public/img/favicon.png" type="image/x-icon">









<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="{{ $title ?? 'Semikolan Blogs | Never Stop Learning' }}">
<meta itemprop="description" content="{{ $description ?? 'Semikolan Blogs is a platform where you can write technical blogs, read useful technical content related to various fields including Website Development, Mobile Appplication Development, Machine Learning, Blockchain and almost everything technological you can think of.'}}">
<meta itemprop="image" content="{{$imagepath ??  ''}}">

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@semikolanco">
<meta name="twitter:title" content="{{ $title ?? 'Semikolan Blogs | Never Stop Learning' }}">
<meta name="twitter:description" content="{{ $description ?? 'Semikolan Blogs is a platform where you can write technical blogs, read useful technical content related to various fields including Website Development, Mobile Appplication Development, Machine Learning, Blockchain and almost everything technological you can think of.'}}">
<meta name="twitter:creator" content="@semikolanco">
<!-- Twitter summary card with large image must be at least 280x150px -->
<meta name="twitter:image:src" content="{{$imagepath ??  ''}}">

<!-- Open Graph data -->
<meta property="og:title" content="{{ $title ?? 'Semikolan Blogs | Never Stop Learning' }}" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://blog.semikolan.co/" />
<meta property="og:image" content="{{$imagepath ??  ''}}" />
<meta property="og:description" content="{{ $description ?? 'Semikolan Blogs is a platform where you can write technical blogs, read useful technical content related to various fields including Website Development, Mobile Appplication Development, Machine Learning, Blockchain and almost everything technological you can think of.'}}" />
<meta property="og:site_name" content="SemiKolan Blogs | Never stop Learning" />
<meta property="article:published_time" content="{{$published_time ?? ''}}" />
<meta property="article:modified_time" content="{{$updated_time ?? ''}}" />
<meta property="article:section" content="Technology" />
<meta property="article:tag" content="Education" />
{{-- <meta property="fb:admins" content="Facebook numberic ID" /> --}}



























    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-S8M4SXXD2B"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-S8M4SXXD2B');
    </script>

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

<link rel="stylesheet" href="/public/vendor/prism/prism.css">
<script src="/public/vendor/prism/prism.js"></script>
<style>
  
  :not(pre) > code[class*="language-"], pre[class*="language-"] {
        background: var(--darkerShade);
        /* color: var(--lightGreen);
        font-family: monospace;
        white-space: pre;
        word-wrap: normal; */
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
