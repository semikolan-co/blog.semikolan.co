<nav class="navbar navbar-expand-lg" style="background: var(--darkerShade);">
  <div class="container">
    <a class="navbar-brand text-white font-weight-bold" href="{{route('index')}}"><img src="{{asset('public/images/favicon.png')}}" style="height:40px;display:inline;"/>&nbsp;&nbsp;{{env('BRAND_NAME')}}</a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarTogglerDemo02"
      aria-controls="navbarTogglerDemo02"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <!--<ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="text-white nav-link active" aria-current="page" href="{{ route('index')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="text-white nav-link" href="{{route('blogs')}}">All Blogs</a>
        </li>
        {{-- <li class="nav-item">
          <a class="text-secondary nav-link disabled" href="#" tabindex="-1" aria-disabled="true"
            >Disabled</a
          >
        </li> --}}
      </ul>-->
      {{-- <form class="d-flex input-group w-auto">
        <div class="row btn-outline-light p-0 rounded bg-light" >
          <div class="col-10 p-0 m-0 " id="the-basics">
            <input id="searchbar"  type="search"
            class="form-control typeahead rounded-0 border-0"
            placeholder="Search Query"
            aria-label="Search"
            />
          </div>
          <div class="col-2 p-0 m-0">
            
            <button
            class="btn bg-light rounded-0"
            type="button "
            >
            <i class="fa fa-search "></i>
          </button>
        </div>
        </div>
      </form> --}}
    </div>
  </div>
</nav>
{{-- <script>
  var substringMatcher = function(strs) {
  return function findMatches(q, cb) {
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

$('#searchbar').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'states',
  source: substringMatcher(states)
}); --}}
</script>