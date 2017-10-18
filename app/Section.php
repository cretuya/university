<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
	protected $table = 'sections';
	protected $guarded = ['section_num'];

	protected $fillable = [
        'instructor' , 'semester' , 'year' , 'code' , 'course_id' , 
    ];

    public function reports()
    {
    	return $this->hasMany('App\GradeReport', 'section_num', 'section_num');
    }
    public function course()
    {
    	return $this->belongsTo('App\Course', 'course_id', 'course_id');
    }
}
