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

class GradeReportController extends Controller
{
	// show all gradereports
	public function gradereports()
	{
		$reports = GradeReport::all();

		return response()-> json($reports);
	}

	// get all reports the are below 75
	public function belowaveragereports()
	{
		$reports = GradeReport::where('numeric_grade' , '<', 75)->get();

		if (count($reports) == 0)
		{
			return response()-> json(['message' => 'No reports are found.']);
		}

		return response()-> json($reports);
	}
	
}
