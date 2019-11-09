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

class PaymentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function payment() {
        $enrolls = DB::table('enrolls')
                    ->whereNull('enrolls.deleted_at')
                    ->join('courses', 'enrolls.course_id', '=', 'courses.id')
                    ->join('students', 'enrolls.student_id', '=', 'students.id')
                    ->get();
        return view('payment.index', ['enrolls' => $enrolls]);
    }


}

