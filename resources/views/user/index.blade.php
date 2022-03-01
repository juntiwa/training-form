@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
@parent


@endsection

@section('content')



<!-- @foreach ($course as $c_expense)
      <div class="flex justify-between" >
         <div class="flex justify-between">
            <div class="">
               @if ($c_expense->expenses == 'free')
               <img src="images/free.png" class=" h-44" alt="...">
               @else
               <img src="images/pay.png" class="img-fluid rounded-start" alt="...">
               @endif
            </div>

            <div class="">
               <div class="card-body">
                  <h5 class="card-title">รายละเอียดการอบรม</h5>
                  <p class="card-text">{{$c_expense->id}}
                     {{$c_expense->name_course}} <br>
                  <ul>
                     <li>
                        <span>วันที่จัดการอบรม</span>{{date('d-m-Y', strtotime($c_expense->date))}}
                     </li>
                     <li>
                        <span>เวลาเริ่มการอบรม</span>{{$c_expense->start_time}}
                     </li>
                     <li>
                        <span>เวลาสิ้นสุดการอบรม</span>{{$c_expense->end_time}}
                     </li>
                     <li>
                        <span>รับจำนวน</span>
                        @if ($c_expense->number == null)
                        ไม่จำกัด
                        @else
                        {{$c_expense->number}}
                        <span>คน</span>
                        @endif
                     </li>
                  </ul>
                  </p>
                  <br>
                  <p class="card-text"><small class="text-muted">Last updated (...) ago</small></p>
                  <a href="#"><button type="button" class="btn btn-outline-success">ลงทะเบียน</button></a>
                  <a href="#"><button type="button" class="btn btn-outline-primary">อ่านรายละเอียดเพิ่มเติม</button></a>
               </div>
            </div>
         </div>
      </div>
      @endforeach -->
<div class="grid grid-cols-3 gap-4 ">
   @foreach ($course as $c_expense)

   <div class="grid grid-cols-4 gap-4 border-2 border-slate-200 rounded-3xl  shadow-[0_4px_6px_-1px_rgba(0,0,0,0.1)] p-3">
      <div class=" flex items-start justify-center col-span-1">
         @if ($c_expense->expenses == 'free')
         <img src="images/free.png" class=" h-auto w-auto" alt="...">
         @else
         <img src="images/pay.png" class="img-fluid rounded-start" alt="...">
         @endif
      </div>
      <div class="col-span-3">
         <h5 class="card-title">รายละเอียดการอบรม</h5>
         <p class="card-text">{{$c_expense->id}}
            {{$c_expense->name_course}} <br>
         <ul>
            <li>
               <span>วันที่จัดการอบรม</span>{{date('d-m-Y', strtotime($c_expense->date))}}
            </li>
            <li>
               <span>เวลาเริ่มการอบรม</span>{{$c_expense->start_time}}
            </li>
            <li>
               <span>เวลาสิ้นสุดการอบรม</span>{{$c_expense->end_time}}
            </li>
            <li>
               <span>รับจำนวน</span>
               @if ($c_expense->number == null)
               ไม่จำกัด
               @else
               {{$c_expense->number}}
               <span>คน</span>
               @endif
            </li>
         </ul>
         </p>
         <br>
         <p class="card-text"><small class="text-muted">Last updated (...) ago</small></p>
         <a href="#"><button type="button" class="text-white bg-emerald-500 hover:bg-emerald-600 pt-2 pb-2 pr-3 pl-3 rounded-lg">ลงทะเบียน</button></a>
         <a href="#"><button type="button" class="text-white bg-sky-500 hover:bg-sky-600 pt-2 pb-2 pr-3 pl-3 rounded-lg">อ่านรายละเอียดเพิ่มเติม</button></a>
      </div>
   </div>

   @endforeach

</div>

@endsection