<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="monetization" content="$ilp.uphold.com/H82qqmD6EFq2">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-S8M4SXXD2B"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-S8M4SXXD2B');\
</script>
  <title>Admin Panel</title>


  
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>

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
<!-- MDB -->
{{-- <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
  rel="stylesheet"
/> --}}

 <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/sidebar.css') }}" rel="stylesheet">
    
                    <!-- Include stylesheet -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right bg-dark text-white pt-2" id="sidebar-wrapper">
      <a class="sidebar-heading text-white font-weight-bold" href="{{ route('index')}}">{{env('BRAND_NAME')}} </a>
      <div class="list-group list-group-flush">
        <a href="{{ route('dash')}}" class="list-group-item list-group-item-action text-white bg-dark">Dashboard</a>
        <a href="{{ route('ablogs')}}" class="list-group-item list-group-item-action text-white bg-dark">All Blogs</a>
        <a href="{{ route('email')}}" class="list-group-item list-group-item-action text-white bg-dark">Mailbox</a>
        <a href="{{ route('subscriber')}}" class="list-group-item list-group-item-action text-white bg-dark">Subscribers</a>
        <a href="{{ route('reports')}}" class="list-group-item list-group-item-action text-white bg-dark">Reports</a>
        {{-- <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Status</a> --}}
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-dark" id="menu-toggle"><i class="fa fa-bars"></i></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('blogs')}}">All Blogs</a>
            </li>
            <li>
              <form action="/logout" method="post" >
                @csrf 
                <button type="submit" class="btn btn-sm btn-danger" value="Logout">Logout</button>
              </form>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
              </a>
              {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class=" dropdown-item" href="{{ route('addblog') }}"><i class="fa fa-plus"></i> Add Blog</a>
                <a class=" dropdown-item" href="{{ url('/logout') }}"><i class="fa fa-sign-out-alt"></i> Logout</a>
              </div> --}}
            </li>
          </ul>
        </div>
      </nav>

      @yield('content')
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  
  <!-- /#wrapper -->
 <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"> </script>

  <!-- Bootstrap core JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>