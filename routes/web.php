<?php
use App\Student;
use App\Course;
use App\StudentCourse;
use App\Department;
use App\GradeReport;
use App\Section;
use App\StudentDepartment;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::any('/', function(){
	$server = new nusoap_server();
	$server->soap_defencoding = 'utf-8';
    $server->encode_utf8 = false;
    $server->decode_utf8 = false;
    $server->configureWSDL('TestService',false, url('/'));

$server->register(
	'student',
	array("id" => "xsd:string"),
	array("result" => "xsd:string"),
	url('/')
	);

$server->register(
	'allstudents',
	array("id" => "xsd:string"),
	array("result" => "xsd:string"),
	url('/')
	);

$server->register(
	'studentcourse',
	array("id" => "xsd:string"),
	array("result" => "xsd:string"),
	url('/')
	);

$server->register(
	'studentdepartment',
	array("id" => "xsd:string"),
	array("result" => "xsd:string"),
	url('/')
	);

$server->register(
	'studentgrade',
	array("id" => "xsd:string"),
	array("result" => "xsd:string"),
	url('/')
	);

$server->register(
	'courses',
	array("id" => "xsd:string"),
	array("result" => "xsd:string"),
	url('/')
	);

$server->register(
	'studentcourseall',
	array("id" => "xsd:string"),
	array("result" => "xsd:string"),
	url('/')
	);

$server->register(
	'departmentofcourse',
	array("id" => "xsd:string"),
	array("result" => "xsd:string"),
	url('/')
	);

$server->register(
	'studentscourse',
	array("id" => "xsd:string"),
	array("result" => "xsd:string"),
	url('/')
	);

$server->register(
	'coursesdepartment',
	array("id" => "xsd:string"),
	array("result" => "xsd:string"),
	url('/')
	);

$server->register(
	'departments',
	array("id" => "xsd:string"),
	array("result" => "xsd:string"),
	url('/')
	);

$server->register(
	'studentsdepartment',
	array("id" => "xsd:string"),
	array("result" => "xsd:string"),
	url('/')
	);

$server->register(
	'studentgradeall',
	array("id" => "xsd:string"),
	array("result" => "xsd:string"),
	url('/')
	);

$server->register(
	'sections',
	array("id" => "xsd:string"),
	array("result" => "xsd:string"),
	url('/')
	);

$server->register(
	'sectionsdepartment',
	array("id" => "xsd:string"),
	array("result" => "xsd:string"),
	url('/')
	);

$server->register(
	'studentssection',
	array("id" => "xsd:string"),
	array("result" => "xsd:string"),
	url('/')
	);

$server->register(
	'gradereportsbelow',
	array("id" => "xsd:string"),
	array("result" => "xsd:string"),
	url('/')
	);

function student($id)
{
	$xml = new SimpleXMLElement('<xml/>');
	$student = Student::where('student_id',$id)->first();
	// return $student;
	$stdnt = $xml->addChild('student');
    $stdnt->addChild('studentId' , $student->student_id);
    $stdnt->addChild('firstname' , $student->fname);
    $stdnt->addChild('lastname' , $student->lname);
    $stdnt->addChild('birthday' , $student->birthday);
    $stdnt->addChild('gender' , $student->gender);
    $stdnt->addChild('address' , $student->address);
    $stdnt->addChild('contact' , $student->contact);
    $stdnt->addChild('email' , $student->email);

Header('Content-type: text/xml');

return $xml->asXML();
}

function allstudents()
{
	$xml = new SimpleXMLElement('<xml/>');
	$students = Student::all();
	// return $student;
	foreach ($students as $student) {
		$stdnt = $xml->addChild('student');
    	$stdnt->addChild('studentId' , $student->student_id);
    	$stdnt->addChild('firstname' , $student->fname);
    	$stdnt->addChild('lastname' , $student->lname);
    	$stdnt->addChild('birthday' , $student->birthday);
    	$stdnt->addChild('gender' , $student->gender);
    	$stdnt->addChild('address' , $student->address);
    	$stdnt->addChild('contact' , $student->contact);
    	$stdnt->addChild('email' , $student->email);
	}

Header('Content-type: text/xml');

return $xml->asXML();
}

function studentcourse($id)
{
	$xml = new SimpleXMLElement('<xml/>');
	$student = Student::join('studentcourses','students.student_id','=','studentcourses.student_id')->join('courses','studentcourses.course_id','=','courses.course_id')->where('students.student_id', $id)->first();

		$stdnt = $xml->addChild('student');
    	$stdnt->addChild('studentId' , $student->student_id);
    	$stdnt->addChild('firstname' , $student->fname);
    	$stdnt->addChild('lastname' , $student->lname);
    	$stdnt->addChild('course' , $student->course_id);
    	$stdnt->addChild('courseName' , $student->desc);

Header('Content-type: text/xml');

return $xml->asXML();
}

function studentdepartment($id)
{
	$xml = new SimpleXMLElement('<xml/>');

	$student = Student::join('studentdepartments','students.student_id','=','studentdepartments.student_id')->join('departments','studentdepartments.code','=','departments.code')->where('students.student_id', $id)->first();

		$stdnt = $xml->addChild('student');
    	$stdnt->addChild('studentId' , $student->student_id);
    	$stdnt->addChild('firstname' , $student->fname);
    	$stdnt->addChild('lastname' , $student->lname);
    	$stdnt->addChild('code' , $student->code);
    	$stdnt->addChild('departmentname' , $student->name);

Header('Content-type: text/xml');

return $xml->asXML();
}

function studentgrade($id)
{
	$xml = new SimpleXMLElement('<xml/>');

	$student = Student::join('gradereports','students.student_id','=','gradereports.student_id')->where('students.student_id', $id)->first();

		$stdnt = $xml->addChild('student');
    	$stdnt->addChild('studentId' , $student->student_id);
    	$stdnt->addChild('firstname' , $student->fname);
    	$stdnt->addChild('lastname' , $student->lname);
    	$stdnt->addChild('sectionNumber' , $student->section_num);
    	$stdnt->addChild('grade' , $student->numeric_grade);

Header('Content-type: text/xml');

return $xml->asXML();
}

function courses()
{
	$xml = new SimpleXMLElement('<xml/>');
	$courses = Course::all();

	foreach ($courses as $course) {
		$crs = $xml->addChild('course');
    	$crs->addChild('courseId' , $course->course_id);
    	$crs->addChild('courseName' , $course->desc);
	}

Header('Content-type: text/xml');

return $xml->asXML();
}

function studentcourseall()
{
	$xml = new SimpleXMLElement('<xml/>');
	$courses = Student::join('studentcourses','students.student_id','=','studentcourses.student_id')->join('courses','studentcourses.course_id','=','courses.course_id')->get();

	foreach ($courses as $course) {
		$crs = $xml->addChild('course');
    	$crs->addChild('studentId' , $course->student_id);
    	$crs->addChild('firstname' , $course->fname);
    	$crs->addChild('lastname' , $course->lname);
    	$crs->addChild('courseId' , $course->course_id);
    	$crs->addChild('course' , $course->desc);
	}

Header('Content-type: text/xml');

return $xml->asXML();
}

function departmentofcourse($id)
{
	$xml = new SimpleXMLElement('<xml/>');

	$course = Course::join('departments','courses.code','=','departments.code')->where('courses.course_id', $id)->first();

		$crs = $xml->addChild('course');
    	$crs->addChild('courseId' , $course->course_id);
    	$crs->addChild('courseName' , $course->desc);
    	$crs->addChild('departmentCode' , $course->code);
    	$crs->addChild('departmentName' , $course->name);

Header('Content-type: text/xml');

return $xml->asXML();
}

function studentscourse($id)
{
	$xml = new SimpleXMLElement('<xml/>');

	$student = Course::join('studentcourses','courses.course_id','=','studentcourses.course_id')->join('students','studentcourses.student_id','=','students.student_id')->where('courses.course_id', $id)->get();

	foreach ($student as $students) {
		$stdnt = $xml->addChild('student');
    	$stdnt->addChild('studentId' , $students->student_id);
    	$stdnt->addChild('firstname' , $students->fname);
    	$stdnt->addChild('lastname' , $students->lname);
    	$stdnt->addChild('courseId' , $students->course_id);
    	$stdnt->addChild('courseName' , $students->desc);
    }

Header('Content-type: text/xml');

return $xml->asXML();
}

function departments()
{
	$xml = new SimpleXMLElement('<xml/>');
	$departments = Course::all();

	foreach ($departments as $department) {
		$dprtmnt = $xml->addChild('department');
    	$dprtmnt->addChild('departmentId' , $department->code);
    	$dprtmnt->addChild('departmentName' , $department->desc);
	}

Header('Content-type: text/xml');

return $xml->asXML();
}

function studentsdepartment($id)
{
	$xml = new SimpleXMLElement('<xml/>');

	$student = Department::join('studentdepartments','departments.code','=','studentdepartments.code')->join('students','studentdepartments.student_id','=','students.student_id')->where('studentdepartments.code', $id)->get();

	foreach ($student as $students) {
		$stdnt = $xml->addChild('student');
    	$stdnt->addChild('studentId' , $students->student_id);
    	$stdnt->addChild('firstname' , $students->fname);
    	$stdnt->addChild('lastname' , $students->lname);
    	$stdnt->addChild('departmentId' , $students->code);
    	$stdnt->addChild('departmentName' , $students->name);
    }

Header('Content-type: text/xml');

return $xml->asXML();
}

function coursesdepartment($id)
{
	$xml = new SimpleXMLElement('<xml/>');

	$courses = Course::join('departments','courses.code','=','departments.code')->where('courses.code',$id)->get();

	foreach ($courses as $course) {
		$crs = $xml->addChild('course');
    	$crs->addChild('courseId' , $course->course_id);
    	$crs->addChild('courseName' , $course->desc);
    	$crs->addChild('code' , $course->code);
    	$crs->addChild('departmentname' , $course->name);
	}

Header('Content-type: text/xml');

return $xml->asXML();
}

function studentgradeall()
{
	$xml = new SimpleXMLElement('<xml/>');

	$students = Student::join('gradereports','students.student_id','=','gradereports.student_id')->get();
	foreach ($students as $student) {
		$stdnt = $xml->addChild('student');
    	$stdnt->addChild('studentId' , $student->student_id);
    	$stdnt->addChild('firstname' , $student->fname);
    	$stdnt->addChild('lastname' , $student->lname);
    	$stdnt->addChild('sectionNumber' , $student->section_num);
    	$stdnt->addChild('grade' , $student->numeric_grade);
	}

Header('Content-type: text/xml');

return $xml->asXML();
}

function sections()
{
	$xml = new SimpleXMLElement('<xml/>');

	$sections = Section::all();
	foreach ($sections as $section) {
		$sction = $xml->addChild('section');
    	$sction->addChild('studentId' , $section->student_id);
    	$sction->addChild('firstname' , $section->fname);
    	$sction->addChild('lastname' , $section->lname);
    	$sction->addChild('sectionNumber' , $section->section_num);
    	$sction->addChild('grade' , $section->numeric_grade);
	}

Header('Content-type: text/xml');

return $xml->asXML();
}

function sectionsdepartment($id)
{
	$xml = new SimpleXMLElement('<xml/>');

	$sections = Section::join('departments','sections.code','=','departments.code')->where('sections.code',$id)->get();

	foreach ($sections as $section) {
		$sction = $xml->addChild('section');
    	$sction->addChild('sectionNum' , $section->section_num);
    	$sction->addChild('instructor' , $section->instructor);
    	$sction->addChild('code' , $section->code);
    	$sction->addChild('departmentname' , $section->name);
	}

Header('Content-type: text/xml');

return $xml->asXML();
}

function studentssection($id)
{
	$xml = new SimpleXMLElement('<xml/>');

	$students = Section::join('studentdepartments','sections.code','=','studentdepartments.code')->join('students','studentdepartments.student_id','=','students.student_id')->where('sections.section_num',$id)->get();

	foreach ($students as $student) {
		$stdnt = $xml->addChild('student');
    	$stdnt->addChild('sectionNum' , $student->section_num);
    	$stdnt->addChild('instructor' , $student->instructor);
    	$stdnt->addChild('studentId' , $student->student_id);
    	$stdnt->addChild('firstname' , $student->fname);
    	$stdnt->addChild('lastname' , $student->lname);
	}

Header('Content-type: text/xml');

return $xml->asXML();
}

function gradereportsbelow()
{
	$xml = new SimpleXMLElement('<xml/>');

	$grades = GradeReport::join('students','gradereports.student_id','=','students.student_id')->where('numeric_grade','<','75')->get();

	foreach ($grades as $grade) {
		$grd = $xml->addChild('course');
    	$grd->addChild('studentId' , $grade->student_id);
    	$grd->addChild('firstname' , $grade->fname);
    	$grd->addChild('lastname' , $grade->lname);
    	$grd->addChild('sectionNum' , $grade->section_num);
    	$grd->addChild('instructor' , $grade->instructor);
	}

Header('Content-type: text/xml');

return $xml->asXML();
}

$rawPostData = file_get_contents("php://input");
return \Response::make($server->service($rawPostData), 200, array('Content-Type' => 'text/xml; charset=ISO-8859-1'));
 	
});

Route::get('/student/{id}', function($id){
	$client = new nusoap_client("http://localhost/university/public/index.php?wsdl", true);
	$client->encode_utf8 = false;
	$client->decode_utf8 = false;           
	$client->soap_defencoding = 'utf-8';
	$result = $client->call("student", array("id" => $id));

	$error = $client->getError();
	if($error){
		return $error;    		
	}
	else{
		return $result;
	}
});

Route::get('/students', function(){
	$client = new nusoap_client("http://localhost/university/public/index.php?wsdl", true);
	$client->encode_utf8 = false;
	$client->decode_utf8 = false;           
	$client->soap_defencoding = 'utf-8';
	$result = $client->call("allstudents");

	$error = $client->getError();
	if($error){
		return $error;    		
	}
	else{
		return $result;
	}
});

Route::get('/studentcourse/{id}', function($id){
	$client = new nusoap_client("http://localhost/university/public/index.php?wsdl", true);
	$client->encode_utf8 = false;
	$client->decode_utf8 = false;           
	$client->soap_defencoding = 'utf-8';
	$result = $client->call("studentcourse", array("id" => $id));

	$error = $client->getError();
	if($error){
		return $error;    		
	}
	else{
		return $result;
	}
});

Route::get('/studentdepartment/{id}', function($id){
	$client = new nusoap_client("http://localhost/university/public/index.php?wsdl", true);
	$client->encode_utf8 = false;
	$client->decode_utf8 = false;           
	$client->soap_defencoding = 'utf-8';
	$result = $client->call("studentdepartment", array("id" => $id));

	$error = $client->getError();
	if($error){
		return $error;    		
	}
	else{
		return $result;
	}
});

Route::get('/studentgrade/{id}', function($id){
	$client = new nusoap_client("http://localhost/university/public/index.php?wsdl", true);
	$client->encode_utf8 = false;
	$client->decode_utf8 = false;           
	$client->soap_defencoding = 'utf-8';
	$result = $client->call("studentgrade", array("id" => $id));

	$error = $client->getError();
	if($error){
		return $error;    		
	}
	else{
		return $result;
	}
});

Route::get('/courses', function(){
	$client = new nusoap_client("http://localhost/university/public/index.php?wsdl", true);
	$client->encode_utf8 = false;
	$client->decode_utf8 = false;           
	$client->soap_defencoding = 'utf-8';
	$result = $client->call("courses");
	$error = $client->getError();
	if($error){
		return $error;    		
	}
	else{
		return $result;
	}
});

Route::get('/studentcourseall', function(){
	$client = new nusoap_client("http://localhost/university/public/index.php?wsdl", true);
	$client->encode_utf8 = false;
	$client->decode_utf8 = false;           
	$client->soap_defencoding = 'utf-8';
	$result = $client->call("studentcourseall");
	$error = $client->getError();
	if($error){
		return $error;    		
	}
	else{
		return $result;
	}
});

Route::get('/departmentofcourse/{id}', function($id){
	$client = new nusoap_client("http://localhost/university/public/index.php?wsdl", true);
	$client->encode_utf8 = false;
	$client->decode_utf8 = false;           
	$client->soap_defencoding = 'utf-8';
	$result = $client->call("departmentofcourse", array("id" => $id));

	$error = $client->getError();
	if($error){
		return $error;    		
	}
	else{
		return $result;
	}
});

Route::get('/studentscourse/{id}', function($id){
	$client = new nusoap_client("http://localhost/university/public/index.php?wsdl", true);
	$client->encode_utf8 = false;
	$client->decode_utf8 = false;           
	$client->soap_defencoding = 'utf-8';
	$result = $client->call("studentscourse", array("id" => $id));

	$error = $client->getError();
	if($error){
		return $error;    		
	}
	else{
		return $result;
	}
});

Route::get('/departments', function(){
	$client = new nusoap_client("http://localhost/university/public/index.php?wsdl", true);
	$client->encode_utf8 = false;
	$client->decode_utf8 = false;           
	$client->soap_defencoding = 'utf-8';
	$result = $client->call("departments");
	$error = $client->getError();
	if($error){
		return $error;    		
	}
	else{
		return $result;
	}
});

Route::get('/studentsdepartment/{id}', function($id){
	$client = new nusoap_client("http://localhost/university/public/index.php?wsdl", true);
	$client->encode_utf8 = false;
	$client->decode_utf8 = false;           
	$client->soap_defencoding = 'utf-8';
	$result = $client->call("studentsdepartment", array("id" => $id));

	$error = $client->getError();
	if($error){
		return $error;    		
	}
	else{
		return $result;
	}
});

Route::get('/coursesdepartment/{id}', function($id){
	$client = new nusoap_client("http://localhost/university/public/index.php?wsdl", true);
	$client->encode_utf8 = false;
	$client->decode_utf8 = false;           
	$client->soap_defencoding = 'utf-8';
	$result = $client->call("coursesdepartment", array("id" => $id));
	$error = $client->getError();
	if($error){
		return $error;    		
	}
	else{
		return $result;
	}
});

Route::get('/studentgradeall', function(){
	$client = new nusoap_client("http://localhost/university/public/index.php?wsdl", true);
	$client->encode_utf8 = false;
	$client->decode_utf8 = false;           
	$client->soap_defencoding = 'utf-8';
	$result = $client->call("studentgradeall");
	$error = $client->getError();
	if($error){
		return $error;    		
	}
	else{
		return $result;
	}
});

Route::get('/sections', function(){
	$client = new nusoap_client("http://localhost/university/public/index.php?wsdl", true);
	$client->encode_utf8 = false;
	$client->decode_utf8 = false;           
	$client->soap_defencoding = 'utf-8';
	$result = $client->call("sections");
	$error = $client->getError();
	if($error){
		return $error;    		
	}
	else{
		return $result;
	}
});

Route::get('/sectionsdepartment/{id}', function($id){
	$client = new nusoap_client("http://localhost/university/public/index.php?wsdl", true);
	$client->encode_utf8 = false;
	$client->decode_utf8 = false;           
	$client->soap_defencoding = 'utf-8';
	$result = $client->call("sectionsdepartment", array("id" => $id));
	$error = $client->getError();
	if($error){
		return $error;    		
	}
	else{
		return $result;
	}
});

Route::get('/studentssection/{id}', function($id){
	$client = new nusoap_client("http://localhost/university/public/index.php?wsdl", true);
	$client->encode_utf8 = false;
	$client->decode_utf8 = false;           
	$client->soap_defencoding = 'utf-8';
	$result = $client->call("studentssection", array("id" => $id));
	$error = $client->getError();
	if($error){
		return $error;    		
	}
	else{
		return $result;
	}
});


Route::get('/gradereportsbelow/', function(){
	$client = new nusoap_client("http://localhost/university/public/index.php?wsdl", true);
	$client->encode_utf8 = false;
	$client->decode_utf8 = false;           
	$client->soap_defencoding = 'utf-8';
	$result = $client->call("gradereportsbelow");
	$error = $client->getError();
	if($error){
		return $error;    		
	}
	else{
		return $result;
	}
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
