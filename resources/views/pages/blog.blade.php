<?php $title=$blog->title.' | Semikolan Blogs'; ?>

@extends('layouts.app')

@section('content')

<style>
  .blogcontent *{
    color:#fffa !important;
  }
</style>

 <div
    class="text-center bg-image"
    style="
      background-image: url('/public/img/post-bg/post-bg{{rand(0,7)}}.jpg');
      /* min-height: ; */
    "
  >
    <div class="p-5 mask" style="height:100%;background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3 display-4 font-weight-bold">{{$blog->title}}</h1>
          <h6 class="mb-3"><i>Posted by {{$blog->author}} on {{substr($blog->updated_at, 0, 11)}}</i></h6>
          <h6 class="mb-3"><i>Read time (in Minutes): {{$blog->readtime}}</i></h6>
          {{-- <a class="btn btn-outline-light btn-lg" href="#!" role="button"
            data-toggle="modal" data-target="#subscribeModal" >Subscribe</a
          > --}}
     <button type="button" class="btn btn-outline-light btn-lg" data-toggle="modal" data-target="#subscribeModal">Subscribe</button>

        </div>
      </div>
    </div>
  </div>

<div class="blogcontent" style="background: var(--darkestShade);color:#fffa;font-size:1.2em;word-spacing:0.2em;">
  <div class=" row mx-3 py-5">
  <div class="my-3 px-5 col-md-8" style="text-align: justify;">
    <h3 style="border: 1px solid black; border-radius: 2px;">{{$blog->tags}}</h3>
    {!!$blog->content!!}
    </div>
    <div class="col-md-4 my-3">
     @include('modals.recentblogs')
     @include('modals.reportnew')
    </div>
  </div>
</div>


@include('modals.report')
@include('modals.subscribe')
@endsection
