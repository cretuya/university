<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    DB::table('courses')->delete();

        $courses = array([
        	'course_id' => 501,
        	'desc' => 'Computer Programming I',
        	'sem_hours' => 3,
        	'course_level' => 1,
        	'code' => 5,
        ],
        [
        	'course_id' => 502,
        	'desc' => 'Computer Programming II',
        	'sem_hours' => 3,
        	'course_level' => 1,
        	'code' => 5,
        ],
        [
        	'course_id' => 503,
        	'desc' => 'Data Structures and Algorithms',
        	'sem_hours' => 3,
        	'course_level' => 2,
        	'code' => 5,  
        ],
        [
        	'course_id' => 504,
        	'desc' => 'Object Oriented Programming',
        	'sem_hours' => 3,
        	'course_level' => 2,
        	'code' => 5,     
        ],
        [
        	'course_id' => 505,
        	'desc' => 'Database Systems II',
        	'sem_hours' => 3,
        	'course_level' => 3,
        	'code' => 5,      
        ],
        [
        	'course_id' => 506,
        	'desc' => 'Software Engineering',
        	'sem_hours' => 3,
        	'course_level' => 3,
        	'code' => 5,      
        ],
        [
        	'course_id' => 507,
        	'desc' => 'Research Methods in IT Computer Science',
        	'sem_hours' => 3,
        	'course_level' => 4,
        	'code' => 5,     
        ],
        [
        	'course_id' => 508,
        	'desc' => 'Special IT Project',
        	'sem_hours' => 3,
        	'course_level' => 4,
        	'code' => 5,     
        ],
        [
            'course_id' => 301,
            'desc' => 'Natural Science I',
            'sem_hours' => 3,
            'course_level' => 4,
            'code' => 3,     
        ],
        [
            'course_id' => 302,
            'desc' => 'Natural Science II',
            'sem_hours' => 3,
            'course_level' => 4,
            'code' => 3,     
        ],
        [
            'course_id' => 303,
            'desc' => 'Algebra',
            'sem_hours' => 3,
            'course_level' => 4,
            'code' => 3,     
        ],
        [
            'course_id' => 304,
            'desc' => 'English',
            'sem_hours' => 3,
            'course_level' => 4,
            'code' => 3,     
        ],
        [
            'course_id' => 305,
            'desc' => 'Science',
            'sem_hours' => 3,
            'course_level' => 4,
            'code' => 3,     
        ]);

     DB::table('courses')->insert($courses);
    }
}
