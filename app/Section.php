<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable=[
        'title', 'course_id', 'description',
    ];

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function lesson(){
        return $this->hasMany(Lesson::class);
    }
}
