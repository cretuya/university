<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
	protected $table = 'departments';
	protected $guarded = ['code'];

	protected $fillable = [
        'name' , 'office_num' , 'office_phone' ,
    ];

    public function studentdepartment()
    {
    	return $this->hasMany('App\StudentDepartment', 'code', 'code');
    }
    public function courses()
    {
    	return $this->hasMany('App\Course', 'code', 'code');
    }
}
