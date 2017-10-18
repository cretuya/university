<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Course;
use App\StudentCourse;
use App\Department;
use App\GradeReport;
use App\Section;
use App\StudentDepartment;

class DepartmentController extends Controller
{
	// show all departments
	public function departments()
	{
		$departments = Department::all();

		return response() -> json($departments);
	}

	// get all students in a certain department
	public function studentsinadept(Request $request)
	{
		$department = Department::where('code', $request->input('code'))->first();

		if (count($department) > 0)
		{

			$sdept = StudentDepartment::where('code', $department->code)->get();
			$students = Array();

			foreach ($sdept as $stud)
			{
				$student = $stud->student;
				array_push($students, $student);
			}

			return response() -> json($students);
		}
		else
		{
			return response()-> json(['message' => 'Course id not found.']);
		}

	}

	// get all courses in a department
	public function departmentcourses(Request $request)
	{
		$courses = Course::where('code', $request->input('code'))->get();

		if (count($courses) == null)
		{
			return response() -> json(['message' => 'No courses are available in this department.']); 
		}

		return response() -> json($courses);		
	}
}
