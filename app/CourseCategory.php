<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    protected $fillable=[
        'category'
    ];

    public function courses(){
        return $this->hasMany(Course::class);
    }
    public function owner(){
        return $this->belongsTo(User::class);
    }
}
