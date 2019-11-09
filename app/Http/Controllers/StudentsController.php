<?php

namespace App\Http\Controllers;
use App\Student;
use App\EducationLevel;
use App\School;
use App\Course;
use App\Enroll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('student.index');
    }

    public function registerStudent() {
        $levels = EducationLevel::get();
        $schools = School::get();
        return view('student.registerStudent', ['levels' => $levels, 'schools' => $schools]);
    }

    public function addStudent(Request $request) {

        // dd($request->all());
        $customMessages = [
            'name.required' => 'กรุณากรอกชื่อ',
            'lastname.required' => 'กรุณากรอกนามสกุล',
            'nickname.required' => 'กรุณากรอกชื่อเล่น',
            'nationalId.required' => 'กรุณากรอกเลขบัตรประชาชน',
            'nationalId.digits' => 'กรุณากรอกเลขบัตรประชาชนต้องเป็นตัวเลขและมีความยาว 13 ตัว',
            'school.required' => 'กรุณาเลือกโรงเรียน',
            'phoneNumber.required' => 'กรุณากรอกเบอร์โทร',
            'phoneNumber.digits' => 'เบอร์โทรต้องเป็นตัวเลขและมีความยาว 10 ตัว',
            'educationLevel.required' => 'กรุณาเลือกโรงเรียน',
        ];
        
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'lastname' => ['required'],
            'nickname' => ['required'],
            'nationalId' => ['required', 'digits:13'],
            'school' => ['required'],
            'phoneNumber' => ['required', 'digits:10'],
            'educationLevel' => ['required']
        ], $customMessages);

        if ($validator->fails()) {
            return redirect('/registerStudent')
                        ->withErrors($validator)
                        ->withInput();
        }

        $student = new Student;
        $student->first_name = $request->name;
        $student->last_name = $request->lastname;
        $student->nickname = $request->nickname;
        $student->national_id = $request->nationalId;
        $student->school_id = $request->school;
        $student->phone_number = $request->phoneNumber;
        $student->sex = $request->sex;
        $student->education_level_id = $request->educationLevel;
        $student->save();

        return redirect('/')->with('alert','บันทึกข้อมูลนักเรียนสำเร็จ');
    }

    public function students() {
        $students = DB::table('students')->leftjoin('schools', 'students.school_id', '=', 'schools.id')->select('students.*', 'schools.name as school_name')->get();
        // ->select('students.id', 'students.first_name', 'students.last_name', 'students.phone_number', 'students.school_id')->get();
        return view('student.students', ['students' => $students]);
    }

    public function student(Request $request) {
        $student = Student::where('id', $request->student_id)->first();
        $education = EducationLevel::where('id', $student->education_level_id)->first();
        $school = School::where('id', $student->school_id)->first();
        $courses = Course::get();
        $enrolls = DB::table('enrolls')
                    ->whereNull('enrolls.deleted_at')
                    ->where('student_id', $student->id)
                    ->leftjoin('courses', 'enrolls.course_id', '=', 'courses.id')
                    ->select('enrolls.*', 'courses.name as course_name', 'courses.description as time')
                    ->get();
        
        return view('student.studentInfo', ['student' => $student, 'education' => $education->name, 'school'=>$school, 'courses' => $courses, 'enrolls' => $enrolls]);
    }



    public function editStudent(Request $request) {
        $id = $request->input('student_id');
        $student = DB::table('students')->where('id', $id)->first();
        $schools = School::get();
        $levels = EducationLevel::get();
        return view('student.editStudent', ['student' => $student, 'schools' => $schools, 'levels' => $levels]);
    }

    public function submitEdit(Request $request) {
        // dd($request->all());
        $student = Student::find($request->id);
        // dd($student);
        $student->first_name = $request->name;
        $student->last_name = $request->lastname;
        $student->nickname = $request->nickname;
        $student->national_id = $request->nationalId;
        $student->school_id = $request->school;
        $student->phone_number = $request->phoneNumber;
        $student->sex = $request->sex;
        $student->education_level_id = $request->educationLevel;
        $student->save();
        return redirect('/')->with('alert','แก้ไขข้อมูลสำเร็จ');
    }

    public function studentInfo(Request $request) {
        $customMessages = [
            'id.required' => 'กรุณากรอกเลขบัตรประชาชน',
            'id.digits' => 'เลขบัตรประชาชนต้องเป็นตัวเลขและมีความยาว 13 ตัว',
        ];
        
        $validator = Validator::make($request->all(), [
            'id' => ['required', 'digits:13']], $customMessages);

        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        }

        $id = $request->id;
        $student = Student::where('national_id', $id)->first();
        if (!$student) {
            return redirect()->back()->with('alert', 'ไม่พบข้อมูล');
        }
        $education = EducationLevel::where('id', $student->education_level_id)->first();
        $school = School::where('id', $student->school_id)->first();
        $courses = Course::get();
        return view('student.studentInfo', ['student' => $student, 'education' => $education->name, 'school'=>$school, 'courses' => $courses]);
    }

    public function editPayment(Request $request) {
        $id = $request->input('enroll_id');
        $enroll = Enroll::where('id', $id)->first();
        if ($enroll->status == 1) {
            $enroll->status = 0;
        } else {
            $enroll->status = 1;
        }
        $enroll->save();
        return redirect()->back()->with('alert', 'บันทึกสำเร็จ');
    }

    public function deleteEnroll(Request $request) {
        $id = $request->input('enroll_id');
        $enroll = Enroll::where('id', $id)->first();
        $enroll->deleted_at = now();
        $enroll->save();
        return redirect()->back()->with('alert', 'บันทึกสำเร็จ');
    }

}

