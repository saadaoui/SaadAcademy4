@extends('layouts.master')

@section('content')
    <div class="content-wrapper" style="background: url('{{  asset('images/background.jpg') }}')">
     <div class="container">
     <div class="row justify-content-center signin-card">
        <div class="col-md-6 col-sm-12">
            <div class="card pt-5 pb-5 text-center">
                <img  width="70" class="img-fluid m-auto" src="{{ asset('images/logo2.png') }}" alt="site-logo2">
                <h4 class="mt-4">Recover Password</h4>
                <p> gffg hfhhj dsu hgfjjb fdhu hgii hhhtezasf hhh</p>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" class="auth-form">
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

                        <div class="form-group row mb-0">
                            <div class="col-12">
                                <button type="submit" class="btn btn-lg auth-btn">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
    @include('common/newsletter')
@endsection
