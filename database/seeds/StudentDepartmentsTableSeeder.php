<?php

use Illuminate\Database\Seeder;

class StudentDepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('studentdepartments')->delete();

        $studentdepartments = array([
        	'student_id' => 100,
        	'code' => 5,
        ],
        [
            'student_id' => 101,
            'code' => 5,
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

     DB::table('studentdepartments')->insert($studentdepartments);  
    }
}
