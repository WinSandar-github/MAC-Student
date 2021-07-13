<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamType extends Model
{
    protected $table = 'exam_type';
    protected $fillable = ['name','description'];
}
