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

        <form action="{{ action('StudentsController@addStudent') }}" method="POST">
        @csrf

            <div class="col-6 input">
                <h5 class="input-text">ชื่อ</h5>
            <input class="input-regis" type="text" placeholder="ชื่อ" name="name" value="{{ old('name') }}">
            </div>
            <div class="col-6 input">
                <h5 class="input-text">นามสกุล</h5>
                <input class="input-regis" type="text" placeholder="นามสกุล" name="lastname" value="{{ old('lastname') }}">
            </div>
            
            <div class="col-6 input">
                <h5 class="input-text">ชื่อเล่น</h5>
                <input class="input-regis" type="text" placeholder="ชื่อเล่น" name="nickname" value="{{ old('nickname') }}">
            </div>
            <div class="col-6 input">
                <h5 class="input-text">เลขบัตรประชาชน</h5>
                <input class="input-regis" type="text" placeholder="เลขบัตรประชาชน" name="nationalId" value={{ old('nationalId') }}>
            </div>
            <div class="col-6 input">
                <h5 class="input-text">เบอร์โทร</h5>
                <input class="input-regis" type="text" placeholder="เบอร์โทร" name="phoneNumber" value="{{ old('phoneNumber') }}">
            </div>
            <div class="col-6 input">
                <h5 class="input-text">เพศ</h5>
                <select name="sex" value={{ old('sex') }}>
                    <option value="1">ชาย</option>
                    <option value="2">หญิง</option>
                </select>
            </div>
            <div class="col-6 input">
                <h5 class="input-text">โรงเรียน</h5>
                <select name="school" value={{ old('school')}}>
                    @foreach ($schools as $school)
                        <option value="{{ $school->id }}">{{ $school->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6 input">
                <h5 class="input-text">ระดับชั้น</h5>
                <select name="educationLevel" value={{ old('educationLevel') }}>
                    @foreach ($levels as $level)
                        <option value="{{ $level->id }}">{{ $level->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-11">
                <button type="submit" class="submitRegis">บันทึก</button>
            </div>
        </form>
    </div>


@endsection