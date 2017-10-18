<?php

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->delete();

        $sections = array([
        	'section_num' => 1,
        	'instructor' => 'Roderick Bandalan',
        	'semester' => '1',
            'year' => '2017-2018',
            'code' => 5,
        	'course_id' => 507,
        ],
        [
            'section_num' => 2,
            'instructor' => 'Mark Antonino',
            'semester' => '1',
            'year' => '2017-2018',
            'code' => 5,
            'course_id' => 507,
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

     DB::table('sections')->insert($sections);      
    }
}
