<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('students')->delete();

        $students = array([
        	'student_id' => 100,
        	'lname' => 'Retuya',
        	'fname' => 'Chery Anne',
        	'birthday' => 'November',
        	'gender' => 'FEMALE',
        	'address' => 'Block 9 Lot 8 Kauswagan Basak Pardo Cebu City',
        	'contact' => '09192858226',
        	'email' => 'cherryanneretuya@yahoo.com',
        ],
        [
        	'student_id' => 101,
        	'lname' => 'Retuya',
        	'fname' => 'Anna Marie',
        	'birthday' => 'March  22, 2000',
        	'gender' => 'FEMALE',
        	'address' => 'Block 9 Lot 8 Kauswagan Basak Pardo Cebu City',
            'contact' => null,
        	'email' => 'annamarieretuya@yahoo.com',
        ]);
        // [
        // 	'student_id' => 102,
        // 	'lname' => 'Lastimosa',
        // 	'fname' => 'John Dale',
        // 	'birthday' => 'July 16, 1995',
        // 	'gender' => 'MALE',
        // 	'address' => 'Molave St. Tabunok Talisay City',
        // 	'contact' => null,
        // 	'email' => 'johndalelastimosa@yahoo.com',
        // ],
        // [
        // 	'student_id' => 103,
        // 	'lname' => 'Quijada',
        // 	'fname' => 'Orlan',
        // 	'birthday' => 'Oct 15, 1999',
        // 	'gender' => 'MALE',
        // 	'address' => 'Bayabas Ext. Mambaling Cebu City',
        // 	'contact' => null,
        // 	'email' => null,
        // ],
        // [
        // 	'student_id' => 104,
        // 	'lname' => 'Retuya',
        // 	'fname' => 'Chery Anne',
        // 	'birthday' => 'November 23, 1997',
        // 	'gender' => 'FEMALE',
        // 	'address' => 'Block 9 Lot 8 Kauswagan Basak Pardo Cebu City',
        // 	'contact' => '09192858226',
        // 	'email' => 'cherryanneretuya@yahoo.com',
        // ],
        // [
        // 	'student_id' => 105,
        // 	'lname' => 'Retuya',
        // 	'fname' => 'Chery Anne',
        // 	'birthday' => 'November 23, 1997',
        // 	'gender' => 'FEMALE',
        // 	'address' => 'Block 9 Lot 8 Kauswagan Basak Pardo Cebu City',
        // 	'contact' => '09192858226',
        // 	'email' => 'cherryanneretuya@yahoo.com',
        // ],
        // [
        // 	'student_id' => 106,
        // 	'lname' => 'Retuya',
        // 	'fname' => 'Chery Anne',
        // 	'birthday' => 'November 23, 1997',
        // 	'gender' => 'FEMALE',
        // 	'address' => 'Block 9 Lot 8 Kauswagan Basak Pardo Cebu City',
        // 	'contact' => '09192858226',
        // 	'email' => 'cherryanneretuya@yahoo.com',
        // ],
        // [
        // 	'student_id' => 107,
        // 	'lname' => 'Retuya',
        // 	'fname' => 'Chery Anne',
        // 	'birthday' => 'November 23, 1997',
        // 	'gender' => 'FEMALE',
        // 	'address' => 'Block 9 Lot 8 Kauswagan Basak Pardo Cebu City',
        // 	'contact' => '09192858226',
        // 	'email' => 'cherryanneretuya@yahoo.com',
        // ],
        // [
        // 	'student_id' => 108,
        // 	'lname' => 'Retuya',
        // 	'fname' => 'Chery Anne',
        // 	'birthday' => 'November 23, 1997',
        // 	'gender' => 'FEMALE',
        // 	'address' => 'Block 9 Lot 8 Kauswagan Basak Pardo Cebu City',
        // 	'contact' => '09192858226',
        // 	'email' => 'cherryanneretuya@yahoo.com',
        // ],
        // [
        // 	'student_id' => 109,
        // 	'lname' => 'Retuya',
        // 	'fname' => 'Chery Anne',
        // 	'birthday' => 'November 23, 1997',
        // 	'gender' => 'FEMALE',
        // 	'address' => 'Block 9 Lot 8 Kauswagan Basak Pardo Cebu City',
        // 	'contact' => '09192858226',
        // 	'email' => 'cherryanneretuya@yahoo.com',
        // ],
        // [
        // 	'student_id' => 110,
        // 	'lname' => 'Retuya',
        // 	'fname' => 'Chery Anne',
        // 	'birthday' => 'November 23, 1997',
        // 	'gender' => 'FEMALE',
        // 	'address' => 'Block 9 Lot 8 Kauswagan Basak Pardo Cebu City',
        // 	'contact' => '09192858226',
        // 	'email' => 'cherryanneretuya@yahoo.com',
        // ],
        // [
        // 	'student_id' => 111,
        // 	'lname' => 'Retuya',
        // 	'fname' => 'Chery Anne',
        // 	'birthday' => 'November 23, 1997',
        // 	'gender' => 'FEMALE',
        // 	'address' => 'Block 9 Lot 8 Kauswagan Basak Pardo Cebu City',
        // 	'contact' => '09192858226',
        // 	'email' => 'cherryanneretuya@yahoo.com',
        // ],
        // [
        // 	'student_id' => 112,
        // 	'lname' => 'Retuya',
        // 	'fname' => 'Chery Anne',
        // 	'birthday' => 'November 23, 1997',
        // 	'gender' => 'FEMALE',
        // 	'address' => 'Block 9 Lot 8 Kauswagan Basak Pardo Cebu City',
        // 	'contact' => '09192858226',
        // 	'email' => 'cherryanneretuya@yahoo.com',
        // ],
        // [
        // 	'student_id' => 113,
        // 	'lname' => 'Retuya',
        // 	'fname' => 'Chery Anne',
        // 	'birthday' => 'November 23, 1997',
        // 	'gender' => 'FEMALE',
        // 	'address' => 'Block 9 Lot 8 Kauswagan Basak Pardo Cebu City',
        // 	'contact' => '09192858226',
        // 	'email' => 'cherryanneretuya@yahoo.com',
        // ],
        // [
        // 	'student_id' => 114,
        // 	'lname' => 'Retuya',
        // 	'fname' => 'Chery Anne',
        // 	'birthday' => 'November 23, 1997',
        // 	'gender' => 'FEMALE',
        // 	'address' => 'Block 9 Lot 8 Kauswagan Basak Pardo Cebu City',
        // 	'contact' => '09192858226',
        // 	'email' => 'cherryanneretuya@yahoo.com',
        // ],
        // [
        // 	'student_id' => 115,
        // 	'lname' => 'Retuya',
        // 	'fname' => 'Chery Anne',
        // 	'birthday' => 'November 23, 1997',
        // 	'gender' => 'FEMALE',
        // 	'address' => 'Block 9 Lot 8 Kauswagan Basak Pardo Cebu City',
        // 	'contact' => '09192858226',
        // 	'email' => 'cherryanneretuya@yahoo.com',
        // ],
        // [
        // 	'student_id' => 116,
        // 	'lname' => 'Retuya',
        // 	'fname' => 'Chery Anne',
        // 	'birthday' => 'November 23, 1997',
        // 	'gender' => 'FEMALE',
        // 	'address' => 'Block 9 Lot 8 Kauswagan Basak Pardo Cebu City',
        // 	'contact' => '09192858226',
        // 	'email' => 'cherryanneretuya@yahoo.com',
        // ],
        // [
        // 	'student_id' => 117,
        // 	'lname' => 'Retuya',
        // 	'fname' => 'Chery Anne',
        // 	'birthday' => 'November 23, 1997',
        // 	'gender' => 'FEMALE',
        // 	'address' => 'Block 9 Lot 8 Kauswagan Basak Pardo Cebu City',
        // 	'contact' => '09192858226',
        // 	'email' => 'cherryanneretuya@yahoo.com',
        // ]);

        DB::table('students')->insert($students);
    }
}
