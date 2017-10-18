<?php

use Illuminate\Database\Seeder;

class GradeReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('gradereports')->delete();

        $gradereports = array([
        	'student_id' => 100,
        	'section_num' => 1,
            'numeric_grade' => 75,
        ],
        [
            'student_id' => 101,
            'section_num' => 1,
            'numeric_grade' => 75,
        ]);
        // [
        //     'student_id' => 102,
        //     'course_num' => 507,
        //     'code' => 5,
        // ],
        // [
        //     'student_id' => 103,
        //     'course_num' => 507,
        //     'code' => 5,
        // ],
        // [
        //     'student_id' => 104,
        //     'course_num' => 507,
        //     'code' => 5,
        // ],
        // [
        //     'student_id' => 105,
        //     'course_num' => 507,
        //     'code' => 5,
        // ],
        // [
        //     'student_id' => 106,
        //     'course_num' => 507,
        //     'code' => 5,
        // ],
        // [
        //     'student_id' => 107,
        //     'course_num' => 507,
        //     'code' => 5,
        // ],
        // [
        //     'student_id' => 108,
        //     'course_num' => 507,
        //     'code' => 5,
        // ]);

     DB::table('gradereports')->insert($gradereports);    	
    }
}
