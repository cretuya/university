<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $table = 'students';

	protected $guarded = ['student_id'];

	protected $fillable = [
        'lname' , 'fname' , 'birthday' , 'gender' , 'address' , 'contact' , 'email',
    ];

    public function studentdepartment()
    {
    	return $this->hasOne('App\StudentDepartment', 'student_id', 'student_id');
    }
    public function studentcourse()
    {
    	return $this->hasMany('App\StudentCourse', 'student_id', 'student_id');
    }
    public function report()
    {
    	return $this->hasMany('App\GradeReport', 'student_id', 'student_id');
    }
}
