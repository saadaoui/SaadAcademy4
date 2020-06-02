<?php

namespace App\Http\Controllers;

use App\CourseCategory;
use Illuminate\Http\Request;

class CourseCategoryController extends Controller
{
    public function index(){
      return view('teacher.categories.categories')->with([
          'categories' => auth()->user()->categories
      ]);
    }

    public function store(Request $request){
       $request->validate([
           'category_name' => 'required'
       ]);
       $category=new CourseCategory();
       $category->category=$request->category_name;
       $category->user_id= auth()->id();
       $category->save();
       return redirect(route('course-categories'));
    }

    public function edit(Request $request){
        $request->validate([
            'category_id' => 'required',
            'category_name' => 'required'
        ]);
        $category=CourseCategory::find($request->category_id);
        $category->category=$request->category_name;
        $category->save();
        return redirect(route('course-categories'));
    }

    public function delete(Request $request){
        $request->validate([
            'category_id' => 'required',
        ]);
        CourseCategory::destroy($request->category_id);
        return redirect(route('course-categories'));
    }
}
