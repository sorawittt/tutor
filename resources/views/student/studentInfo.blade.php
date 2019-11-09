@extends('layouts.master')


@section('content')
  <div class="container">

    <div class="info">
     <h5>ชื่อ: {{ $student->first_name }} {{ $student->last_name }} ({{ $student->nickname }})</h5>
     <h5>เลขบัตรประชาชน: {{ $student->national_id }}</h5>
     <h5>ระดับชั้น: {{ $education }} โรงเรียน: {{ $school->name }}</h5>
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

    <div class="courseFlex">
        <h5 style="color:#261667; margin-right:20%;">วิชาที่ลงทะเบียน</h5>
        <form class="courseFlex" action="{{ action('CoursesController@registerCourse') }}">
          <input type="hidden" name="studentId" value="{{ $student->id }}">
          <select class="selectpicker" data-selected-text-format="count" data-live-search="true" name="selectCourse" title="เลือกวิชาที่ต้องการลงทะเบียน">
            @foreach ($courses as $course)
                <option value="{{ $course->id }}">{{ $course->name }}</option>
            @endforeach
          </select>
              <button type="submit" class="submitCourse">ลงทะเบียน</button>
        </form>
    </div>


    <table class="table table-striped tableInfo" >
      <thead>
        <tr>
          <th scope="col">ชื่อคอร์ส</th>
          <th scope="col">วัน / เวลาที่เรียน</th>
          <th scope="col">ราคา</th>
          <th scope="col">สถานะการชำระเงิน</th>
          <th scope="col">จัดการ</th>
        </tr>
      </thead>
      @foreach ($enrolls as $enroll)
      <tbody>
        <tr>
          <td>{{ $enroll->course_name }}</td>
          <td>{{ $enroll->time }}</td>
          <td>{{ $enroll->price }}</td>
          @if ($enroll->status == 0)
            <td class="not">ยังไม่ชำระ</td>
          @else
            <td class="success">ชำระแล้ว</td>
          @endif
          <td><a href="/editPayment/?enroll_id={{ $enroll->id }}">เปลี่ยนสถานะการชำระเงิน</a> / <a href="/deleteEnroll/?enroll_id={{ $enroll->id }}">ยกเลิกการลงทะเบียน</a></td>
        </tr>
      </tbody>
      @endforeach
    </table>
  </div>
   

@endsection