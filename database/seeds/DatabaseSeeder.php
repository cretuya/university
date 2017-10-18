<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(StudentCoursesTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
        $this->call(GradeReportsTableSeeder::class);
        $this->call(StudentDepartmentsTableSeeder::class);
    }
}
