<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = new App\Student;
        $student->first_name = 'สรวิชญ์';
        $student->last_name = 'เรืองทอง';
        $student->nickname = 'ปอนด์';
        $student->school_id = 3;
        $student->sex = '1';
        $student->phone_number = '0901253468';
        $student->national_id = '1123456789123';
        $student->education_level_id = 12;
        $student->save();

        $student = new App\Student;
        $student->first_name = 'ณัฐพงษ์';
        $student->last_name = 'รุ่งเรือง';
        $student->nickname = 'เต้';
        $student->school_id = 5;
        $student->sex = '1';
        $student->phone_number = '0879654125';
        $student->national_id = '9046736020844';
        $student->education_level_id = 6;
        $student->save();

        $student = new App\Student;
        $student->first_name = 'ณัฐวุฒิ';
        $student->last_name = 'มานตรี';
        $student->nickname = 'ดีป';
        $student->school_id = 9;
        $student->sex = '1';
        $student->phone_number = '0879654123';
        $student->national_id = '1273631836364';
        $student->education_level_id = 9;
        $student->save();

        $student = new App\Student;
        $student->first_name = 'วรพัฒน์';
        $student->last_name = 'มากพงษ์';
        $student->nickname = 'บิว';
        $student->school_id = 15;
        $student->sex = '1';
        $student->phone_number = '0842369514';
        $student->national_id = '2370379792145';
        $student->education_level_id = 11;
        $student->save();

        $student = new App\Student;
        $student->first_name = 'สุกฤตา';
        $student->last_name = 'อัครธเนศ';
        $student->nickname = 'จิงจิง';
        $student->school_id = 6;
        $student->sex = '2';
        $student->phone_number = '0874563921';
        $student->national_id = '1636448585268';
        $student->education_level_id = 10;
        $student->save();

        $student = new App\Student;
        $student->first_name = 'เฉลิมชนม์';
        $student->last_name = 'อ่อนบัว';
        $student->nickname = 'เอิร์ธ';
        $student->school_id = 15;
        $student->sex = '1';
        $student->phone_number = '0874621365';
        $student->national_id = '7816325531361';
        $student->education_level_id = 12;
        $student->save();

        $student = new App\Student;
        $student->first_name = 'ภาสินี';
        $student->last_name = 'วสุพันธ์';
        $student->nickname = 'กะป๊อป';
        $student->school_id = 11;
        $student->sex = '2';
        $student->phone_number = '0945217963';
        $student->national_id = '1314516591648';
        $student->education_level_id = 12;
        $student->save();

        $student = new App\Student;
        $student->first_name = 'รพีพัฒน์';
        $student->last_name = 'แก้วประสิทธิ์';
        $student->nickname = 'ชุน';
        $student->school_id = 5;
        $student->sex = '1';
        $student->phone_number = '09456321584';
        $student->national_id = '7964433331138';
        $student->education_level_id = 4;
        $student->save();

        $student = new App\Student;
        $student->first_name = 'ถิรคุปต์';
        $student->last_name = 'โพนเงิน';
        $student->nickname = 'ต้า';
        $student->school_id = 16;
        $student->sex = '1';
        $student->phone_number = '0945175521';
        $student->national_id = '4605487509431';
        $student->education_level_id = 7;
        $student->save();
        
    }
}
