<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable=[
        'title', 'descriptio', 'is_preview', 'course_id', 'section_id'
    ];

    public function section(){
        return $this->belongsTo(Section::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function attachment(){
        return $this->hasMany(LessonAttachment::class);
    }
}
