<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <!-- <form action="#" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form> -->
          <form method="post"  action="{{url('store-form')}}" class="sign-up-form">
          @csrf
          {{ Session::get('status') }}
            <h2 class="title">Sign up</h2>
            @if(Session::has('success'))
          <div class="alert alert-success" style="color:green">
              {{ Session::get('success') }}
              @php
                  Session::forget('success');
              @endphp
          </div>
          @endif
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name"  value="{{old('name') }}" placeholder="Name">
            </div>
            
              <!-- Error -->
              @if ($errors->has('name'))
              <div class="error">
                  {{ $errors->first('name') }}
              </div>
              @endif
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" class="form-control {{ $errors->has('lastname') ? 'error' : '' }}" name="lastname" id="lastname"  value="{{old('lastname') }}" placeholder="Lastname" >
            </div>
            
                <!-- Error -->
                @if ($errors->has('lastname'))
                <div class="error">
                    {{ $errors->first('lastname') }}
                </div>
                @endif
            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone" value="{{  old('phone')}}" placeholder="Phone" > 
            </div>
            @if ($errors->has('phone'))
                <div class="error">
                    {{ $errors->first('phone') }}
                </div>
                @endif
            <div class="input-field">
              <i class="far fa-building"></i>
                <input type="text" class="form-control {{ $errors->has('company') ? 'error' : '' }}" name="company" id="company"  value="{{old('company') }}" placeholder="Comany">
            </div>
              <!-- Error -->
              @if ($errors->has('company'))
              <div class="error">
                  {{ $errors->first('company') }}
              </div>
              @endif
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email" value="{{  old('email') }}" placeholder="Email">
            </div>
            @if ($errors->has('email'))
              <div class="error">
                  {{ $errors->first('email') }}
              </div>
              @endif
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password"  class="form-control {{ $errors->has('password') ? 'error' : '' }}" name="password" id="password"  value="{{old('password') }}" 
                placeholder="Password">
            </div>
              <!-- Error -->
              @if ($errors->has('password'))
                <div class="error">
                    {{ $errors->first('password') }}
                </div>
                @endif
            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <!--<div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>-->
        <div class="panel right-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
