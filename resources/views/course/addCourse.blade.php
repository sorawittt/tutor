@extends('layouts.master')
@section('content')

    <div class="container">
        <h2 class='regisHead'>เพิ่มคอร์สใหม่</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
             <ul>
                @foreach ($errors->all() as $errors)
                    <li>{{ $errors }}</li>   
                @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ action('CoursesController@submitAddCourse') }}" method="POST">
            @csrf
            <div class="col-6 input">
                <h5 class="input-text">ชื่อคอร์ส</h5>
            <input class="input-regis" type="text" placeholder="ชื่อคอร์ส" name="name" value="{{ old('name') }}">
            </div>
            <div class="col-6 input">
                <h5 class="input-text">วัน/เวลาที่เรียน</h5>
                <input class="input-regis" type="text" placeholder="วัน/เวลาที่เรียน" name="description" value="{{ old('description') }}">
            </div>
            <div class="col-6 input">
                <h5 class="input-text">ราคา</h5>
                <input class="input-regis" type="text" placeholder="ราคา" name="price" value="{{ old('price') }}">
            </div>
            <div class="col-11">
                <button type="submit" class="submitRegis">บันทึก</button>
            </div>
        </form>
    </div>


@endsection