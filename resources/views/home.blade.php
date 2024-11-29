<x-layout>
    <x-slot:title>{{ $title }} </x-slot:title> 
    <div class="border-slate-500  text-transparent-30 py-2 mx-4 text-center text-black hover:text-white hover:bg-gradient-to-l hover:from-gray-900 hover:via-red-500 hover:to-yellow-500 hover:animate-pulse font-bold hover:underline rounded-xl">
        Web Developer | Programming | IT Enthusias
    </div>
    
    <div class="border-slate-900 block bg-blue-900 py-2 mt-3 my-5 rounded-xl"></div>

    <section class="bg-white px-4 py-8 antialiased dark:bg-gray-900 md:py-16 rounded-2xl">
        <div class="mx-auto grid max-w-screen-xl rounded-lg bg-gray-50 p-4 dark:bg-gray-800 md:p-8 lg:grid-cols-12 lg:gap-8 lg:p-16 xl:gap-16">
          <div class="lg:col-span-5 col-md-4 lg:mt-0">
            <a href="#">
              <img class="rounded-xl h-56 w-56 dark:hidden sm:h-96 sm:w-96 md:h-full md:w-full" src="{{ asset('img/webdev.jpeg') }}" alt="peripherals" />
            </a>
          </div>
          <div class="mx-auto place-self-center lg:col-span-7">
            <h1 class="mb-3 text-2xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white md:text-4xl ">
              Web Developer <br />
              Make a responsible for building and developing the website.
            </h1>
            <p class="mb-6 text-gray-500 dark:text-gray-400 hover:uppercase">Results-oriented full-stack web developer with 1 years of experience in designing and developing innovative web solutions. Proficient in languange PHP and Framework like a Laravel, Codeigniter, and MySql, I am dedicated to delivering high-quality, user-centric applications. </p>
          </div>
        </div>
        <div class="border-slate-900 block bg-blue-900 py-2 mt-3 my-5 rounded-xl"></div>
        <div class="mx-auto grid max-w-screen-xl rounded-lg bg-gray-50 p-4 ">
          <div class="mx-auto place-self-center lg:col-span-7">
            <h1 class="mb-3 col-md-4 text-2xl text-center font-bold leading-tight text-gray-900 dark:text-white md:text-4xl">
              Programming <br/>
              Designing programs for specific tasks.
            </h1>
            <p class="mb-6 text-gray-500 dark:text-gray-400">My programming skillset encompasses PHP, Python, and JavaScript, in addition to HTML, CSS, and related frameworks.</p>
          </div>
        </div>        
        <div class="outline-double outline-3 outline-offset-2  bg-zinc-700 py-2 mt-3 my-5 rounded-3xl "></div>
        <div class="mx-auto grid max-w-scree-xl rounded-xl bg-gray-50 p-4  dark:bg-gray-800 md:p-8 lg:grid-cols-12 lg:gap-8 lg:p-16 xl:gap-16">
          <div class="mx-auto place-self-center lg:col-span-7">
            <h1 class="mb-3 text-2xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white md:text-4xl">
              IT Enthusias <br />
              Are typically problem-solvers who enjoy finding innovative solutions.
            </h1>
            <p class="mb-6 text-gray-500 dark:text-gray-400 hover:uppercase">As a technology enthusiast, I am driven by a deep curiosity about computers and networks. This passion fuels my desire to continually expand my knowledge and make meaningful contributions to the field.</p>
          </div>
          <div class="lg:col-span-5 col-md-4 lg:mt-0">
            <a href="">
              <img class="rounded-xl h-56 w-56 dark:hidden sm:h-96 sm:w-96 md:h-full md:w-full" src="{{ asset('img/prog.png') }}" alt="">
            </a>
          </div>
        </div>

      </section>
    
 </x-layout>