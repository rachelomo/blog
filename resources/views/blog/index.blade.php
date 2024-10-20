
@extends('layouts.header')

@section('content')
<div>
    <div>
        <div class="pt-10 border-b border-gray-300 h-10 mx-20"></div>
    </div>

    <div class="text-center mt-7 mx-20">
        <h2 class="font-extrabold text-[2rem] w-full">The Blog</h2>
    </div>

    <div>
        <div class="pt-10 border-b border-gray-300 h-10 mx-20"></div>
    </div>
{{-- 
    blog post --}}

    <div class="flex flex-col justify-between px-20 py-5 pt-[9vh]">
        <h2 class="text-2xl">Recent blog posts</h2>
        <div class="flex py-5 pt-7 gap-5">
      <div>
    <img src="/Image (27).png" alt="">
    <div>
       <div>
        <p class="py-4 text-[#6941C6]">Monday, 9 Sept 2024</p>
      <div class="flex items-center justify-between pb-4">
       <div class="">
        
        <h2 class="text-2xl font-bold ">Building a Career Tech Website</h2>
       </div>
        <div>
            <img src="/icon.png" alt="icon">
           </div>
      </div>
        <span class="text-[#C0C5D0] text-sm">In the dynamic world of web development, creating robust and efficient platforms 
            requires leveraging the right tools and frameworks. Recently, I undertook the exciting<br>  
             challenge of developing a career tech website from scratch, focusing on seamless 
              integration between backend functionalities and a responsive frontend. Here’s 
               a detailed account of how I approached and executed this project using Laravel,  React, and Vite. </span>
                </div>
      
        </div>
  <div class="flex gap-4 py-2">
    <button class="bg-white text-[#6941C6] border rounded text-sm p-1">
        <a href="/">Technology</a>
    </button>
    <button class="bg-white text-[#3538CD] border rounded text-sm p-1">
       <a href="/"> Research</a>
    </button>
    <button class="bg-white text-[#C11574] border rounded text-sm p-1">
       <a href="/">Presentation</a>
    </button>
  </div>

      </div>
      {{-- second --}}
        <div class="flex flex-col gap-6 px-3">
        <div class="sm:grid grid-cols-2 ">
            <img src="/Image (28).png" alt="">
            <div>
                <p class="text-[#6941C6]">Monday, 9 Sept 2024</p>
                 <h2 class="text-1.5xl font-bold ">Building RachFolio</h2>
                <span class="text-[#C0C5D0] text-sm">A developer’s portfolio is key to showcasing skills and projects. I built RachFolio using React, with Formspree for form handling and Google Login for authentication.</span>
                <div class="flex gap-4 py-2">
                    <button class="bg-white text-[#6941C6] border rounded text-sm p-1">
                        <a href="/">Technology</a>
                    </button>
                    <button class="bg-white text-[#3538CD] border rounded text-sm p-1">
                       <a href="/"> Research</a>
                    </button></div>
            </div>
           
        </div>
        <div class="sm:grid grid-cols-2">
            <img src="/Image (29).png" alt="">
            <div>
                <p class="text-[#6941C6]">Monday, 9 Sept 2024</p>
                <h2 class="text-1.5xl font-bold ">Building My First Portfolio</h2>
                <span class="text-[#C0C5D0] text-sm">Creating a portfolio is like a digital resume for developers. I just completed my first one, a big step in my journey. In this post, I’ll share my process, challenges, and solutions to inspire others starting or building their own portfolios!</span>
                <div class="flex gap-4 py-2">
                    <button class="bg-white text-[#6941C6] border rounded text-sm p-1">
                        <a href="/">Technology</a>
                    </button>
                    <button class="bg-white text-[#3538CD] border rounded text-sm p-1">
                       <a href="/"> Research</a>
                    </button></div>
            </div>
          
        </div>
      </div>
    </div>
    {{-- last resent --}}
    <div class="sm:grid grid-cols-2 py-15 smpr-9">
         <div class="pr-14">
             <img src="/Image (30).png" alt="/">
         </div>
       <div class="">
            <p class="text-[#6941C6]">Monday, 9 Sept 2024</p>
            <div class="flex items-center justify-between pb-4">
                 <h2 class="text-2xl font-bold ">Building a Career Tech Website</h2>
                 <img src="/icon.png" alt="icon">
               </div>
                 <span class="text-[#C0C5D0] text-sm loading-8 font-light">In the dynamic world of web development, creating robust and efficient platforms 
                     requires leveraging the right tools and frameworks. Recently, I undertook the exciting<br>  
                      challenge of developing a career tech website from scratch, focusing on seamless 
                       integration between backend functionalities and a responsive frontend. Here’s 
                        a detailed account of how I approached and executed this project using Laravel,  React, and Vite. </span>
                         </div>
    </div>
</div>
</div>


<div class="flex flex-col px-20 py-5 pt-[9vh]">
     <h2 class="text-2xl">All Blog Post</h2>
     <!-- Container for grid layout -->
     <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 py-5">
         <!-- Blog post 1 -->
         <div class="flex flex-col">
             <img src="/Image (31).png" alt="" class="w-full">
             <div>
                 <p class="py-4 text-[#6941C6]">Monday, 9 Sept 2024</p>
                 <div class="flex items-center justify-between pb-4">
                     <h2 class="text-2xl font-bold">Building a Career Tech Website</h2>
                     <img src="/icon.png" alt="icon">
                 </div>
                 <span class="text-[#C0C5D0] text-sm">
                     In the dynamic world of web development, creating robust and efficient platforms requires leveraging the right tools and frameworks. Recently, I undertook the exciting...
                 </span>
             </div>
             <div class="flex gap-4 py-2">
                 <button class="bg-white text-[#6941C6] border rounded text-sm p-1">
                     <a href="/">Technology</a>
                 </button>
                 <button class="bg-white text-[#3538CD] border rounded text-sm p-1">
                     <a href="/">Research</a>
                 </button>
                 <button class="bg-white text-[#C11574] border rounded text-sm p-1">
                     <a href="/">Presentation</a>
                 </button>
             </div>
         </div>
 
         <!-- Blog post 2 -->
         <div class="flex flex-col">
             <img src="/Image (32).png" alt="" class="w-full">
             <div>
                 <p class="py-4 text-[#6941C6]">Monday, 9 Sept 2024</p>
                 <div class="flex items-center justify-between pb-4">
                     <h2 class="text-2xl font-bold">Building a Career Tech Website</h2>
                     <img src="/icon.png" alt="icon">
                 </div>
                 <span class="text-[#C0C5D0] text-sm">
                     In the dynamic world of web development, creating robust and efficient platforms requires leveraging the right tools and frameworks. Recently, I undertook the exciting...
                 </span>
             </div>
             <div class="flex gap-4 py-2">
                 <button class="bg-white text-[#6941C6] border rounded text-sm p-1">
                     <a href="/">Technology</a>
                 </button>
                 <button class="bg-white text-[#3538CD] border rounded text-sm p-1">
                     <a href="/">Research</a>
                 </button>
                 <button class="bg-white text-[#C11574] border rounded text-sm p-1">
                     <a href="/">Presentation</a>
                 </button>
             </div>
         </div>
 
         <!-- Blog post 3 -->
         <div class="flex flex-col">
             <img src="/Image (33).png" alt="" class="w-full">
             <div>
                 <p class="py-4 text-[#6941C6]">Monday, 9 Sept 2024</p>
                 <div class="flex items-center justify-between pb-4">
                     <h2 class="text-2xl font-bold">Building a Career Tech Website</h2>
                     <img src="/icon.png" alt="icon">
                 </div>
                 <span class="text-[#C0C5D0] text-sm">
                     In the dynamic world of web development, creating robust and efficient platforms requires leveraging the right tools and frameworks. Recently, I undertook the exciting...
                 </span>
             </div>
             <div class="flex gap-4 py-2">
                 <button class="bg-white text-[#6941C6] border rounded text-sm p-1">
                     <a href="/">Technology</a>
                 </button>
                 <button class="bg-white text-[#3538CD] border rounded text-sm p-1">
                     <a href="/">Research</a>
                 </button>
                 <button class="bg-white text-[#C11574] border rounded text-sm p-1">
                     <a href="/">Presentation</a>
                 </button>
             </div>
         </div>
 
          <!-- Blog post 4 -->
          <div class="flex flex-col">
             <img src="/Image (34).png" alt="" class="w-full">
             <div>
                 <p class="py-4 text-[#6941C6]">Monday, 9 Sept 2024</p>
                 <div class="flex items-center justify-between pb-4">
                     <h2 class="text-2xl font-bold">Building a Career Tech Website</h2>
                     <img src="/icon.png" alt="icon">
                 </div>
                 <span class="text-[#C0C5D0] text-sm">
                     In the dynamic world of web development, creating robust and efficient platforms requires leveraging the right tools and frameworks. Recently, I undertook the exciting...
                 </span>
             </div>
             <div class="flex gap-4 py-2">
                 <button class="bg-white text-[#6941C6] border rounded text-sm p-1">
                     <a href="/">Technology</a>
                 </button>
                 <button class="bg-white text-[#3538CD] border rounded text-sm p-1">
                     <a href="/">Research</a>
                 </button>
                 <button class="bg-white text-[#C11574] border rounded text-sm p-1">
                     <a href="/">Presentation</a>
                 </button>
             </div>
         </div>
           <!-- Blog post 5 -->
           <div class="flex flex-col">
             <img src="/Image (35).png" alt="" class="w-full">
             <div>
                 <p class="py-4 text-[#6941C6]">Monday, 9 Sept 2024</p>
                 <div class="flex items-center justify-between pb-4">
                     <h2 class="text-2xl font-bold">Building a Career Tech Website</h2>
                     <img src="/icon.png" alt="icon">
                 </div>
                 <span class="text-[#C0C5D0] text-sm">
                     In the dynamic world of web development, creating robust and efficient platforms requires leveraging the right tools and frameworks. Recently, I undertook the exciting...
                 </span>
             </div>
             <div class="flex gap-4 py-2">
                 <button class="bg-white text-[#6941C6] border rounded text-sm p-1">
                     <a href="/">Technology</a>
                 </button>
                 <button class="bg-white text-[#3538CD] border rounded text-sm p-1">
                     <a href="/">Research</a>
                 </button>
                 <button class="bg-white text-[#C11574] border rounded text-sm p-1">
                     <a href="/">Presentation</a>
                 </button>
             </div>
         </div>
           <!-- Blog post 6 -->
           <div class="flex flex-col">
             <img src="/Image (36).png" alt="" class="w-full">
             <div>
                 <p class="py-4 text-[#6941C6]">Monday, 9 Sept 2024</p>
                 <div class="flex items-center justify-between pb-4">
                     <h2 class="text-2xl font-bold">Building a Career Tech Website</h2>
                     <img src="/icon.png" alt="icon">
                 </div>
                 <span class="text-[#C0C5D0] text-sm">
                     In the dynamic world of web development, creating robust and efficient platforms requires leveraging the right tools and frameworks. Recently, I undertook the exciting...
                 </span>
             </div>
             <div class="flex gap-4 py-2">
                 <button class="bg-white text-[#6941C6] border rounded text-sm p-1">
                     <a href="/">Technology</a>
                 </button>
                 <button class="bg-white text-[#3538CD] border rounded text-sm p-1">
                     <a href="/">Research</a>
                 </button>
                 <button class="bg-white text-[#C11574] border rounded text-sm p-1">
                     <a href="/">Presentation</a>
                 </button>
             </div>
         </div>
     </div>
@include('layouts.nestpage')
</div>


@endsection