@extends('layouts.app')

@section('content')

 <div
    class="p-5 text-center bg-image"
    style="
      background-image: url('/public/img/post-bg/post-bg{{rand(0,7)}}.jpg');
      height: 300px;
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3 display-4 font-weight-bold">{{$blog->title}}</h1>
          <h4 class="mb-3">{{$blog->subtitle}}</h4>
          <h6 class="mb-3"><i>Posted by Author Name on 18-06-2021</i></h6>
          {{-- <a class="btn btn-outline-light btn-lg" href="#!" role="button"
            data-toggle="modal" data-target="#subscribeModal" >Subscribe</a
          > --}}
     <button type="button" class="btn btn-outline-light btn-lg" data-toggle="modal" data-target="#subscribeModal">Subscribe</button>

        </div>
      </div>
    </div>
  </div>


  <div class=" row mx-3 my-5">
  <div class="container my-3 px-5 col-8">
  {!!$blog->content!!}
     <p style=""><pre style="white-space:pre-wrap;font-size:1.3em"></pre></p>
     
     <button type="button" class="btn mt-3 btn-primary" data-toggle="modal" data-target="#reportModal">Report this Blog</button>
    </div>
    <div class="col-4 my-3">
     @include('modals.reportnew')
    </div>
  </div>



@include('modals.report')
@include('modals.subscribe')
@endsection
