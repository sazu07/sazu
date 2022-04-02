
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Shazahan</title>
  <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/app.min.css">
  <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/bundles/jquery-selectric/selectric.css">
  <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/style.css">
  <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/components.css">
  <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href="{{asset('contents/admin')}}/assets/img/favicon.ico" />
</head>
<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row ">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header justify-content-center">
                <h4>Register</h4>
              </div>
              <div class="card-body">
                <form method="POST" aaction="{{ route('register') }}">
                     @csrf
                  <div class="row">
                        <div class="form-group col-3 ">
                         
                        </div>
                        <div class="form-group col-6 ">
                          <label for="frist_name"> Name</label>
                          <input id="frist_name" type="text" class="form-control @error('name') is-invalid @enderror"  name="name" autofocus required value="{{ old('name') }}" >

                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                        <div class="form-group col-3 ">
                         
                        </div>

                  </div>
                  <div class="row">
                        <div class="form-group col-3">
                        </div>
                         <div class="form-group col-6">
                           <label for="email">Email</label>
                           <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>
                           @error('email')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                         </div>
                        <div class="form-group col-3">
                         
                        </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-3">
                    
                    </div>
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength @error('password') is-invalid @enderror " data-indicator="pwindicator" name="password" required autocomplete="new-password">
                      <!-- <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div> -->
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group col-3">
                     
                    </div>
                  </div>
                   <div class="row">
                       <div class="form-group col-3">
                         
                       </div>
                       <div class="form-group col-6">
                         <label for="password2" class="d-block">Password Confirmation</label>
                         <input id="password2" type="password" class="form-control " name="password_confirmation" required autocomplete="new-password">
                       </div>
                       <div class="form-group col-3">
                         
                       </div>
                   </div>
                    <!-- <div class="row">
                        <div class="form-group col-3">
                          
                        </div>
                        <div class="form-group col-6">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                            <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                          </div>
                        </div>
                        <div class="form-group col-3">
                         
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="form-group col-3">
                          
                        </div>
                        <div class="form-group col-6">
                          <button type="submit" class="btn btn-primary btn-lg btn-block">
                            Register
                          </button>
                        </div>
                        <div class="form-group col-3">
                          
                        </div>
                    </div>
                </form>
              </div>
              <div class="mb-4 text-muted text-center">
                Already Registered? <a href="{{ route('login') }}">Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="{{asset('contents/admin')}}/assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="{{asset('contents/admin')}}/assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="{{asset('contents/admin')}}/assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset('contents/admin')}}/assets/js/page/auth-register.js"></script>
  <!-- Template JS File -->
  <script src="{{asset('contents/admin')}}/assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="{{asset('contents/admin')}}/assets/js/custom.js"></script>
</body>
</html>
