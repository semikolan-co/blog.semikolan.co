@extends('layouts.admin')

@section('content')

    <div class="container-fluid mt-3">

        <div class="row">

            <div class="col-lg-8 col-md-10 mx-auto mb-5">


                <h3>{{ $way }} Post</h3>
                <hr>
                <form name="sentMessage" id="contactForm" action="@if ($way=='Add' ) /addblog
                @else
                                    /edit/{{ $blog->id }} @endif " method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Title</label>
                            <input name="title" type="text" value="{{ $blog['title'] }}" class="form-control"
                                placeholder="Title" id="name" required
                                data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Slug</label>
                            <input name="slug" value="{{ $blog['slug'] }}" type="text" class="form-control"
                                placeholder="Slug" id="phone" required
                                data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Read Time</label>
                            <input name="readtime" value="{{ $blog['readtime'] }}" type="text" class="form-control"
                                placeholder="5" id="phone" required
                                data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Tags</label>
                            <input name="tags" value="{{ $blog['tags'] }}" type="text" class="form-control"
                                placeholder="Technology" id="phone" required
                                data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>


                    <div class="control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Category</label>
                            <select name="category" required class="form-select form-select-lg"
                                aria-label=".form-select-lg example">
                                <option disabled>Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if ($blog['category'] == $category['id']) selected @endif>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Sub-Category</label>
                            <select name="subcategory" required class="form-select form-select-lg"
                                aria-label=".form-select-lg example">
                                <option selected disabled>Sub-Category</option>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <div class="custom-control custom-switch">
                                <input name="active" type="checkbox" class="custom-control-input" id="customSwitch1" @if ($blog['active']) checked @endif>
                                <label class="custom-control-label" for="customSwitch1">Active Status</label>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Content</label>
                            <textarea name="content" rows="25" class="form-control" placeholder="Content" id="editor"
                                required
                                data-validation-required-message="Please enter a message.">{{ $blog['content'] }}</textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <!-- Create the editor container -->
                    <script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>
                    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                    <!-- include codemirror (codemirror.css, codemirror.js, xml.js, formatting.js) -->
                    <link rel="stylesheet" type="text/css"
                        href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.css">
                    <link rel="stylesheet" type="text/css"
                        href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.css">
                    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.js"></script>
                    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.js"></script>
                    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.js"></script>

                    <!-- include summernote css/js -->
                    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
                    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
                    <script>
                        // ClassicEditor
                        //     .create( document.querySelector( '#editor' ) )
                        //     .catch( error => {
                        //         console.error( error );
                        //     } );
                        $('#editor').summernote({
                            height: 350, //set editable area's height
                            codemirror: { // codemirror options
                                theme: 'monokai'
                            }
                        });
                    </script>

                    <br>
                    <div id="success"></div>
                    <button type="submit" name="submit" class="btn btn-primary" id="sendMessageButton">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            updateSubCategory();
        })
        $('select[name="category"]').on('change', function() {
            updateSubCategory();
        })

        function updateSubCategory() {
            $('select[name="subcategory"]').attr('disabled', true)
            var html = '<option selected disabled>Sub-Category</option>';
            var value = $('select[name="category"]').val();
            $.post('{{ route('getCategory') }}', {
                catId: value
            }, function(data, status) {
                // alert("Data: " + data + "\nStatus: " + status);
                data.forEach(cat => {
                    html += `<option value="${cat.id}">${cat.sname}</option>`
                });
                $('select[name="subcategory"]').html(html)
                $('select[name="subcategory"]').attr('disabled', false)

            });
        }
    </script>
@endsection
