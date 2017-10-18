<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	protected $table = 'courses';

	protected $guarded = ['course_id'];

	protected $fillable = [
        'desc' , 'sem_hours' , 'course_level' , 'code' ,
    ];

    public function studentcourse()
    {
    	return $this->hasMany('App\StudentCourse', 'course_id', 'course_id');
    }
    public function department()
    {
    	return $this->belongsTo('App\Department', 'code', 'code');
    }
    public function sections()
    {
    	return $this->hasMany('App\Section', 'course_id', 'course_id');
    }
}
