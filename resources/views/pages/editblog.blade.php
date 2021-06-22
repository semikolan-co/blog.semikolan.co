@extends('layouts.admin')

@section('content')

    <div class="container-fluid mt-3">

        <div class="row">

            <div class="col-lg-8 col-md-10 mx-auto mb-5">


                <h3>{{$way}} Post</h3>
                <hr>
                <form name="sentMessage" id="contactForm" action="@if ($way=='Add')
                    /addblog
                @else
                    /edit/{{$blog->id}}
                @endif
                " method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Title</label>
                            <input name="title" type="text" value="{{$blog['title']}}" class="form-control" placeholder="Title" id="name"
                                required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>SubTitle</label>
                            <input name="subtitle" type="text" value="{{$blog['subtitle']}}" class="form-control" placeholder="Subtitle"
                                id="email" data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Author</label>
                            <input name="author" value="{{$blog['author']}}" type="text" class="form-control" placeholder="Author" id="phone"
                                required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <div class="custom-control custom-switch">
                                <input name="active" type="checkbox" class="custom-control-input" id="customSwitch1" 
                                @if ($blog['active'])
                                    checked
                                @endif
                                >
                                <label class="custom-control-label" for="customSwitch1">Active Status</label>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Content</label>
                            <textarea name="content" rows="25" class="form-control" placeholder="Content" id="editor"
                                required data-validation-required-message="Please enter a message.">{{$blog['content']}}</textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

<!-- Create the editor container -->
<div id="editr">
  <p>Hello World!</p>
  <p>Some initial <strong>bold</strong> text</p>
  <p><br></p>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
                    {{-- <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
               <label>Playlist</label>
               <select name="playlist" class="form-control" placeholder="Slug" id="playlist" required
                  data-validation-required-message="Please enter your phone number.">
                  <option value="basic-electronics">Basic Electronics</option>
                  <option value="arduino-tutorial">Arduino Tutorial</option>
                  <option value="diy">DIY</option>
                  <option value="sensor-module">Sensors and Module</option>
               </select>
               <p class="help-block text-danger"></p>
            </div>
         </div>
         <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
               <label>Fritzing Image</label>
               <input name="fritzing" value="" type="file" class="form-control" placeholder="Fritzing Image" id="phone"
                  data-validation-required-message="Please enter your phone number.">
               <p class="help-block text-danger"></p>
            </div>
         </div><div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
               <label>Schematic Diagram</label>
               <input name="schematic" value="" type="file" class="form-control" placeholder="Schematic Diagram" id="phone"
                  data-validation-required-message="Please enter your phone number.">
               <p class="help-block text-danger"></p>
            </div>
         </div>
         <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
               <label>Link</label>
               <input name="link"  value="" type="text" class="form-control" placeholder="Link" id="phone" required
                  data-validation-required-message="Please enter your phone number.">
               <p class="help-block text-danger"></p>
            </div>
         </div>
         <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
               <label>Tags</label>
               <input name="tags" type="text" class="form-control" placeholder="Tags" value="" id="phone"    data-validation-required-message="Please enter your phone number.">
               <p class="help-block text-danger"></p>
            </div>
         </div> --}}
                    <br>
                    <div id="success"></div>
                    <button type="submit" name="submit" class="btn btn-primary" id="sendMessageButton">Submit</button>
                </form>

            </div>





        </div>
    </div>
@endsection
