<!DOCTYPE html>
<html lang="en">

<head>
   <title>Course - @yield('title')</title>

   <link rel="stylesheet" href="{{asset('css/app.css')}}">
   <link rel="stylesheet" href="{{asset('css/modal.css')}}">


   <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
   <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

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
            <ul class="flex flex-col py-4">
               <li>
                  <a href="/" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                     <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-home"></i></span>
                     <span class="text-sm font-medium">Dashboard</span>
                  </a>
               </li>
               <li>
                  <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                     <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-music"></i></span>
                     <span class="text-sm font-medium">Music</span>
                  </a>
               </li>
               <li>
                  <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                     <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-drink"></i></span>
                     <span class="text-sm font-medium">Drink</span>
                  </a>
               </li>
               <li>
                  <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                     <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-shopping-bag"></i></span>
                     <span class="text-sm font-medium">Shopping</span>
                  </a>
               </li>
               <li>
                  <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                     <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-chat"></i></span>
                     <span class="text-sm font-medium">Chat</span>
                  </a>
               </li>
               <li>
                  <a href="{{ route('profile')}}" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                     <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-user"></i></span>
                     <span class="text-sm font-medium">Profile</span>
                  </a>
               </li>
               <li>
                  <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                     <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-bell"></i></span>
                     <span class="text-sm font-medium">Notifications</span>
                     <span class="ml-auto mr-6 text-sm bg-red-100 rounded-full px-3 py-px text-red-500">5</span>
                  </a>
               </li>
               <li>
                  <a href="{{ route('logout')}}" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                     <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-log-out"></i></span>
                     <span class="text-sm font-medium">Logout</span>
                  </a>
               </li>
            </ul>
         </div>
      </aside>
      <div class="flex-1">
         <nav id="nav" class="nav flex justify-between items-center h-20  w-[calc(100%-240px)]  transition-all duration-300 fixed z-100 pr-5 shadow-sm bg-slate-50">
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
            <div class=" flex items-center bg-slate-300 border-slate-500  rounded-md h-12  pr-4 pl-1">
               <img src="images/man.png" alt="" class=" h-10 w-10 rounded-md object-cover">
               <span class=" text-sm font-medium text-slate-400 whitespace-nowrap">Prem Shahi</span>
               <i class='bx bx-chevron-down text-2xl text-slate-600'></i>
            </div>
         </nav>
         <main class="p-4 mt-20">
            @yield('content')

         </main>
      </div>
   </div>
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</body>

</html>