@extends('layouts.app')

@section('title', 'Edit Course')

@section('sidebar')
@parent

<!-- <p>This is appended to the master sidebar.</p> -->
@endsection

@section('content')
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<div class="container">
   <form action="/updateCourse/{{$lists->id}}" method="POST">
      @csrf
      <input type="hidden" name="id" value="{{$lists->id}}">

      <h2>บันทึกข้อมูลการจัดอบรม</h2>
      <div class="mb-3">
         <div class="row">
            <div class="col-4">
               <label for="name_course" class="form-label">หัวข้อการอบรม</label>
               <input type="text" class="form-control" id="name_course" name="name_course" value="{{$lists->name_course}}">
            </div>
            <div class="col-8">
               <label for="name_place" class="form-label">สถานที่การจัดอบรม</label>
               <input type="text" class="form-control" id="name_place" name="name_place" value="{{$lists->name_place}}">
            </div>
         </div>
      </div>
      <div class="mb-3">
         <div class="row">
            <div class="col-4">
               <label for="name_lecturer" class="form-label">ชื่อวิทยากร</label>
               <input type="text" class="form-control" id="name_lecturer" name="name_lecturer" value="{{$lists->name_lecturer}}">
            </div>
            <div class="col-4">
               <label for="name_responsible" class="form-label">ผู้รับผิดชอบ</label>
               <input type="text" class="form-control" id="name_responsible" name="name_responsible" value="{{$lists->name_responsible}}">
            </div>
         </div>
      </div>
      <div class="mb-3">
         <div class="row">
            <div class="col-4">
               <label for="date" class="form-label">วันที่จัดการอบรม</label>
               <!-- แสดงตามวันที่ในเครื่องคอมพิวเตอร์ของผู้ใช้งาน -->
               <input type="date" class="form-control" id="date" name="date" min="1997-01-01" value="{{$lists->date}}">
            </div>
            <div class="col-4">
               <label for="start_time" class="form-label">เวลาเริ่มอบรม</label>
               <input type="time" class="form-control" id="start_time" name="start_time" value="{{$lists->start_time}}">
            </div>
            <div class="col-4">
               <label for="end_time" class="form-label">เวลาสิ้นสุดอบรม</label>
               <input type="time" class="form-control" id="end_time" name="end_time" value="{{$lists->end_time}}">
            </div>
         </div>
      </div>
      <div class="mb-3">
         <div class="row">
            <div class="col-4">
               <label for="expenses" class="form-label">ค่าใช้จ่าย</label>
               <input type="text" class="form-control" id="expenses" name="expenses" value="{{$lists->expenses}}">
            </div>
            <div class="col-4">
               <label for="payment" class="form-label">วิธีการชำระเงิน</label>
               <input type="text" class="form-control" id="payment" name="payment" value="{{$lists->payment}}">
            </div>
            <div class="col-4">
               <label for="number" class="form-label">จำนวนคนที่รับ</label>
               <input type="text" class="form-control" id="number" name="number" value="{{$lists->number}}">
               <p class="note">หากรับไม่จำกัดกรุณาเว้นว่างช่องนี้</p>
            </div>
         </div>
      </div>
      <div class="mb-3">
         <label for="details" class="form-label">รายละเอียดคอร์ส</label>
         <textarea class="form-control" id="details" name="details" rows="3" value="{{$lists->details}}"></textarea>
      </div>
      <div class="mb-3">
         <label for="note" class="form-label">หมายเหตุ (ถ้ามี)</label>
         <input type="text" class="form-control" id="note" name="note" value="{{$lists->note}}">
      </div>

      <button type="submit" name="submit" class="btn btn-success">Submit</button>
   </form>
</div>
=======
=======
>>>>>>> 4ecf4829a981ba54ce38c32bae6aa3b03e7e2353
=======
>>>>>>> 4ecf4829a981ba54ce38c32bae6aa3b03e7e2353
>>>>>>> Stashed changes
   <div class="container">
      <form action="/updateCourse" method="POST">
         @csrf
         <input type="hidden" name="id" value="{{$lists->id}}">

         <h2>บันทึกข้อมูลการจัดอบรม</h2>
         <div class="mb-3">
            <div class="row">
               <div class="col-4">
                  <label for="name_course" class="form-label">หัวข้อการอบรม</label>
                  <input type="text" class="form-control" id="name_course" name="name_course" value="{{$lists->name_course}}">
               </div>
               <div class="col-8">
                  <label for="name_place" class="form-label">สถานที่การจัดอบรม</label>
                  <input type="text" class="form-control" id="name_place" name="name_place" value="{{$lists->name_place}}">
               </div>
            </div>
         </div>
         <div class="mb-3">
            <div class="row">
               <div class="col-4">
                  <label for="name_lecturer" class="form-label">ชื่อวิทยากร</label>
                  <input type="text" class="form-control" id="name_lecturer" name="name_lecturer" value="{{$lists->name_lecturer}}">
               </div>
               <div class="col-4">
                  <label for="name_responsible" class="form-label">ผู้รับผิดชอบ</label>
                  <input type="text" class="form-control" id="name_responsible" name="name_responsible" value="{{$lists->name_responsible}}">
               </div>
            </div>
         </div>
         <div class="mb-3">
            <div class="row">
               <div class="col-4">
                  <label for="date" class="form-label">วันที่จัดการอบรม</label>
                  <!-- แสดงตามวันที่ในเครื่องคอมพิวเตอร์ของผู้ใช้งาน -->
                  <input type="date" class="form-control" id="date" name="date" min="1997-01-01" value="{{$lists->date}}">
               </div>
               <div class="col-4">
                  <label for="start_time" class="form-label">เวลาเริ่มอบรม</label>
                  <input type="time" class="form-control" id="start_time" name="start_time" value="{{$lists->start_time}}">
               </div>
               <div class="col-4">
                  <label for="end_time" class="form-label">เวลาสิ้นสุดอบรม</label>
                  <input type="time" class="form-control" id="end_time" name="end_time" value="{{$lists->end_time}}">
               </div>
            </div>
         </div>
         <div class="mb-3">
            <div class="row">
               <div class="col-4">
                  <label for="expenses" class="form-label">ค่าใช้จ่าย</label>
                  <input type="text" class="form-control" id="expenses" name="expenses" value="{{$lists->expenses}}">
               </div>
               <div class="col-4">
                  <label for="payment" class="form-label">วิธีการชำระเงิน</label>
                  <input type="text" class="form-control" id="payment" name="payment" value="{{$lists->payment}}">
               </div>
               <div class="col-4">
                  <label for="number" class="form-label">จำนวนคนที่รับ</label>
                  <input type="text" class="form-control" id="number" name="number" value="{{$lists->number}}">
                  <p class="note">หากรับไม่จำกัดกรุณาเว้นว่างช่องนี้</p>
               </div>
            </div>
         </div>
         <div class="mb-3">
            <label for="details" class="form-label">รายละเอียดคอร์ส</label>
            <textarea class="form-control" id="details" name="details" rows="3" value="{{$lists->details}}"></textarea>
         </div>
         <div class="mb-3">
            <label for="note" class="form-label">หมายเหตุ (ถ้ามี)</label>
            <input type="text" class="form-control" id="note" name="note" value="{{$lists->note}}">
         </div>

         <button type="submit" name="submit" class="btn btn-success">Submit</button>
      </form>
   </div>
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4ecf4829a981ba54ce38c32bae6aa3b03e7e2353
=======
>>>>>>> 4ecf4829a981ba54ce38c32bae6aa3b03e7e2353
=======
>>>>>>> 4ecf4829a981ba54ce38c32bae6aa3b03e7e2353
>>>>>>> Stashed changes
@endsection