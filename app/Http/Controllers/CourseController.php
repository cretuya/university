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

class CourseController extends Controller
{
	// shows all courses
	public function courses()
	{
		$courses = Course::all();

		return response() -> json($courses);
	}

	// shows all students' courses
	public function studentscourses()
	{
		$students = Student::all();
		$studentscourses = Array();

		foreach ($students as $student)
		{
			$studentcourse = StudentCourse::where('student_id', $student->student_id)->first();
			$course = Course::where('course_id', $studentcourse->course_id)->first();

			array_push($studentscourses, $course);
		}

		return response() ->json(['student' => $students, 'course' => $studentscourses]);
	}

	// get department of a certain course
	public function coursedepartment(Request $request)
	{
		$course = Course::where('course_id', $request->input('course_id'))->first();
		if (count($course) > 0)
		{
			$department = $course->department;

			return response() -> json(['course' => $course, 'department' => $department]);
		}
		else
		{
			return response()-> json(['message' => 'Course id not found.']);
		}

	}

	//get all student in a certain course
	public function studentsinacourse(Request $request)
	{
		$course = Course::where('course_id', $request->input('course_id'))->first();


		if (count($course) > 0)
		{
			$scourse = StudentCourse::where('course_id', $course->course_id)->get();
			$students = Array();

			foreach($scourse as $s)
			{	
				$student = $s->student;
				array_push($students, $student);
			}

			return response() ->json($students);
		}
		else
		{
			return response()-> json(['message' => 'Course id not found.']);
		}


	}
}
