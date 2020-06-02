<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable=[
        'title', 'description', 'category_id',
        'price', 'image'
    ];

    public function authors(){
        return $this->belongsToMany(User::class, 'course_user');
    }

    public function category(){
        return $this->belongsTo(CourseCategory::class);
    }

    public function tags(){
        return $this->belongsToMany(CourseTag::class, 'course_tag');
    }

    public function sections(){
        return $this->hasMany(Section::class);

    }

    public function lessons(){
      return  $this->hasMany(Lesson::class);
    }


}



