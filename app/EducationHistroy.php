<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationHistroy extends Model
{
    protected $table = 'education_histroys';
    protected $fillable = ['student_info_id','university_name','degree_name','document','qualified_date','roll_number'];
}
