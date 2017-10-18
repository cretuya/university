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
use App\User;

class StudentController extends Controller
{
	// shows all students
	public function students(Request $request) 
	{
		// $user = User::where('api_key', $request->input('api_key'))->first();

		// if(count($user) > 0)
		// {
			$students = Student::all();

			return response() -> json($students);			
		// }
		// else
		// {
		// 	return response() -> json(['message' => 'Api key not found']);
		// }

	}

	// gets the student's courses
	public function studentcourses(Request $request)
	{
		$student = Student::where('student_id', $request->input('student_id'))->first();


		if (count($student) > 0)
		{
			$studentcourses = StudentCourse::where('student_id', $student->student_id)->get();
			$courses = Array();

			foreach ($studentcourses as $studentcourse)
			{
				$course = Course::where('course_id', $studentcourse->course_id)->first();
				array_push($courses, $course);
			}

			return response() ->json(['student' => $student, 'courses' => $courses]);			
		}
		else
		{
			return response()-> json(['message' => 'Student id not found.']);
		}

	}

	// get the student's department
	public function studentdepartment(Request $request)
	{
		$student = Student::where('student_id', $request->input('student_id'))->first();


		if (count($student) > 0)
		{
			$studentdepartment = StudentDepartment::where('student_id', $student->student_id)->first();
			$department = Department::where('code', $studentdepartment->code)->first();
			return response() ->json(['student' => $student, 'department' => $department]);		
		}
		else
		{
			return response()-> json(['message' => 'Student id not found.']);
		}

	}

	// gets all the grade of the students in a certain section
	public function studentsgrade(Request $request)
	{
		$section = Section::where('section_num', $request->input('section_num'))->first();
		$reports = GradeReport::where('section_num', $request->input('section_num'))->get();
		$grades = Array();
		$students = Array();

		if (count($section) > 0)
		{
			foreach ($reports as $report)
			{
				$grade = $report->numeric_grade;
				array_push($grades,$grade);
				$student = Student::where('student_id', $report->student_id)->first();
				array_push($students, $student);
			}

			return response() ->json(['section' => $section, 'students' => $students, 'grades' => $grades]);
		}
		else
		{
			return response()-> json(['message' => 'Section number not found.']);
		}


	}

}
