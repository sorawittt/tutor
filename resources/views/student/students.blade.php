@extends('layouts.master')

@section('content')
  <div class="container">
    <h2 class='regisHead'>รายชื่อนักเรียน</h2>


    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ชื่อ</th>
          <th scope="col">นามสกุล</th>
          <th scope="col">เบอร์โทร</th>
          <th scope="col">โรงเรียน</th>
          <th scope="col">จัดการ</th>
        </tr>
      </thead>
      @foreach ($students as $student)
      <tbody>
        <tr>
          <td>{{ $student->first_name }}</td>
          <td>{{ $student->last_name }}</td>
          <td>{{ $student->phone_number }}</td>
          <td>{{ $student->school_name }}</td>
          <td><a href="/student/?student_id={{ $student->id }}">รายละเอียด</a> / <a href="/editStudent/?student_id={{ $student->id }}">แก้ไข</a></td>
        </tr>
      </tbody>
      @endforeach
    </table>
  </div>
   
@endsection