@extends('layouts.app')

@section('content')
 <input class="typeahead" type="text" placeholder="States of USA">
<script>
var substringMatcher = function(strs) {
    console.log("I am in function substtringmatcher");
  return function findMatches(q, cb) {
    console.log("I am in function finmatches");
    var matches, substringRegex;

    // an array that will be populated with substring matches
    matches = [];

    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');

    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array
    $.each(strs, function(i, str) {
      if (substrRegex.test(str)) {
        matches.push(str);
      }
    });

    cb(matches);
  };
};

var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
  'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
  'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
  'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
  'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
  'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
  'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
  'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
  'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
];

$('input.typeahead').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'states',
  source: substringMatcher(states)
});

</script>
<x-hero />
<div class="container my-5 py-5">
   <div class="row mb-3 pl-2">
    <span class="display-6 border-left border-left border-1">Recent Blogs</span>
   </div>
    <div class="row">
{{-- @for ($i = 0; $i < 3; $i++) --}}
@foreach ($blogs as $blog)
<div class="col-lg-4 col-md-6 col-sm-12 p-1" >
    <div class="card" style="height: 100%">
        <img class="card-img-top" src="https://html.com/wp-content/uploads/html-tutorial-beginners-header.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$blog->title}}</h5>
            <p class="card-text">{{$blog->subtitle}}</p>
        </div>
        
          <div class="card-foot text-right pb-4 pr-4  text-secondary" style="//color:#b8b4b4">
            <a href="{{ route('blog', ['id' => $blog->id]) }}" class=" text-secondary" style="//color:#b8b4b4"><i class="fas fa-eye"></i> Read More</a>
            <span class="ml-4" style="cursor: pointer"  data-id="{{$blog->id}}" data-title="{{$blog->title}}" onclick="showBookmark(this)"><i class="far fa-bookmark"></i></span>
          </div>
    </div>
</div>
@endforeach
{{-- @endfor --}}
</div>

</div>

@include('modals.bookmark')

<script>
  function  showBookmark(button){
    // alert(button)

const bootstrapModal = document.getElementById('bootstrapModal')
  const id = button.getAttribute('data-id')
  const title = button.getAttribute('data-title')
  const modalTitle = document.getElementById("bookmarkModalTitle")
  const modalBodyInput = document.getElementById("blogid")

  modalTitle.textContent = `Bookmark: "${title}"`
  modalBodyInput.value = id
  $('#bookmarkModal').modal('show')
  }
// exampleModal.addEventListener('show.mdb.modal', (event) => {
//   // Button that triggered the modal
//   const button = event.relatedTarget
//   // Extract info from data-mdb-* attributes
//   const recipient = button.getAttribute('data-mdb-whatever')
//   // If necessary, you could initiate an AJAX request here
//   // and then do the updating in a callback.
//   //
//   // Update the modal's content.
//   const modalTitle = exampleModal.querySelector('.modal-title')
//   const modalBodyInput = exampleModal.querySelector('.modal-body input')

//   modalTitle.textContent = `New message to ${recipient}`
//   modalBodyInput.value = recipient
// })
  var substringMatcher = function(strs) {
  return function findMatches(q, cb) {
    var matches, substrRegex;

    // an array that will be populated with substring matches
    matches = [];

    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');

    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array
    $.each(strs, function(i, str) {
      if (substrRegex.test(str)) {
        // the typeahead jQuery plugin expects suggestions to a
        // JavaScript object, refer to typeahead docs for more info
        matches.push({ value: str });
      }
    });

    cb(matches);
  };
};

var states = ["Alabama", "Alaska", "West Virginia", "Wisconsin", "Wyoming"];


$('input.typeahead').typeahead({  
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'states',
  displayKey: 'value',
  source: substringMatcher(states)
});
</script>
@endsection
