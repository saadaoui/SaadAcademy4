@extends('layouts.master')

@section('content')
 <div class="content-wrapper" style="background: url('{{  asset('images/background.jpg') }}')">

     <div class="container">
         <div class="row justify-content-center signin-card">
             <div class="col-md-6 col-sm-12">
                 <div class="card pt-5 pb-5 text-center">
                          <img  width="70" class="img-fluid m-auto" src="{{ asset('images/logo2.png') }}" alt="site-logo2">
                          <h4 class="mt-4">Sign In</h4>
                          <p> gffg hfhhj dsu hgfjjb fdhu hgii hhhtezasf hhh</p>

                         <form method="POST" action="{{ route('login') }}" class="auth-form">
                             <div  class="divider mb-4"></div>
                             @csrf
                             <div class="form-group row">

                                 <div class="col-12">
                                     <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Your Email">

                                     @error('email')
                                     <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                                 </div>
                             </div>

                             <div class="form-group row">

                                 <div class="col-12">
                                     <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Your Password">

                                     @error('password')
                                     <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                                 </div>
                             </div>

                             <div class="form-group row">
                                 <div class="col-6 text-left">
                                     <div class="form-check">
                                         <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                         <label class="form-check-label" for="remember">
                                             {{ __('Remember Me') }}
                                         </label>
                                     </div>
                                 </div>
                                 <div class="col-6 text-right">

                                     @if (Route::has('password.request'))
                                         <a class="btn btn-link" href="{{ route('password.request') }}">
                                             {{ __('Forgot Your Password?') }}
                                         </a>
                                     @endif

                                 </div>
                             </div>

                             <div class="form-group row mb-0">
                                 <div class="col-12">
                                     <button type="submit" class="btn btn-lg auth-btn ">
                                         {{ __('LOGIN') }}
                                     </button>
                                     <p class="mt-4">Dont have an account? <a class="btn btn-link" href="{{ route('register') }}">SIGN UP</a></p>
                                 </div>
                             </div>
                         </form>
                     </div>
             </div>
         </div>
     </div>

 </div>
@endsection
