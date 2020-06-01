<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentProfileController extends Controller
{
    public function show(){
        return view('student.profile')->with([
            'user'=>auth()->user(),
        ]);
    }

    public function updateSettings(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required'
        ]);
        $user=auth()->user();
       $user->first_name=$request->first_name;
       $user->last_name=$request->last_name;
       $user->biography=$request->biography;
       $user->save();
       return redirect(route('profile'));
    }
}
