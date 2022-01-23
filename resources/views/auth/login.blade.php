<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login</title>
      <link rel="stylesheet" href="{{ asset('css/login.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="container">
         <div>
          <img src="Assets/uca.png"/>
         </div>
         <div class="form-outer">
            <form method="POST" action="{{ route('login') }}">
                        @csrf
               <div class="page slide-page">
                  <div class="field">
                     <div class="label">
                        E-Mail Address
                     </div>
                     <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <div class="field">
                     <div class="label">
                        Password
                     </div>
                     <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <div class="field">
                     <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                     <div class="label1">
                        Remember Me
                     </div>
                  </div>
                  <div class="field">
                     <button class="submit">Login</button>
                  </div>
                  <div class="field">
                   @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                  </div>
               </div>
            </form>
         </div>
      </div>
   </body>
</html>