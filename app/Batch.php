<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $fillable = ['name','from','to','course_id','moodle_course_id','publish_status','accept_application_date'];
}
