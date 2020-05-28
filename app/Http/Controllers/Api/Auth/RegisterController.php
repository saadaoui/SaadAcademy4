<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Resources\UserResource;
use App\Mail\AdminNotifyNewUserRegistered;
use App\Mail\NewUserRegistered;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class RegisterController extends Controller
{
    public function register(UserRegisterRequest $request){

       $user=User::create([
           'first_name'         => $request->first_name,
           'last_name'          => $request->last_name,
           'account_selection'  => $request->account_selection,
           'email'              =>$request->email,
           'password'           =>Hash::make($request->password),
           'email_token'        =>bin2hex(openssl_random_pseudo_bytes(30)),
           'api_token'          =>bin2hex(openssl_random_pseudo_bytes(30)),
       ]);

        Mail::to($user)->queue(new NewUserRegistered($user));

        $admin=User::find(1);
        Mail::to($admin)->queue(new AdminNotifyNewUserRegistered($user));

        return new UserResource($user);
    }
}
