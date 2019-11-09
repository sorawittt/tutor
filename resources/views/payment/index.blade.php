@extends('layouts.master')

@section('content')
  <div class="container">
    <h2 class='regisHead'>บัญชี</h2>


    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ชื่อ</th>
          <th scope="col">นามสกุล</th>
          <th scope="col">เบอร์โทร</th>
          <th scope="col">วิชา</th>
          <th scope="col">ราคา</th>
          <th scope="col">สถานะการชำระเงิน</th>
        </tr>
      </thead>
      @foreach ($enrolls as $enroll)
      <tbody>
        <tr>
          <td>{{ $enroll->first_name }}</td>
          <td>{{ $enroll->last_name}}</td>
          <td>{{ $enroll->phone_number}}</td>
          <td>{{ $enroll->name }}</td>
          <td>{{ $enroll->price }}</td>
          @if ($enroll->status == 0)
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