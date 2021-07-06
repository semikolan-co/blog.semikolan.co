
<footer class="page-footer font-small text-white pt-4" style="background: var(--darkerShade);">

  <div class="container">

    <div class="row pb-4">


      <div class="col-md-6">


        <span class="display-6"><img src="{{asset('public/images/favicon.png')}}" style="height:40px;display:inline;"/>&nbsp;&nbsp;{{env('BRAND_NAME')}}</span>
        


      </div>

      
      <div class="col-md-6">

        <form class="input-group align-middle" action="/subscribe" method="POST">
          @csrf
          <input type="hidden" name="route" value="{{Request::path()}}">
          {{-- <input name="email" type="text" class="form-control form-control" placeholder="Your email"
            aria-label="Your email" aria-describedby="basic-addon2"> --}}
       
  <input type="email" required name="email" class="form-control" placeholder="Enter Your Email" >
  <div class="input-group-append">
    <button type="submit" style="background:var(--blue);color:white;" class="input-group-text" id="basic-addon2">Subscribe Newsleter</button>
  </div>
        </form>

      </div>
     
      

    </div>
    
    

  </div>
  
  
  <div class="footer-copyright text-center py-3" style="background: var(--darkestShade);color:#fffa;">© 2021 Copyright:
    <a style="color:var(--green); text-decoration:none;" href="https://semikolan.co/"> semikolan.co</a>
  </div>

  

</footer>

