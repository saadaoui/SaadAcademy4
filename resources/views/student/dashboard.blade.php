@extends('layouts.master')

@section('content')
    <div class="dashboard-wrapper" style="background: url('{{ asset('images/dash-bg.jpg') }}') no-repeat; background-size: cover;">
      <div class="container pt-5 pb-5">

    <div class="row">

        <div  class="col-sm-12 col-md-4">
            <ul class="list-group">
                <li class="list-group-item {{ (Route::currentRouteName() == 'home') ?  'active' : ''}}">
                    <a  href="  {{ route('home')}}">Dashboard</a>
                </li>
                <li class="list-group-item {{ (Route::currentRouteName() == 'profile') ?  'active' : ''}}">
                    <a href="{{ route('profile') }}">My Profile</a>
                </li>
            </ul>
        </div>
        <div class="col-sm-12 col-md-8">

            @yield('student-content')

        </div>

    </div>

    </div>
    </div>


@endsection
