@extends('layouts.app')

@section('title', 'Insert Data')

@section('sidebar')
@parent

<!-- <p>This is appended to the master sidebar.</p> -->
@endsection


@section('content')

<div class="overview-boxes">
   <div class="box">
      <div class="right-side">
         <div class="box-topic">Total User</div>
         <div class="number">{{$users}}</div>
         <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
            <span class="text">Up from yesterday</span>
         </div>
      </div>
      <i class='bx bx-cart-alt cart'></i>
   </div>
   <div class="box">
      <div class="right-side">
         <div class="box-topic">Total Course</div>
         <div class="number">{{$courses}}</div>
         <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
            <span class="text">Up from yesterday</span>
         </div>
      </div>
      <i class='bx bxs-cart-add cart two'></i>
   </div>
   <div class="box">
      <div class="right-side">
         <div class="box-topic">Total Register Course</div>
         <div class="number">{{$regiscourses}}</div>
         <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
            <span class="text">Up from yesterday</span>
         </div>
      </div>
      <i class='bx bx-cart cart three'></i>
   </div>
   <div class="box">
      <div class="right-side">
         <div class="box-topic">Total Return </div>
         <div class="number">11,086</div>
         <div class="indicator">
            <i class='bx bx-down-arrow-alt down'></i>
            <span class="text">Down From Today</span>
         </div>
      </div>
      <i class='bx bxs-cart-download cart four'></i>
   </div>
</div>
<table class="table-fixed">
   <thead>
      <tr>
         <th>#</th>
         <th>รหัส</th>
         <th>ชื่อการอบรม</th>
         <th>ชื่อสถานที่</th>
         <th>ชื่อวิทยากร</th>
         <th>วันเดือนปี</th>
         <th>เวลาเริ่ม</th>
         <th>เวลาสิ้นสุด</th>
         <th>จำนวนผู้เข้าร่วม(คน)</th>
         <th>ข้อมูลเพิ่มเติม</th>
         <th>แก้ไขข้อมูล</th>
         <th>ลบข้อมูล</th>
      </tr>
   </thead>
   <tbody>
      @foreach($lists as $list)

      <tr>
         <td>{{$x++}}</td>
         <td>{{$list->id}}</td>
         <td>{{$list->name_course}}</td>
         <td>{{$list->name_place}}</td>
         <td>{{$list->name_lecturer}}</td>
         <td>{{date('d-m-Y', strtotime($list->date))}}</td>
         <td>{{date('H:i', strtotime($list->start_time))}}</td>
         <td>{{date('H:i', strtotime($list->end_time))}}</td>
         <td>{{$list->number}}</td>
         <td>
            <a href="#">
               <!-- Button trigger modal -->
               <button type="button" class="info" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$list->id}}">
                  เพิ่มเติม
               </button>
            </a>
         </td>

         <!-- Modal -->
         <!-- <div class="modal fade" id="staticBackdrop{{$list->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="staticBackdropLabel">ข้อมูลเพิ่มเติม {{$list->name_course}}</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <div class="modal-body">
                     <label for="name_responsible"> <b>ผู้รับผิดชอบ</b> </label>
                     <p>{{$list->name_responsible}}</p>
                     <label for="name_responsible"> <b>ค่าใช้จ่าย</b> </label>
                     <p>{{$list->expenses}}</p>
                     <label for="name_responsible"> <b>วิธีการชำระเงิน</b> </label>
                     <p>{{$list->payment}}</p>
                  </div>

                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                     <button type="button" class="btn btn-success">แก้ไขข้อมูล</button>
                  </div>
               </div>
            </div>
         </div> -->

         <td><a href="/editCourse/{{$list->id}}"><button class="edit">แก้ไข</button></a></td>
         <td><a href="#"><button class="delete">ลบข้อมูล</button></a></td>

      </tr>

      @endforeach
   </tbody>
</table>
@endsection