<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = new App\Course;
        $course->name = 'ภาษาไทย';
        $course->description = "พ / 12.00 - 14.00";
        $course->price = 2000;
        $course->save();

        $course = new App\Course;
        $course->name = 'คณิตศาสตร์';
        $course->description = "พฤ / 13.00 - 16.00";
        $course->price = 2500;
        $course->save();

        $course = new App\Course;
        $course->name = 'วิทยาศาสตร์';
        $course->description = "ส, อ / 10.00 - 12.00";
        $course->price = 2300;
        $course->save();

        $course = new App\Course;
        $course->name = 'ฟิสิกส์';
        $course->description = "จ / 16.00 - 18.00";
        $course->price = 2700;
        $course->save();

        $course = new App\Course;
        $course->name = 'เคมี';
        $course->description = "อ / 12.00 - 14.00";
        $course->price = 2000;
        $course->save();

        $course = new App\Course;
        $course->name = 'ชีวะ';
        $course->description = "อา / 14.00 - 16.00";
        $course->price = 1800;
        $course->save();
        
        $course = new App\Course;
        $course->name = 'สังคม';
        $course->description = "พฤ / 16.00 - 17.00";
        $course->price = 1500;
        $course->save();
    }
}
