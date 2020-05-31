@extends('layouts.master')

@section('content')
 <div class="content-wrapper" style="background: url('{{  asset('images/background.jpg') }}')">

     <div class="container">
         <div class="row justify-content-center signin-card">

             <div class="col-md-6 col-sm-12">
                 <div class="card pt-5 pb-5 text-center" >
                     <img  width="70" class="img-fluid m-auto" src="{{ asset('images/logo2.png') }}" alt="site-logo2">
                     <h4 class="mt-4">Create an Account</h4>
                     <p> gffg hfhhj dsu hgfjjb fdhu hgii hhhtezasf hhh</p>
                     <div class="card-body">
                         <form method="POST" action="{{ route('register') }} " class="auth-form">
                             <div  class="divider mb-4"></div>
                             @csrf

                             <div class="form-group row">
                                 <div class="col-12">
                                     <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus placeholder="First Name">

                                     @error('first_name')
                                     <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                                 </div>
                             </div>

                             <div class="form-group row">
                                 <div class="col-12">
                                     <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus placeholder="Last Name">

                                     @error('last_name')
                                     <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                                 </div>
                             </div>

                             <div class="form-group row">
                                 <div class="col-12">
                                     <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                     @error('email')
                                     <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                                 </div>
                             </div>

                             <div class="form-group row">
                                  <div class="col-12">
                                     <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                     @error('password')
                                     <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                                 </div>
                             </div>

                             <div class="form-group row">
                                 <div class="col-12">
                                     <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                 </div>
                             </div>

                             <div class="form-group row">
                                  <div class="col-12">
                                     <select name="account_selection" id="account_selection" class="form-control">
                                         <option value="student" selected>{{__('account.student')}}</option>
                                         <option value="teacher">{{__('account.teacher')}}</option>
                                     </select>
                                 </div>
                             </div>

                             <div class="form-group row mb-0">
                                 <div class="col-12">
                                     <button type="submit" class="btn btn-lg auth-btn">
                                         {{ __('account.register_button') }}
                                     </button>
                                     <p class="mt-4">Already have an account? <a class="btn btn-link" href="{{ route('login') }}">{{ __('Sign In') }}</a></p>
                                 </div>
                             </div>
                              <div>

                              </div>
                         </form>
                     </div>
                 </div>
             </div>

         </div>
     </div>

 </div>
@endsection
