@extends('layouts.master')

@section('content')
  <div class="container">
    <h2 class='regisHead'>รายชื่อนักเรียนที่ลงทะเบียนวิชา{{ $courseName }}</h2>


    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ชื่อ</th>
          <th scope="col">นามสกุล</th>
          <th scope="col">เบอร์โทร</th>
          <th scope="col">ราคา</th>
          <th scope="col">สถานะการชำระเงิน</th>
        </tr>
      </thead>
      @foreach ($enrollStudents as $enrollStudent)
      <tbody>
        <tr>
          <td>{{ $enrollStudent->first_name }}</td>
          <td>{{ $enrollStudent->last_name}}</td>
          <td>{{ $enrollStudent->phone_number}}</td>
          <td>{{ $enrollStudent->price }}</td>
          @if ($enrollStudent->status == 0)
            <td class="not">ยังไม่ชำระ</td>
          @else
            <td class="success">ชำระแล้ว</td>
          @endif
        </tr>
      </tbody>
      @endforeach
    </table>
  </div>
   
@endsection