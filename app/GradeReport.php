<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GradeReport extends Model
{
	protected $table = 'gradereports';

	protected $fillable = [
        'student_id' , 'section_num' ,
    ];

    public function student()
    {
    	return $this->belongsTo('App\Student', 'student_id', 'student_id');
    }
    public function section()
    {
    	return $this->belongsTo('App\Section', 'section_num', 'section_num');
    }
}
