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

class SectionController extends Controller
{
	// show all sections
	public function sections()
	{	
		$sections = Section::all();

		if (count($sections) == 0)
		{
			return response()-> json(['message' => 'No sections are found.']);
		}
		
		return response() ->json($sections);
	}

	// get all sections from a certain department
	public function sectionsinadepartment(Request $request)
	{
		$sections = Section::where('code', $request->input('code'))->get();

		if (count($sections) == 0)
		{
			return response()-> json(['message' => 'No sections are found.']);
		}

		return response() ->json($sections);
	}

	// get students in certain section
	public function studentsinasection(Request $request)
	{
		$section = Section::where('section_num', $request->input('section_num'))->first();
		if (count($section) > 0)
		{

				$course = $section->reports;
				$students = $section->reports;
				$ids = Array();

				foreach ($students as $student) {
					$id = $student->student;
					array_push($ids, $id);
				}
				return response() ->json($ids);
		}
		else
		{
			return response()-> json(['message' => 'Section num not found.']);
		}

	}
}
