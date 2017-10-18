<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
	protected $table = 'studentcourses';


	protected $fillable = [
        'student_id' , 'code' , 'course_id'
    ];

    public function student()
    {
    	return $this->belongsTo('App\Student', 'student_id', 'student_id');
    }
    public function course()
    {
    	return $this->belongsTo('App\Course', 'course_id', 'course_id');
    }
}
