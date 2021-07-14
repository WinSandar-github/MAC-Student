<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterationExam extends Model
{
    protected $table = 'registeration_exam';
    protected $fillable = ['student_info_id','date','invoice_image','invoice_date','private_school_name','grade','batch_id','is_full_module','exam_type_id'];
}
