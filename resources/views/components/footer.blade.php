
<footer class="page-footer font-small text-white bg-dark pt-4">

  <div class="container">

    <div class="row py-3 pb-4">


      <div class="col-md-6">


        <span class="display-5">{{env('BRAND_NAME')}}</span>
        


      </div>

      
      <div class="col-md-6">

        <form class="input-group align-middle" action="/subscribe" method="POST">
          @csrf
          <input type="hidden" name="route" value="{{Request::path()}}">
          {{-- <input name="email" type="text" class="form-control form-control" placeholder="Your email"
            aria-label="Your email" aria-describedby="basic-addon2"> --}}
       
  <input type="text" name="email" class="form-control" placeholder="Enter Your Email" >
  <div class="input-group-append">
    <button type="button" class="input-group-text" id="basic-addon2">Subscribe Newsleter</button>
  </div>
        </form>

      </div>
     
      

    </div>
    
    

  </div>
  
  
  <div class="footer-copyright text-center py-3 bg-black">© 2020 Copyright:
    <a href="https://semikolan.co/"> semikolan.co</a>
  </div>

  

</footer>

