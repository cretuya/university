<?php

use Illuminate\Database\Seeder;

class StudentCoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    DB::table('studentcourses')->delete();

        $studentcourses = array([
        	'student_id' => 100,
        	'course_id' => 507,
        	'code' => 5,
        ],
        [
            'student_id' => 101,
            'course_id' => 507,
            'code' => 5,
        ],
        [
            'student_id' => 101,
            'course_num' => 508,
            'code' => 5,
        ],
        [
            'student_id' => 100,
            'course_num' => 501,
            'code' => 5,
        ],
        [
            'student_id' => 101,
            'course_num' => 502,
            'code' => 5,
        ],
        [
            'student_id' => 100,
            'course_num' => 301,
            'code' => 3,
        ],
        [
            'student_id' => 100,
            'course_num' => 303,
            'code' => 3,
        ],
        [
            'student_id' => 101,
            'course_num' => 305,
            'code' => 3,
        ],
        [
            'student_id' => 101,
            'course_num' => 301,
            'code' => 3,
        ],
        [
            'student_id' => 100,
            'course_num' => 304,
            'code' => 3,
        ],
        [
            'student_id' => 100,
            'course_num' => 502,
            'code' => 5,
        ],
        [
            'student_id' => 101,
            'course_num' => 503,
            'code' => 5,
        ]);

     DB::table('studentcourses')->insert($studentcourses);
    }
}
