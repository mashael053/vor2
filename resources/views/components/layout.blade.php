<!doctype html>
<html>
<head>
    <meta dir="rtl">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>html{visibility: hidden;opacity:0;}</style>
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <title>VOR</title>
</head>
<body class="">
    {{ $slot }}    
    {{-- <footer class="pt-5">
        <div class="flex justify-center items-center  flex-col bg-slate-200 text-gray-500">
            <p>هذا الموقع صُنع لأعادة مشروع قديم لأختبار مهاراتي</p>
            <p> بواسطة 
                <a href="https://mofayedh.com" class=" hover:underline">محمد الفايض</a>
            </p>
        </div>
        </footer> --}}


{{-- <!-- Footer -->
<footer class="bg-gray-900 text-white py-8">
    <!-- Container -->
    <div class="container mx-auto flex justify-between items-center">
      <!-- Copyright -->
      <div class="text-center">
        <!-- Copyright Text -->
        <p>حقوق الملكية © 2023 موقع مشروع اختبار المهارات</p>
      </div>
      <!-- Social Links -->
      <div class="flex space-x-4">
        <!-- GitHub Link -->
        <a href="https://github.com/mofayedh" class="text-gray-400 hover:text-white">
          <!-- GitHub Icon -->
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
            <!-- Icon Path -->
          </svg>
        </a>
        <!-- LinkedIn Link -->
        <a href="https://www.linkedin.com/in/mofayedh/" class="text-gray-400 hover:text-white">
          <!-- LinkedIn Icon -->
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
            <!-- Icon Path -->
          </svg>
        </a>
        <!-- YouTube Link -->
        <a href="https://www.youtube.com/channel/UCcfZY2nY4DhI7vqLfsOZzVg" class="text-gray-400 hover:text-white">
          <!-- YouTube Icon -->
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
            <!-- Icon Path -->
          </svg>
        </a>
      </div>
    </div>
  </footer> --}}




  <!-- Footer -->
<footer class="bg-[#187873] text-white py-8">
    <div class="container mx-auto flex justify-between items-center ">
      <div class="mr-6">
        <!-- Logo -->
        <img src="{{ asset('images/hhc_logo.png') }}" alt="" class="w-14 ab m-3">

        {{-- <img src="logo.png" alt="Logo" class="h-8"> --}}
        <h4 class="text-lg">Mohammed@gmail.com</h4>
      </div>
      <div >
        
        <p>تابعنا عبر قنواتنا:</p>
        <div class="flex space-x-4 gap-1 mt-4">
          <!-- Twitter -->
          <a href="" class="text-white hover:text-gray-300">
            <a href="#"><i class='bx bxl-twitter'></i></a>
          </a>
          <!-- Instagram -->
            <i class='bx bxl-instagram'></i>
         
          <a href="" class="text-white hover:text-gray-300">
            <i class='bx bxl-youtube' ></i>
          </a>
        </div>
 
        <p>نسعد بتقديم اقتراحاتك لتطوير منصتنا</p>
      </div>
      
      <div>
        <!-- Subscribe Heading -->
        <h3 class="text-lg font-bold m-1">اشترك معنا</h3>
        <!-- Subscribe Input -->
        <div class="flex items-center gap-4">
          <input type="email" placeholder="البريد الإلكتروني" class="bg-gray-50 border-2 border-white rounded-md px-4 py-2 text-white focus:outline-none">
          <button class=" rounded-md px-4 py-2 ml-2 text-white border-2 border-white bg-gradient-to-r from-[#453a77] to-[#009b72] hover:bg-white">اشترك</button>
        </div>
        <!-- Responsive Design -->
        <p class="mt-2 ml-3">يدعم هذا الموقع جميع أنماط دقة الشاشة وكافة الأجهزة الذكية</p>
      </div>
    </div>
  </footer>


  {{-- End Footer --}}

<div id="loader" class="loader">
    <img src="{{ asset('images/hhc_logo.png') }}" alt="">
</div>
</body>
@if (session('success'))
    <div class="fixed bottom-6 right-6 bg-[#009b72] py-3 px-3 rounded-xl select-none ">
        <p class="text-white">{{ session('success') }}</p>
    </div>
@endif
</html>

