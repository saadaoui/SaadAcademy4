<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Jobs\SignUpUserToNewsletter;
use App\Mail\AdminNotifyNewUserRegistered;
use App\Mail\NewUserRegistered;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'account_selection' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user=User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'account_type' => $data['account_selection'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'email_token'=>bin2hex(openssl_random_pseudo_bytes(30)),
            'api_token'=>bin2hex(openssl_random_pseudo_bytes(30)),

        ]);

        //email user
        Mail::to($user)->queue(new NewUserRegistered($user));

        //email admin
        $admin=User::where([
            'account_type'=>'admin'
        ])->flrst();
        Mail::to($admin)->queue(new AdminNotifyNewUserRegistered($user));

        // register new user on newsletter
        SignUpUserToNewsletter::dispatch($user);

        return $user;
    }
}
