@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
@parent


@endsection

@section('content')

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

         <div class="grid grid-cols-3 gap-4 pt-3">
            <a href="#"><button type="button" class="text-white bg-emerald-500 hover:bg-emerald-600 pt-2 pb-2 pr-3 pl-3 rounded-lg">ลงทะเบียน</button></a>

            <div id="app{{$c_expense->id}}">
               <!-- Modal trigger -->
               <button @click="showModal = !showModal" class="bg-indigo-500 hover:bg-indigo-600 focus:outline-none rounded-md
                 pt-2 pb-2 pr-3 pl-3 text-white transition duration-500 ease-in-out ">Open modal</button>
               <!-- ./Modal trigger -->
               <div class="flex items-center justify-center absolute h-screen top-0 left-0"></div>
               <!-- modal ปิดไว้ก่อน ไม่สามารถแสดงได้ตามมที่ต้องการ แสดงอยู่ใน card ของพื้นหลัง และแสดงอยู่ใน grid ของ button -->
               <!-- <transition name="custom" enter-active-class="animate__animated animate__bounceInDown" leave-active-class="animate__animated animate__bounceOutUp">
                
                  <div v-if="showModal" class="w-11/12 lg:w-full max-w-xl z-20 mx-auto bg-white flex flex-col relative self-center shadow-2xl rounded-md ">
                     
                     <div class="p-6 border-b-4 border-gray-200 text-lg font-bold text-indigo-400">Modal title</div>
                    
                     <div class="p-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident officiis ipsam cupiditate illum laborum atque voluptatibus ut doloremque excepturi quisquam repellendus dolor deserunt totam tempore, laboriosam earum sapiente esse praesentium.
                     </div>
                

                     <div class="border-t-4 border-gray-200 p-6 flex justify-end">
                        <button @click="showModal = false" class="bg-green-400 hover:bg-green-500 focus:outline-none transition px-4 py-2 rounded-md text-white transition duration-500 ease-in-out">Close Modal</button>
                     </div>
               
                  </div>
              
               </transition>

               <transition name="custom" enter-active-class="animate__animated animate__fadeIn" leave-active-class="animate__animated animate__fadeOut">
               
                  <div v-if="showModal" class="bg-gray-700 bg-opacity-50 fixed bottom-0 left-0 w-full h-full transition duration-500 ease-in-out transfom z-10"></div>
              
               </transition> -->
            </div>
            <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
            <script>
               var app = new Vue({
                  el: '#app{{$c_expense->id}}',
                  data() {
                     return {
                        showModal: false,
                     }
                  }
               })
            </script>
         </div>



      </div>



   </div>

   @endforeach
</div>
@endsection