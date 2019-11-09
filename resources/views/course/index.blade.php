@extends('layouts.master')

@section('content')
  <div class="container">

    <div class="courseFlex">
        <h2 class='regisHead'>รายชื่อคอร์สทั้งหมด</h2>
        <button onclick="window.location.href='/addCourse'" class="addCourseButton">+ เพิ่มคอร์ส</button>
    </div>


    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ชื่อคอร์ส</th>
          <th scope="col">วัน / เวลาที่เรียน</th>
          <th scope="col">ราคา</th>
          <th scope="col">จัดการ</th>
        </tr>
      </thead>
      @foreach ($courses as $course)
      <tbody>
        <tr>
          <td>{{ $course->name }}</td>
          <td>{{ $course->description}}</td>
          <td>{{ $course->price}}</td>
          <td><a href="/enrollsCourse/?course_id={{ $course->id }}">รายชื่อนักเรียนที่ลงทะเบียน</a> / <a href="/editCourse/?course_id={{ $course->id }}">แก้ไข</a> / <a href="/deleteCourse/?course_id={{ $course->id }}">ลบ</a></td>
        </tr>
      </tbody>
      @endforeach
    </table>
  </div>
   
@endsection