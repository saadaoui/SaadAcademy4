<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LessonAttachment extends Model
{
    protected $fillable=[
        'url', 'lesson_id', 'type',
    ];
}
