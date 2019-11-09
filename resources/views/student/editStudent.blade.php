@extends('layouts.master')
@section('content')

    <div class="container">
        <h2 class='regisHead'>ลงทะเบียนนักเรียนใหม่</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
             <ul>
                @foreach ($errors->all() as $errors)
                    <li>{{ $errors }}</li>   
                @endforeach
                </ul>
            </div>
        @endif

        <form action="/submitEdit" method="POST">
        @csrf
            <input type="hidden" name="id" value="{{ $student->id }}">
            <div class="col-6 input">
                <h5 class="input-text">ชื่อ</h5>
            <input class="input-regis" type="text" placeholder="ชื่อ" name="name" value="{{ $student->first_name }}">
            </div>
            <div class="col-6 input">
                <h5 class="input-text">นามสกุล</h5>
                <input class="input-regis" type="text" placeholder="นามสกุล" name="lastname" value="{{ $student->last_name }}">
            </div>
            
            <div class="col-6 input">
                <h5 class="input-text">ชื่อเล่น</h5>
                <input class="input-regis" type="text" placeholder="ชื่อเล่น" name="nickname" value="{{ $student->nickname }}">
            </div>
            <div class="col-6 input">
                <h5 class="input-text">เลขบัตรประชาชน</h5>
                <input class="input-regis" type="text" placeholder="เลขบัตรประชาชน" name="nationalId" value={{ $student->national_id }}>
            </div>
            <div class="col-6 input">
                <h5 class="input-text">เบอร์โทร</h5>
                <input class="input-regis" type="text" placeholder="เบอร์โทร" name="phoneNumber" value="{{ $student->phone_number }}">
            </div>
            <div class="col-6 input">
                <h5 class="input-text">เพศ</h5>
                <select name="sex" value={{ old('sex') }}>
                    <option value="1" @if ($student->sex == 1) selected="selected" @endif>ชาย</option>
                    <option value="2" @if ($student->sex == 2) selected="selected" @endif>หญิง</option>
                </select>
            </div>
            <div class="col-6 input">
                <h5 class="input-text">โรงเรียน</h5>
                <select name="school" value={{ old('school')}}>
                    @foreach ($schools as $school)
                        <option value="{{ $school->id }}" @if ($student->school_id == $school->id) selected="selected" @endif>{{ $school->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6 input">
                <h5 class="input-text">ระดับชั้น</h5>
                <select name="educationLevel">
                    @foreach ($levels as $level)
                        <option value="{{ $level->id }}" @if($student->education_level_id == $level->id) selected="selected"@endif>{{ $level->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-11">
                <button type="submit" class="submitRegis">บันทึก</button>
            </div>
        </form>
    </div>


@endsection