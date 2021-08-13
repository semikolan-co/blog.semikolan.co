<?php
 $title=$blog->title.' | Semikolan Blogs';
 $keyword=$blog->tags.' ';
 $description= str_replace("&nbsp;"," ",substr(strip_tags($blog->content), 0, 300))."...";
 $imagepath='https://blog.semikolan.co/public/uploads/ft_img/'.$blog->image;
 $published_time = $blog->created_at;
 $modified_time = $blog->updated_at;
 
 ?>

@extends('layouts.app')

@section('content')

<style>
  blockquote {
    border-left: 4px solid #eee9;
    padding-left: 2%;
    margin-left: 2%;
    border-radius: 5px

  }
  #social-links ul {
    padding-left: 0;
  }
  #social-links li {
    display: inline-block;
    margin-right: 1.4%;
  }
  .blogcontent *{
    color:#fffa ;



    
  /* These are technically the same, but use both */
  overflow-wrap: break-word;
  word-wrap: break-word;

  -ms-word-break: break-all;
  /* This is the dangerous one in WebKit, as it breaks things wherever */
  word-break: break-all;
  /* Instead use this non-standard one: */
  word-break: break-word;

  /* Adds a hyphen where the word breaks, if supported (No Blink) */
  -ms-hyphens: auto;
  -moz-hyphens: auto;
  -webkit-hyphens: auto;
  hyphens: auto;
  }
  .anchor{
    color: #fffa;
    text-decoration: none;

  }
  .anchor:hover{
    color:#fff !important; 
  }
  .blogcontent a {    
    color: var(--green) ;
    text-decoration: none;
  }
</style>

<link rel="stylesheet" href="/public/vendor/prism/prism.css">
<script src="/public/vendor/prism/prism.js"></script>
<style>
  
  :not(pre) > code[class*="language-"], pre[class*="language-"] {
        background: var(--darkerShade);]
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
          <h5 class="mb-3"> Last Updated on {{date("d M Y", strtotime(substr($blog->updated_at, 0, 11)))}} by {{$blog->authorname}}</h5>
          <h5 class="mb-3">{{$blog->readtime}} mins read</h5>
          {{-- <a class="btn btn-outline-light btn-lg" href="#!" role="button"
            data-toggle="modal" data-target="#subscribeModal" >Subscribe</a
          > --}}
     {{-- <button type="button" class="btn btn-outline-light btn-lg" data-toggle="modal" data-target="#subscribeModal">Subscribe</button> --}}

        </div>
      </div>
    </div>
  </div>

<div class="blogcontent" style="background: var(--darkestShade);color:#fffa;font-size:1.2em;word-spacing:0.16em;">
  <div class=" row mx-3 py-5">
  <div class="my-3 p-1 px-md-3 px-lg-5 col-md-8" style="text-align: justify;">
    <img src="/public/uploads/ft_img/{{$blog->image}}" alt="" style="width:100%;border-radius: 10px;margin-bottom:20px">
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
  <div class="mt-3"> {!! $shareComponent !!}</div>
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
