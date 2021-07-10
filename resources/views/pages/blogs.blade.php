{{-- <?php $title='Semikolan Blogs | Homepage'; ?> --}}

@extends('layouts.app')

@section('content')

 <!-- <div
    class="p-5 text-center bg-image"
    style="
      background-image: url('/img/post-bg/post-bg{{rand(0,7)}}.jpg');
      height: 300px;
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3 display-4 font-weight-bold">All Blogs</h1>
          <h4 class="mb-3">Just a Random line that I will correct in Future</h4>
       
     <button type="button" class="btn btn-outline-light btn-lg" data-toggle="modal" data-target="#subscribeModal">Subscribe</button>

        </div>
      </div>
    </div>
  </div>
 -->

 <div
    class="text-center bg-image"
    style="
      background-image: url('/public/img/post-bg/post-bg{{rand(0,7)}}.jpg');
      /* min-height: 300px; */
    "
  >
    <div class="p-5 mask" style="height:100%;background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3 display-4"  style="font-weight:bold">{{$title1}}</h1>
          <h4 class="mb-3">{{$title2}}</h4>
       
        </div>
      </div>
    </div>
  </div>
<div style="background:var(--darkestShade); color:#fffa; padding: 50px 0;"> 


<div class="container py-5">
    <div class="row">
{{-- @for ($i = 0; $i < 3; $i++) --}}
@foreach ($blogs as $blog)
<a  class="my-4" href="{{ route('blog', ['slug' => $blog->slug]) }}"  style="color:#fffa; text-decoration:none ;">
<div class="col-12 mx-auto row"  style="border:3px solid #fff7;">
<div class="col-md-5 p-0" >
<img class="w-100" src="https://html.com/wp-content/uploads/html-tutorial-beginners-header.jpg" alt="Card image cap">
</div>
<div class="col-md-7 d-flex flex-column align-items-start justify-content-center py-md-0 py-3" style="padding:0 5%";>
  <h2 class="">{{$blog->title}}</h2>
  <p>{{ str_replace("&nbsp;"," ",substr(strip_tags($blog->content), 0, 100)) }}...</p>
            <p class=""> By {{$blog->author}}</p>
</div>
</div>
</a>
@endforeach
{{-- @endfor --}}
</div>
<ul class="pagination justify-content-center mt-5 pagination-lg">
  <li class="page-item 
  @if ($prev==0)
    disabled
@endif
  "><a class="page-link" href="{{ route('blogs', ['id' => ($id-1)]) }}">Previous</a></li>
  <li class="page-item
  
  @if ($next==0)
    disabled
@endif
  "><a class="page-link" href="{{ route('blogs', ['id' => ($id+1)]) }}">Next</a></li>
</ul>

</div>
</div>

@include('modals.subscribe')

<!-- <div class="col-lg-4 col-md-6 col-sm-12 p-1" >
    <div class="card" style="height: 100%">
        <img class="card-img-top" src="https://html.com/wp-content/uploads/html-tutorial-beginners-header.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$blog->title}}</h5>
            <p class="card-text">{{$blog->subtitle}}</p>
            {{-- <a class="btn btn-primary">Read More..</a> --}}
          </div>
          <div class="card-foot text-right pb-4 pr-4  text-secondary" style="//color:#b8b4b4">
            <a href="{{ route('blog', ['slug' => $blog->slug]) }}" class=" text-secondary" style="//color:#b8b4b4"><i class="fas fa-eye"></i> Read More</a>
            <span class="ml-4" style="cursor: pointer"><i class="far fa-bookmark"></i></span>
          </div>
    </div>
</div> -->
@endsection

