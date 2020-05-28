<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApiLoginRequest;
use App\Http\Resources\UserLoginResource;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class LoginController extends Controller
{

    private function credentials( Request $request){
        return $request->only('email', 'password');
    }

    public function login(ApiLoginRequest $request){

         $userExists=Auth::attempt($this->credentials($request));
         if(!$userExists){
             return Response::make('no user fouund', 404);

         }
         $user=User::where([
             'email'=> $request->email
         ])->first();
         return new UserLoginResource($user);

    }
}
