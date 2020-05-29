<?php

namespace App\Http\Controllers;

use App\Address;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{


    /**
     * UserProfileController constructor.
     */
    public function __construct()
    {
        $this->middleware([
            'auth', 'email_verified'
        ]);
    }

    public function show(){
        return view('users.user-profile')->with([
            'user'=>Auth::user()
        ]);
    }

    public function updateAddress(Request $request){
        $address= new Address();

        if($request->street_number !=null){
            $address->street_number=$request->street_number;
        }

        if($request->unit_number !=null){
            $address->unit_number=$request->unit_number;
        }

        if($request->suburb !=null){
            $address->suburb=$request->suburb;
        }

        if($request->city !=null){
            $address->city=$request->city;
        }

        if($request->state !=null){
            $address->state=$request->state;
        }

        if($request->post_code !=null){
            $address->post_code=$request->post_code;
        }

        if($request->country !=null){
            $address->country=$request->country;
        }
        $address->save();

         $user=Auth::user();
        if($request->addresses=='both'){
            $user->billing_address=$address->id;
            $user->shipping_address = $address->id;
        }
        $user->save();
        return redirect(route('profile'));
    }
}
