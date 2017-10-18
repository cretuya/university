<?php

use Illuminate\Http\Request;
use App\Student;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'auth:api'], function () {
    // return $request->user();
Route::get('students', 'StudentController@students');
Route::get('studentcourses', 'StudentController@studentcourses');
Route::get('studentdepartment', 'StudentController@studentdepartment');
Route::get('studentsgrade', 'StudentController@studentsgrade');

Route::get('courses', 'CourseController@courses');
Route::get('studentscourses', 'CourseController@studentscourses');
Route::get('studentsinacourse', 'CourseController@studentsinacourse');

Route::get('coursedepartment', 'CourseController@coursedepartment');
Route::get('departments', 'DepartmentController@departments');
Route::get('studentsinadept', 'DepartmentController@studentsinadept');
Route::get('departmentcourses', 'DepartmentController@departmentcourses');

Route::get('sections', 'SectionController@sections');
Route::get('sectionsinadepartment', 'SectionController@sectionsinadepartment');
Route::get('studentsinasection', 'SectionController@studentsinasection');

Route::get('gradereports', 'GradeReportController@gradereports');
Route::get('belowaveragereports', 'GradeReportController@belowaveragereports');
});

