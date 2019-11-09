@extends('layouts.master')

@section('content')
    <div class="indexText">
        <h2>ตรวจสอบข้อมูลนักเรียนจากเลขบัตรประชาชน</h2>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $errors)
                <li>{{ $errors }}</li>   
            @endforeach
        </ul>
    </div>
    @endif

    <div class="center">
    <form action="{{ action('StudentsController@studentInfo')}}" class="idForm" method="POST">
        @csrf
            <div>
                <span class="textIdForm">เลขบัตรประชาชน</span>
                <input type="text" placeholder="กรุณาป้อนเลขบัตรประชาชน" class="inputId" name="id" value="{{ old('id') }}">
                <button type="submit" class="formIdButton">ตรวจสอบข้อมูล</button>
            </div>
        </form>
    </div>

    <hr>

    <div class="center">
        <form action="/registerStudent">
            <button type="submit" class="regisButton">ลงทะเบียนนักเรียนใหม่</button>
        </form>
    </div>
   
@endsection