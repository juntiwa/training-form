@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
@parent


@endsection

@section('content')

<table class="table">
   <thead>
      <tr>
         <th scope="col">#</th>
         <th scope="col">รหัสผู้ใช้งาน</th>
         <th scope="col">ชื่อ</th>
         <th scope="col">สกุล</th>
         <th scope="col">ชื่องานอบรม</th>
         <th scope="col">วันเดือนปีการจัดอบรม</th>
         <th scope="col">เวลาเริ่ม</th>
         <th scope="col">เวลาสิ้นสุด</th>
         <th scope="col">รายละเอียด</th>
         <th scope="col">ลบข้อมูล</th>
      </tr>
   </thead>
   <tbody>
      @foreach($r_couses as $r_couse)

      <tr>
         <!-- group name 
              number after id user
          -->
         <th scope="row">1</th>
         <td>{{$r_couse->user['id']}} </td>
         <td>{{$r_couse->user['name']}}</td>
         <td>{{$r_couse->user['lname']}}</td>
         <td>{{$r_couse->course['name_course']}}</td>
         <td>{{date('d-m-Y', strtotime($r_couse->course['date']))}}</td>
         <td>{{$r_couse->course['start_time']}}</td>
         <td>{{$r_couse->course['end_time']}}</td>
         <!-- <td>{{$r_couse->course['expenses']}}</td> -->
         <td><button>Here</button></td>
         <!-- Button trigger modal -->


         <td><a href="/deleteHome/{{$r_couse->id}}"><button type="button" class="btn btn-outline-danger">ลบข้อมูล</button></a></td>
      </tr>
      @endforeach
   </tbody>
</table>
@endsection