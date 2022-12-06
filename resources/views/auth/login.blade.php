<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('assets-assets-login/fonts/icomoon/style.css')}}">

  <link rel="stylesheet" href="{{asset('assets-login/css/owl.carousel.min.css')}}">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('assets-login/css/bootstrap.min.css')}}">

  <!-- Style -->
  <link rel="stylesheet" href="{{asset('assets-login/css/style.css')}}">

  <title>Login</title>
</head>

<body>


  <div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('/assets-login/images/1.jpeg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5">
                <h3> <strong>Welcome Back !</strong></h3>
              </div>
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="email" class="form-control" placeholder="your-email@gmail.com" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>

                <div class="form-group last mb-3">
                  <label for="password">Password</label>



                  <input type="password" class="form-control" placeholder="Your Password" id="password" name="password" required autocomplete="current-password">
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>

                <div class="d-sm-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Remember me</span>


                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                    <div class="control__indicator"></div>
                  </label>
                  @if (Route::has('password.request'))
                  <span class="ml-auto"> <a class="forgot-pass" href="{{ route('password.request') }}">
                      Forgot Password?
                    </a></span>
                  @endif
                </div>

                <input type="submit" value="Log In" class="btn btn-block btn-primary" style="background-color: #007bff; border-color: #007bff">

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>



  <script src="{{asset('assets-login/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('assets-login/js/popper.min.js')}}"></script>
  <script src="{{asset('assets-login/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets-login/js/main.js')}}"></script>
</body>

</html>