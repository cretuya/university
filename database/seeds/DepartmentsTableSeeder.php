<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('departments')->delete();

        $departments = array([
        	'code' => 1,
        	'name' => 'College of Arts and Sciences',
        	'office_num' => null,
        	'office_phone' => null,
        ],
        [
        	'code' => 2,
        	'name' => 'College of Commerce',
        	'office_num' => null,
        	'office_phone' => null,
        ],
        [
        	'code' => 3,
        	'name' => 'College of Education',
        	'office_num' => null,
        	'office_phone' => null,
        ],
        [
        	'code' => 4,
        	'name' => 'College of Engineering',
        	'office_num' => null,
        	'office_phone' => null,
        ],
        [
        	'code' => 5,
        	'name' => 'College of ICCT',
        	'office_num' => null,
        	'office_phone' => null,
        ],
        [
        	'code' => 6,
        	'name' => 'School of Law',
        	'office_num' => null,
        	'office_phone' => null,
        ],
        [
        	'code' => 7,
        	'name' => 'Senior High School',
        	'office_num' => null,
        	'office_phone' => null,
        ],
        [
        	'code' => 8,
        	'name' => 'Junior High School',
        	'office_num' => null,
        	'office_phone' => null,
        ],
        [
        	'code' => 9,
        	'name' => 'RITTC',
        	'office_num' => null,
        	'office_phone' => null,
        ]);

        DB::table('departments')->insert($departments);
    }
}
