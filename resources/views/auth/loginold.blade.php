<x-guest-layout>
  
   <!-- Bootstrap  5.0 CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <script src="https://kit.fontawesome.com/c5fe5e7547.js" crossorigin="anonymous"></script>



    {{-- <style>
        @import url("https://fonts.googleapis.com/css?family=Fira+Sans");
html, body {
  position: relative;
  min-height: 100vh;
  background-color: #E1E8EE;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: "Fira Sans", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.form-structor {
  background-color: #222;
  border-radius: 15px;
  height: 550px;
  width: 350px;
  position: relative;
  overflow: hidden;
}
.form-structor::after {
  content: "";
  opacity: 0.8;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-repeat: no-repeat;
  background-position: left bottom;
  background-size: 500px;
  background-image: url("https://images.unsplash.com/photo-1503602642458-232111445657?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bf884ad570b50659c5fa2dc2cfb20ecf&auto=format&fit=crop&w=1000&q=100");
}
.form-structor .signup {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  width: 65%;
  z-index: 5;
  -webkit-transition: all 0.3s ease;
}
.form-structor .signup.slide-up {
  top: 5%;
  -webkit-transform: translate(-50%, 0%);
  -webkit-transition: all 0.3s ease;
}
.form-structor .signup.slide-up .form-holder, .form-structor .signup.slide-up .submit-btn {
  opacity: 0;
  visibility: hidden;
}
.form-structor .signup.slide-up .form-title {
  font-size: 1em;
  cursor: pointer;
}
.form-structor .signup.slide-up .form-title span {
  margin-right: 5px;
  opacity: 1;
  visibility: visible;
  -webkit-transition: all 0.3s ease;
}
.form-structor .signup .form-title {
  color: #fff;
  font-size: 1.7em;
  text-align: center;
}
.form-structor .signup .form-title span {
  color: rgba(0, 0, 0, 0.4);
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all 0.3s ease;
}
.form-structor .signup .form-holder {
  border-radius: 15px;
  background-color: #fff;
  overflow: hidden;
  margin-top: 50px;
  opacity: 1;
  visibility: visible;
  -webkit-transition: all 0.3s ease;
}
.form-structor .signup .form-holder .input {
  border: 0;
  outline: none;
  box-shadow: none;
  display: block;
  height: 30px;
  line-height: 30px;
  padding: 8px 15px;
  border-bottom: 1px solid #eee;
  width: 100%;
  font-size: 12px;
}
.form-structor .signup .form-holder .input:last-child {
  border-bottom: 0;
}
.form-structor .signup .form-holder .input::-webkit-input-placeholder {
  color: rgba(0, 0, 0, 0.4);
}
.form-structor .signup .submit-btn {
  background-color: rgba(0, 0, 0, 0.4);
  color: rgba(255, 255, 255, 0.7);
  border: 0;
  border-radius: 15px;
  display: block;
  margin: 15px auto;
  padding: 15px 45px;
  width: 100%;
  font-size: 13px;
  font-weight: bold;
  cursor: pointer;
  opacity: 1;
  visibility: visible;
  -webkit-transition: all 0.3s ease;
}
.form-structor .signup .submit-btn:hover {
  transition: all 0.3s ease;
  background-color: rgba(0, 0, 0, 0.8);
}
.form-structor .login {
  position: absolute;
  top: 20%;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #fff;
  z-index: 5;
  -webkit-transition: all 0.3s ease;
}
.form-structor .login::before {
  content: "";
  position: absolute;
  left: 50%;
  top: -20px;
  -webkit-transform: translate(-50%, 0);
  background-color: #fff;
  width: 200%;
  height: 250px;
  border-radius: 50%;
  z-index: 4;
  -webkit-transition: all 0.3s ease;
}
.form-structor .login .center {
  position: absolute;
  top: calc(50% - 10%);
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  width: 65%;
  z-index: 5;
  -webkit-transition: all 0.3s ease;
}
.form-structor .login .center .form-title {
  color: #000;
  font-size: 1.7em;
  text-align: center;
}
.form-structor .login .center .form-title span {
  color: rgba(0, 0, 0, 0.4);
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all 0.3s ease;
}
.form-structor .login .center .form-holder {
  border-radius: 15px;
  background-color: #fff;
  border: 1px solid #eee;
  overflow: hidden;
  margin-top: 50px;
  opacity: 1;
  visibility: visible;
  -webkit-transition: all 0.3s ease;
}
.form-structor .login .center .form-holder .input {
  border: 0;
  outline: none;
  box-shadow: none;
  display: block;
  height: 30px;
  line-height: 30px;
  padding: 8px 15px;
  border-bottom: 1px solid #eee;
  width: 100%;
  font-size: 12px;
}
.form-structor .login .center .form-holder .input:last-child {
  border-bottom: 0;
}
.form-structor .login .center .form-holder .input::-webkit-input-placeholder {
  color: rgba(0, 0, 0, 0.4);
}
.form-structor .login .center .submit-btn {
  background-color: #6B92A4;
  color: rgba(255, 255, 255, 0.7);
  border: 0;
  border-radius: 15px;
  display: block;
  margin: 15px auto;
  padding: 15px 45px;
  width: 100%;
  font-size: 13px;
  font-weight: bold;
  cursor: pointer;
  opacity: 1;
  visibility: visible;
  -webkit-transition: all 0.3s ease;
}
.form-structor .login .center .submit-btn:hover {
  transition: all 0.3s ease;
  background-color: rgba(0, 0, 0, 0.8);
}
.form-structor .login.slide-up {
  top: 90%;
  -webkit-transition: all 0.3s ease;
}
.form-structor .login.slide-up .center {
  top: 10%;
  -webkit-transform: translate(-50%, 0%);
  -webkit-transition: all 0.3s ease;
}
.form-structor .login.slide-up .form-holder, .form-structor .login.slide-up .submit-btn {
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all 0.3s ease;
}
.form-structor .login.slide-up .form-title {
  font-size: 1em;
  margin: 0;
  padding: 0;
  cursor: pointer;
  -webkit-transition: all 0.3s ease;
}
.form-structor .login.slide-up .form-title span {
  margin-right: 5px;
  opacity: 1;
  visibility: visible;
  -webkit-transition: all 0.3s ease;
}
    </style> --}}
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <div class="d-flex justify-content-center">
          <a href="{{route('redirectToGithub')}}" class=" mr-0 btn btn-md m-1 btn-github  mr-2">
            <i class="fa h4 fa-github"></i></a>
  <a href="{{route('redirectToGoogle')}}"class=" mr-0 btn btn-md m-1 btn-google mr-2">
  <i class="fa h4 fa-google"></i></a>
  <a href="{{route('redirectToLinkedin')}}"class=" mr-0 btn btn-md m-1 btn-linkedin">
    <i class="fa h4 fa-linkedin"></i></a>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>

    </x-jet-authentication-card>







{{-- <div class="form-structor">
	<div class="signup">
		<h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
        <form action="{{ route('register') }}" method="post">
            @csrf
		<div class="form-holder">
			<input type="text" class="input" placeholder="Name" />
			<input type="email" class="input" placeholder="Email" />
			<input type="password" class="input" placeholder="Password" />
		</div>
		<button class="submit-btn">Sign up</button>
        </form>
	</div>
	<div class="login slide-up">
		<div class="center">
			<h2 class="form-title" id="login"><span>or</span>Log in</h2>
        <form action="{{ route('login') }}" method="post">
            @csrf

			<div class="form-holder">
				<input name="email" type="email" class="input" placeholder="Email" required />
				<input name="password" type="password" class="input" placeholder="Password" required />
			</div>
			<button type="submit" class="submit-btn">Log in</button>
        </form>
		</div>
	</div>
</div>




<script>
    console.clear();

const loginBtn = document.getElementById('login');
const signupBtn = document.getElementById('signup');

loginBtn.addEventListener('click', (e) => {
    showLogin(e)
});
// showLogin(loginBtn);
function showLogin(e){
    
	let parent = e.target.parentNode.parentNode;
	Array.from(e.target.parentNode.parentNode.classList).find((element) => {
		if(element !== "slide-up") {
			parent.classList.add('slide-up')
		}else{
			signupBtn.parentNode.classList.add('slide-up')
			parent.classList.remove('slide-up')
		}
	});
}

signupBtn.addEventListener('click', (e) => {
	let parent = e.target.parentNode;
	Array.from(e.target.parentNode.classList).find((element) => {
		if(element !== "slide-up") {
			parent.classList.add('slide-up')
		}else{
			loginBtn.parentNode.parentNode.classList.add('slide-up')
			parent.classList.remove('slide-up')
		}
	});
});
</script> --}}














</x-guest-layout>
