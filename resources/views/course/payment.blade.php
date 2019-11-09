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
          <th scope="col">ระดับชั้น</th>
          <th scope="col">วิชา</th>
          <th scope="col">ยอดที่ต้องชำระ</th>
          <th scope="col">สถานะการชำระเงิน</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>สรวิชญ์</td>
          <td>เรืองทอง</td>
          <td>0922694267</td>
          <td>มัธยมศึกษาปีที่ 6</td>
          <td>คณิตศาสตร์</td>
          <td>2000</td>
          <td class="not">ยังไม่ครบ</td>
        </tr>
      </tbody>
    </table>
  </div>
   
@endsection