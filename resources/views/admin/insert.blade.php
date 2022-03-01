@extends('layouts.app')

@section('title', 'Insert Data')

@section('navbar')
@parent

<!-- <p>This is appended to the master sidebar.</p> -->
@endsection

@section('content')
<section id="main">
   <div class="container">
      <form action="{{ route('course.custom') }}" method="POST">
         @csrf

         <h2>บันทึกข้อมูลการจัดอบรม</h2>
         <div class="mb-3">
            <div class="row">
               <div class="col-4">
                  <label for="name_course" class="form-label">หัวข้อการอบรม</label>
                  <input type="text" class="form-control" id="name_course" name="name_course" placeholder="การใช้งานเครื่อคอมพิวเตอร์เบื้องต้น">
               </div>
               <div class="col-8">
                  <label for="name_place" class="form-label">สถานที่การจัดอบรม</label>
                  <input type="text" class="form-control" id="name_place" name="name_place" placeholder="การใช้งานเครื่อคอมพิวเตอร์เบื้องต้น">
               </div>
            </div>
         </div>
         <div class="mb-3">
            <div class="row">
               <div class="col-4">
                  <label for="name_lecturer" class="form-label">ชื่อวิทยากร</label>
                  <input type="text" class="form-control" id="name_lecturer" name="name_lecturer" placeholder="นางสาวแจ่มใส สดชื่น">
               </div>
               <div class="col-4">
                  <label for="name_responsible" class="form-label">ผู้รับผิดชอบ</label>
                  <input type="text" class="form-control" id="name_responsible" name="name_responsible" placeholder="นายสดชื่น แจ่มใส">
               </div>
            </div>
         </div>
         <div class="mb-3">
            <div class="row">
               <div class="col-4">
                  <label for="date" class="form-label">วันที่จัดการอบรม</label>
                  <!-- แสดงตามวันที่ในเครื่องคอมพิวเตอร์ของผู้ใช้งาน -->
                  <input type="date" class="form-control" id="date" name="date" value="" min="1997-01-01" max="2030-12-31">
               </div>
               <div class="col-4">
                  <label for="start_time" class="form-label">เวลาเริ่มอบรม</label>
                  <input type="time" class="form-control" id="start_time" name="start_time" placeholder="13:00">
               </div>
               <div class="col-4">
                  <label for="end_time" class="form-label">เวลาสิ้นสุดอบรม</label>
                  <input type="time" class="form-control" id="end_time" name="end_time" placeholder="15:00">
               </div>
            </div>
         </div>
         <div class="mb-3">
            <div class="row">
               <div class="col-4">
                  <label for="expenses" class="form-label">ค่าใช้จ่าย</label>
                  <input type="text" class="form-control" id="expenses" name="expenses" placeholder="ฟรี, 250 บาท">
               </div>
               <div class="col-4">
                  <label for="payment" class="form-label">วิธีการชำระเงิน</label>
                  <input type="text" class="form-control" id="payment" name="payment" placeholder="จ่ายหน้างาน,จ่ายผ่านบัญชีธนาคาร">
               </div>
               <div class="col-4">
                  <label for="number" class="form-label">จำนวนคนที่รับ</label>
                  <input type="text" class="form-control" id="number" name="number" placeholder="20">
                  <p class="note">หากรับไม่จำกัดกรุณาเว้นว่างช่องนี้</p>
               </div>
            </div>
         </div>
         <div class="mb-3">
            <label for="details" class="form-label">รายละเอียดคอร์ส</label>
            <textarea class="form-control" id="details" name="details" rows="3"></textarea>
         </div>
         <div class="mb-3">
            <label for="note" class="form-label">หมายเหตุ (ถ้ามี)</label>
            <input type="text" class="form-control" id="note" name="note" placeholder="name@example.com">
         </div>

         <input type="submit" value="บันทึก">
      </form>
   </div>
</section>
@endsection