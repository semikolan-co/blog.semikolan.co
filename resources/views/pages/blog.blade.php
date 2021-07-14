<?php
 $title=$blog->title.' | Semikolan Blogs';
 $keyword=$blog->tags.' ';
 ?>

@extends('layouts.app')

@section('content')

<style>
  .blogcontent *{
    color:#fffa !important;
  }
  .anchor{
    color: #fffa;
    text-decoration: none;

  }
  .anchor:hover{
    color:#fff !important; 
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
          <h1 class="mb-3 display-4" style="font-weight:bold">{{$blog->title}}</h1>
          <h5 class="mb-3"> Last Updated on {{date("d M Y", strtotime(substr($blog->updated_at, 0, 11)))}} by {{$blog->author}}</h5>
          <h5 class="mb-3">{{$blog->readtime}} mins read</h5>
          {{-- <a class="btn btn-outline-light btn-lg" href="#!" role="button"
            data-toggle="modal" data-target="#subscribeModal" >Subscribe</a
          > --}}
     {{-- <button type="button" class="btn btn-outline-light btn-lg" data-toggle="modal" data-target="#subscribeModal">Subscribe</button> --}}

        </div>
      </div>
    </div>
  </div>

<div class="blogcontent" style="background: var(--darkestShade);color:#fffa;font-size:1.2em;word-spacing:0.2em;">
  <div class=" row mx-3 py-5">
  <div class="my-3 px-5 col-md-8" style="text-align: justify;">
    {!!$blog->content!!}
  <p class="mt-4">Category: <a class="anchor" href="/subcategory/{{$blog->subcategory}}">{{$blog->subcategoryname}}</a> | <a class="anchor" href="/category/{{$blog->category}}">{{$blog->categoryname}}</a> </p> 
    <?php 
    $tagstring = [];
    foreach (explode(",",$blog->tags) as $tag) {
      array_push($tagstring,'<a class="anchor" href="/tag/'.trim($tag," ").'">'.ucwords($tag).'</a>');
    } 
    ?>
  <p class="mt-2">Relavent Tags: 
  {!! join(", ",$tagstring) !!}
  </p>
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
