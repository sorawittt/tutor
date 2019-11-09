<?php

use Illuminate\Database\Seeder;

class EnrollsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $enroll = new App\Enroll;
        $enroll->student_id = 1;
        $enroll->course_id = 1;
        $enroll->price = 2000;
        $enroll->status = 0;
        $enroll->save();

        $enroll = new App\Enroll;
        $enroll->student_id = 1;
        $enroll->course_id = 2;
        $enroll->price = 2500;
        $enroll->status = 1;
        $enroll->save();

        $enroll = new App\Enroll;
        $enroll->student_id = 2;
        $enroll->course_id = 1;
        $enroll->price = 2500;
        $enroll->status = 1;
        $enroll->save();

        $enroll = new App\Enroll;
        $enroll->student_id = 3;
        $enroll->course_id = 3;
        $enroll->price = 2300;
        $enroll->status = 0;
        $enroll->save();

        $enroll = new App\Enroll;
        $enroll->student_id = 3;
        $enroll->course_id = 4;
        $enroll->price = 2700;
        $enroll->status = 0;
        $enroll->save();

        $enroll = new App\Enroll;
        $enroll->student_id = 4;
        $enroll->course_id = 2;
        $enroll->price = 2500;
        $enroll->status = 0;
        $enroll->save();

        $enroll = new App\Enroll;
        $enroll->student_id = 5;
        $enroll->course_id = 2;
        $enroll->price = 2500;
        $enroll->status = 1;
        $enroll->save();

        $enroll = new App\Enroll;
        $enroll->student_id = 6;
        $enroll->course_id = 5;
        $enroll->price = 2000;
        $enroll->status = 0;
        $enroll->save();

        $enroll = new App\Enroll;
        $enroll->student_id = 7;
        $enroll->course_id = 7;
        $enroll->price = 1800;
        $enroll->status = 1;
        $enroll->save();
        
        $enroll = new App\Enroll;
        $enroll->student_id = 8;
        $enroll->course_id = 2;
        $enroll->price = 2500;
        $enroll->status = 1;
        $enroll->save();

        $enroll = new App\Enroll;
        $enroll->student_id = 5;
        $enroll->course_id = 5;
        $enroll->price = 2000;
        $enroll->status = 1;
        $enroll->save();

    }
}
