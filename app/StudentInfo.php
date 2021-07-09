<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class StudentInfo extends Authenticatable
{
    use Notifiable;
    protected $table = 'student_infos';
    protected $fillable = ['name_mm','name_eng','nrc_state_region','nrc_township','nrc_citizen','nrc_number','father_name_mm','father_name_eng','race','religion','date_of_birth','address','current_address','phone','gov_staff','image','registration_no','date','approve_reject_status','email','password'];
    
    protected $guarded = ['id'];
    protected $hidden = [
     'password', 'remember_token',
    ];
    public function getAuthPassword()
    {
     return $this->password;
    }
}

