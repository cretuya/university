<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentDepartment extends Model
{
	protected $table = 'studentdepartments';


	protected $fillable = [
        'student_id' , 'code' ,
    ];

    public function student()
    {
    	return $this->belongsTo('App\Student', 'student_id', 'student_id');
    }
    public function department()
    {
    	return $this->hasOne('App\Department', 'code', 'code');
    }
}
