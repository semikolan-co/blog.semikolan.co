@extends('layouts.admin')

@section('content')

    <div class="container-fluid mt-3">

        <div class="row">

            <div class="col-lg-8 col-md-10 mx-auto mb-5">


                <h3>Mail</h3>
                <hr>
                <form name="sentMessage" id="contactForm" action="/sendmail" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="emails" id="emailbox" value="">
                    
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Title</label>
                            <input name="title" type="text" class="form-control" placeholder="Title" id="name"
                                required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Mail Content</label>
                            <textarea name="content" rows="25" class="form-control" placeholder="Content" id="editor"
                                required data-validation-required-message="Please enter a message."> </textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

<input type="checkbox" id="selectall" onClick="toggle(this)" /> <label for="selectall">Select/Unselect All</label><hr/>

@foreach ($subscribers as $subscriber)
<input type="checkbox" id="input{{$loop->iteration}}" onclick="updateSelect()"" name="foo" value="{{$subscriber->email}}"><label for="input{{$loop->iteration}}">{{$subscriber->email}}</label><br/>
    
@endforeach

<!-- Create the editor container -->
{{-- <div id="editr">
  <p>Hello World!</p>
  <p>Some initial <strong>bold</strong> text</p>
  <p><br></p>
</div> --}}
<script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>

<script>
function updateSelect() {
    var emails = []
     checkboxes = document.getElementsByName('foo');
    checkboxes.forEach(checkbox => {
        if (checkbox.checked) {
            emails.push(checkbox.value)
        }
    });
    var emaildata = emails.join("----");
    console.log(emaildata);
    $('#emailbox').val(emaildata)
    
}
function toggle(source) {
    checkboxes = document.getElementsByName('foo');
    checkboxes.forEach(checkbox => {
        checkbox.checked = source.checked;
    });
    updateSelect()
}
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
            
                    <br>
                    <div id="success"></div>
                    <button type="submit" name="submit" class="btn btn-primary" id="sendMessageButton">Send Mail</button>
                </form>

            </div>





        </div>
    </div>
@endsection
