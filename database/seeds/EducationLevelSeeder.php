<?php

use Illuminate\Database\Seeder;

class EducationLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $level = new App\EducationLevel;
        $level->name = 'ประถมศึกษาปีที่ 1';
        $level->save();

        $level = new App\EducationLevel;
        $level->name = 'ประถมศึกษาปีที่ 2';
        $level->save();
        
        $level = new App\EducationLevel;
        $level->name = 'ประถมศึกษาปีที่ 3';
        $level->save();
        
        $level = new App\EducationLevel;
        $level->name = 'ประถมศึกษาปีที่ 4';
        $level->save();

        $level = new App\EducationLevel;
        $level->name = 'ประถมศึกษาปีที่ 5';
        $level->save();

        $level = new App\EducationLevel;
        $level->name = 'ประถมศึกษาปีที่ 6';
        $level->save();

        $level = new App\EducationLevel;
        $level->name = 'มัธยมศึกษาปีที่ 1';
        $level->save();

        $level = new App\EducationLevel;
        $level->name = 'มัธยมศึกษาปีที่ 2';
        $level->save();

        $level = new App\EducationLevel;
        $level->name = 'มัธยมศึกษาปีที่ 3';
        $level->save();

        $level = new App\EducationLevel;
        $level->name = 'มัธยมศึกษาปีที่ 4';
        $level->save();

        $level = new App\EducationLevel;
        $level->name = 'มัธยมศึกษาปีที่ 5';
        $level->save();

        $level = new App\EducationLevel;
        $level->name = 'มัธยมศึกษาปีที่ 6';
        $level->save();
        
        $level = new App\EducationLevel;
        $level->name = 'อื่น ๆ';
        $level->save();
        
    }
}
