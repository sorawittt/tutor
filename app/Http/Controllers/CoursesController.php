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

class CoursesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $courses = DB::table('courses')->where('deleted_at', '=', null)->get();
        return view('course.index', ['courses' => $courses]);
    }

    public function addCourse() {
        return view('course.addCourse');
    }

    public function submitAddCourse(Request $request) {

        // dd($request->all());
        $customMessages = [
            'name.required' => 'กรุณากรอกชื่อคอร์ส',
            'description.required' => 'กรุณากรอกวัน - เวลาที่เรียน',
            'price.required' => 'กรุณากรอกราคา',
            'price.integer' => 'ราคาต้องเป็นตัวเลขเท่านั้น',
        ];
        
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'description' => ['required'],
            'price' => ['required', 'integer'],
        ], $customMessages);

        if ($validator->fails()) {
            return redirect('/addCourse')
                        ->withErrors($validator)
                        ->withInput();
        }

        $course = new Course;
        $course->name = $request->name;
        $course->description = $request->description;
        $course->price = $request->price;
        $course->save();
        return redirect('/courses')->with('alert','เพิ่มคอร์สสำเร็จ');
    }

    public function editCourse(Request $request) {
        $id = $request->input('course_id');
        $course = DB::table('courses')->where('id', $id)->first();
        return view('course.editCourse', ['course' => $course]);
    }

    public function submitEditCourse(Request $request) {
        $course = Course::find($request->id);
        $course->name = $request->name;
        $course->description = $request->description;
        $course->price = $request->price;
        $course->save();
        return redirect('/courses')->with('alert','แก้ไขคอร์สสำเร็จ');
    }

    public function deleteCourse(Request $request) {
        $course = Course::find($request->course_id);
        $course->deleted_at = now()->timestamp;
        $course->save();
        return redirect('/courses')->with('alert','ลบคอร์สสำเร็จ');
    }

    public function registerCourse(Request $request) {
        $customMessages = [
            'selectCourse.required' => 'กรุณาเลือกคอร์สที่ต้องการลงทะเบียน',
        ];
        
        $validator = Validator::make($request->all(), [
            'selectCourse' => ['required'],
        ], $customMessages);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator);
        }

        $enroll = new Enroll;
        $enroll->student_id = $request->studentId;
        $enroll->course_id = $request->selectCourse;
        $course = Course::find($request->selectCourse);
        $enroll->price = $course->price;
        $enroll->save();

        return redirect()->back()->with('alert','ลงทะเบียนสำเร็จ');
    }

    public function enrollsCourse(Request $request) {
        $enroll = DB::table('enrolls')
                    ->where('course_id', $request->course_id)
                    ->join('students', 'enrolls.student_id', '=', 'students.id')
                    ->join('courses', 'enrolls.course_id', '=', 'courses.id')
                    ->get();
        $course = Course::find($request->course_id);
        return view('course.enrollsCourse', ['enrollStudents' => $enroll, 'courseName' => $course->name]);
    }

}

