<!DOCTYPE html>
<html lang="en">

<head>
   <title>Course - @yield('title')</title>

   <link rel="stylesheet" href="{{asset('css/app.css')}}">


   <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
   <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


   <!-- Boxicons -->
   <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
   @section('sidebar')
   <div x-data="{ sidebarOpen: true }" class="flex overflow-x-hidden h-screen ">
      <aside class="flex-shrink-0 w-64 flex flex-col border-r transition-all duration-300" :class="{ '-ml-64': !sidebarOpen }">
         <div class="flex flex-col w-56 bg-white  overflow-hidden">
            <div class="flex items-center justify-center h-20">
               <i class='bx bxs-leaf text-3xl uppercase text-indigo-500'></i>
               <h1 class="text-3xl uppercase text-indigo-500">Course</h1>
            </div>
            @if(Auth::user() != null)
            <ul class="flex flex-col py-4">
               <li>
                  <a href="/" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                     <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-home"></i></span>
                     <span class="text-sm font-medium">Dashboard</span>
                  </a>
               </li>
               <li>
                  <a href="{{ route('profile') }}" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                     <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-user"></i></span>
                     <span class="text-sm font-medium">Profile</span>
                  </a>
               </li>
               <!-- <li>
                  <a href="{{ route('profile') }}" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                     <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class='bx bx-registered'></i></span>
                     <span class="text-sm font-medium">Register Course</span>
                  </a>
               </li> -->
               <!-- <li>
                  <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                     <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-bell"></i></span>
                     <span class="text-sm font-medium">Notifications</span>
                     <span class="ml-auto mr-6 text-sm bg-red-100 rounded-full px-3 py-px text-red-500">5</span>
                  </a>
               </li> -->
               <li>
                  @if(Auth::user() != null)
                  <a href="{{ route('logout')}}" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                     <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-log-out"></i></span>
                     <span class="text-sm font-medium">Logout</span>
                  </a>
                  @endif

               </li>
            </ul>
            @else
            <ul class="flex flex-col py-4">
               <li>
                  <a href="/" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                     <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-home"></i></span>
                     <span class="text-sm font-medium">Dashboard</span>
                  </a>
               </li>


               <li>
                  <a href="{{ route('profile')}}" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                     <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-user"></i></span>
                     <span class="text-sm font-medium">Profile</span>
                  </a>
               </li>

               <li>
                  <a href="{{ route('logout')}}" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                     <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-log-out"></i></span>
                     <span class="text-sm font-medium">Logout</span>
                  </a>
               </li>
            </ul>
            @endif
         </div>
      </aside>
      <div class="flex-1">
         <nav id="nav" class="nav flex justify-between items-center h-20 w-full  ease-in-out  transition duration-500  z-100 pr-5 shadow-sm bg-slate-50" :class="{ 'w-full': !sidebarOpen }">
            <div class="sidebar-button flex items-center text-2xl font-medium">
               <button id="Btn" class="p-1 mr-1 text-2xl" @click="sidebarOpen = !sidebarOpen ">
                  <i class='bx bx-menu sidebarBtn text-4xl mr-2'></i>
               </button>
               <span class="dashboard">Dashboard</span>
            </div>
            <div class=" relative row-auto h-12 max-w-lg w-full mr-5">
               <input class=" h-full w-full outline-none bg-slate-200 border-slate-800 text-lg pr-4 rounded-md pl-3" type="text" placeholder="Search...">
               <div class="absolute h-10 w-10 bg-blue-400 right-1 rounded leading-10 top-1 flex justify-center items-center">
                  <i class='bx bx-search text-white text-lg'></i>

               </div>
            </div>


            <div class="grid grid-cols-1 bg-gray-100 border-slate-500   rounded-md h-12 pt-1  pr-4 pl-4">
               <div x-data=" { dropdownOpen: false }">
                  <button @click="dropdownOpen = !dropdownOpen" class="flex items-center">
                     @if(Auth::user() != null)
                     <img src="images/man.png" alt="" class=" h-10 w-10 rounded-md object-cover">
                     <span class=" text-sm font-medium text-slate-400 whitespace-nowrap">{{Auth::user()->name}}</span>
                     <i class='bx bx-chevron-down text-2xl text-slate-600'></i>
                     @else
                     <img src="images/key.png" alt="" class=" h-10 w-10 mr-2 rounded-md object-cover">
                     <span class=" text-sm font-medium text-slate-400 whitespace-nowrap">Login</span>
                     <i class='bx bx-chevron-down text-2xl text-slate-600'></i>

                     @endif
                  </button>

                  <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

                  <div x-show="dropdownOpen" class="absolute right-0 mt-2 bg-white rounded-md shadow-lg overflow-hidden z-20" style="width:20rem;">


                     <div class="py-2">
                        @if(Auth::user() != null)
                        <a href="#" class="flex items-center px-4 py-3 border-b hover:bg-gray-100 -mx-2">
                           <img class="h-8 w-8 rounded-full object-cover mx-1" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="avatar">
                           <p class="text-gray-600 text-sm mx-2">
                              <span class="font-bold" href="#">Sara Salah</span> replied on the <span class="font-bold text-blue-500" href="#">Upload Image</span> artical . 2m
                           </p>
                        </a>

                        @else
                        <a href="{{route('login')}}" class="flex items-center px-4 py-3 hover:bg-gray-100 -mx-2">
                           <img class="h-8 w-8 rounded-full border-slate-400 object-cover mx-1" src="images/secret.png" alt="avatar">
                           <p class="text-gray-600 text-sm mx-2">
                              <span class="font-bold" href="#">เข้าสู่ระบบ</span>
                           </p>
                        </a>
                        @endif

                     </div>
                     <a href="#" class="block bg-gray-800 text-white text-center font-bold py-2">See all notifications</a>
                  </div>
               </div>
            </div>

         </nav>
         <main class="p-4 mt-3">
            @yield('content')

         </main>
      </div>
   </div>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script type="text/javascript">
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      let nav = document.getElementById("nav");


      $(document).ready(function() {
         $("#Btn").click(function() {
            nav.style.width = "calc(100%-240px)";
         })
      })
   </script>
</body>

</html>