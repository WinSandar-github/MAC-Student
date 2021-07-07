<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
    protected $table = 'student_infos';
    protected $fillable = ['name_mm','name_eng','nrc_state_region','nrc_township','nrc_citizen','nrc_number','father_name_mm','father_name_eng','race','religion','date_of_birth','address','current_address','phone','gov_staff','image','registration_no','date','approve_reject_status','email','password'];
}
