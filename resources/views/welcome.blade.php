<x-app-layout>
    <section class="relative min-h-screen flex items-end justify-center overflow-hidden font-sans bg-bg-left">
        
        <div class="w-full max-w-[1318px] mx-auto relative min-h-screen flex items-center">

            <div class="hidden lg:block absolute top-0 bottom-0 right-0 w-1/2 bg-bg-right z-0">
                <div class="absolute top-[55%] left-1/2 -translate-x-1/2 -translate-y-1/2 w-[450px] h-[450px] bg-white rounded-full opacity-100 shadow-sm"></div>
            </div>

            <div class="lg:hidden absolute bottom-0 left-0 right-0 h-[40%] bg-bg-right z-0 rounded-t-[3rem] mx-4">
                 <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[300px] h-[300px] bg-white rounded-full opacity-100 shadow-sm"></div>
            </div>

            <div class="absolute top-0 left-0 bottom-0 w-1/2 z-0 hidden lg:flex items-center justify-center opacity-10 pointer-events-none">
                <img src="{{ asset('images/tepatjurusantransparan.png') }}" 
                     alt="Watermark" 
                     class="w-[80%] max-w-[600px] object-contain rotate-12">
            </div>


            <div class="relative z-20 w-full grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-4 px-6 md:px-8 lg:px-12 pointer-events-none">
                
                <div class="pt-24 lg:pt-0 text-center lg:text-left lg:pr-10 pointer-events-auto"> 
                    
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-purple-200 bg-white/60 backdrop-blur-sm shadow-sm mb-6 lg:mb-8 mx-auto lg:mx-0">
                        <span class="w-2 h-2 rounded-full bg-brand-purple animate-pulse"></span>
                        <span class="text-[10px] md:text-xs font-bold text-brand-purple/80 uppercase tracking-widest underline decoration-brand-purple/30 underline-offset-4">
                            Meet with the #01 Course in Indonesia
                        </span>
                    </div>

                    <h1 class="text-4xl md:text-5xl lg:text-5xl 2xl:text-[64px] font-bold leading-[1.1] text-gray-900 mb-6 lg:mb-8 tracking-wide w-full lg:w-[130%] 2xl:w-[140%]">
                        Most reputed <br>
                        educational <span class="text-brand-purple">bootcamp</span> <br>
                        in Indonesia
                    </h1>

                    <div class="flex justify-center lg:justify-start mb-12 lg:mb-20">
                        <a href="#" class="inline-block px-8 lg:px-10 py-3 lg:py-4 bg-brand-teal text-white font-bold text-sm rounded shadow-lg shadow-brand-teal/30 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                            SIGN UP NOW
                        </a>
                    </div>

                    <div class="w-full max-w-md lg:max-w-full overflow-hidden relative mx-auto lg:mx-0">
                        <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-4 text-center lg:text-left">
                            Trusted Partners
                        </p>
                        <div class="flex flex-nowrap relative [mask-image:_linear-gradient(to_right,transparent_0,_black_20px,_black_calc(100%-20px),transparent_100%)]">
                            <ul class="flex items-center justify-center md:justify-start [&_li]:mx-6 [&_img]:max-w-none animate-infinite-scroll">
                                <li><div class="flex items-center gap-2 font-bold text-gray-400 text-lg"><div class="w-8 h-8 rounded-full border-4 border-orange-500"></div> LogoA</div></li>
                                <li><div class="flex items-center gap-2 font-bold text-gray-400 text-lg"><div class="w-8 h-8 bg-blue-600 skew-x-12"></div> CompanyB</div></li>
                                <li><div class="flex items-center gap-2 font-bold text-gray-400 text-lg"><div class="w-8 h-8 rounded-full bg-green-500 border-t-4 border-white"></div> StartupC</div></li>
                                <li><div class="flex items-center gap-2 font-bold text-gray-400 text-lg"><div class="w-8 h-8 bg-brand-purple rounded-lg rotate-45"></div> TechD</div></li>
                            </ul>
                            <ul class="flex items-center justify-center md:justify-start [&_li]:mx-6 [&_img]:max-w-none animate-infinite-scroll" aria-hidden="true">
                                <li><div class="flex items-center gap-2 font-bold text-gray-400 text-lg"><div class="w-8 h-8 rounded-full border-4 border-orange-500"></div> LogoA</div></li>
                                <li><div class="flex items-center gap-2 font-bold text-gray-400 text-lg"><div class="w-8 h-8 bg-blue-600 skew-x-12"></div> CompanyB</div></li>
                                <li><div class="flex items-center gap-2 font-bold text-gray-400 text-lg"><div class="w-8 h-8 rounded-full bg-green-500 border-t-4 border-white"></div> StartupC</div></li>
                                <li><div class="flex items-center gap-2 font-bold text-gray-400 text-lg"><div class="w-8 h-8 bg-brand-purple rounded-lg rotate-45"></div> TechD</div></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div></div>
            </div>


            <div class="absolute bottom-0 w-full lg:w-1/2 right-0 z-10 flex justify-center pointer-events-none">
                <img src="{{ asset('images/image 23.png') }}" 
                     alt="Happy Student" 
                     class="w-auto h-[55vh] md:h-[60vh] lg:h-[85vh] 2xl:h-[90vh] object-contain drop-shadow-2xl translate-y-0">
            </div>

        </div>
    </section>

    <section class="w-full py-20 bg-white font-sans">
    <div class="w-full max-w-[1318px] mx-auto px-6 md:px-8 lg:px-12">
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            
            <div class="relative w-full h-auto min-h-[500px] lg:min-h-[600px]">
                
                <div class="absolute top-0 left-0 w-[70%] z-10">
                    <img src="{{ asset('images/image 24.png') }}" 
                         alt="Mentoring Session" 
                         class="w-full h-auto object-cover rounded-xl shadow-lg">
                </div>

                <div class="absolute top-10 right-4 lg:-right-4 z-0 animate-spin-slow">
                    <img src="https://cdn-icons-png.flaticon.com/512/6941/6941697.png" 
                         alt="Award Badge" 
                         class="w-24 h-24 lg:w-32 lg:h-32 opacity-80">
                </div>

                <div class="absolute bottom-10 right-0 w-[65%] z-20">
                    <img src="{{ asset('images/image 25.png') }}" 
                         alt="Happy Student" 
                         class="w-full h-auto object-cover rounded-xl shadow-2xl border-[8px] border-white">
                </div>
            </div>


            <div>
                <div class="mb-4">
                    <span class="text-rose-500 font-bold text-sm uppercase tracking-wider border-b-2 border-rose-500 pb-1">
                        What is Tepat Jurusan?
                    </span>
                </div>

                <h2 class="text-4xl lg:text-5xl font-extrabold text-gray-900 leading-tight mb-6">
                    What Is <span class="text-rose-500">Tepat Jurusan</span> <br>
                    and How It Helps You <br>
                    Choose the Right Major
                </h2>

                <p class="text-gray-500 text-lg leading-relaxed mb-10">
                    We have focused on generating new knowledge and promoting critical thinking amongst our students, graduating more than 7,000 young men and women during this time.
                </p>

                <div class="border-l-[6px] border-gray-900 pl-6 lg:pl-8 py-2">
                    <blockquote class="text-gray-800 font-medium italic text-lg mb-6 leading-relaxed">
                        "Pendidikan menuntun segala kekuatan kodrat yang ada pada anak agar mereka mencapai keselamatan dan kebahagiaan setinggi-tingginya."
                    </blockquote>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <img src="{{ asset('images/image 28.png') }}" 
                                 alt="Ki Hajar Dewantara" 
                                 class="w-12 h-12 rounded-full object-cover grayscale">
                            
                            <div>
                                <p class="text-xs text-rose-500 font-bold mb-0.5">Tokoh Pendidikan Nasional Indonesia</p>
                                <p class="text-gray-900 font-bold text-lg">Ki Hajar Dewantara</p>
                            </div>
                        </div>

                        <div class="hidden sm:block opacity-50">
                            <img src="{{ asset('images/image 29.png') }}" 
                                 alt="Ki Hajar Dewantara">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w-full py-20 lg:py-24 bg-[#8b5cf6] font-sans text-white">
    <div class="w-full max-w-[1318px] mx-auto px-6 md:px-8 lg:px-12">
        
        <div class="text-center mb-16 lg:mb-20">
            <div class="inline-block border-b border-white/60 pb-1 mb-6">
                <span class="uppercase tracking-[0.2em] text-xs font-bold text-white/90">
                    Why Choose Us
                </span>
            </div>

            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold leading-tight">
                What Is and How It Helps You <br class="hidden md:block">
                Choose the Right Major
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">

            <div class="group border border-white/30 p-8 lg:p-12 text-center rounded hover:bg-white/10 transition-all duration-300 hover:-translate-y-2">
                <div class="h-16 mb-6 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 mx-auto">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.499 5.24 50.552 50.552 0 00-2.658.813m-15.482 0a50.553 50.553 0 0115.482 0m2.182 3.662a62.115 62.115 0 01-2.5 13.525" />
                    </svg>
                </div>

                <h3 class="text-xl lg:text-2xl font-bold mb-4">
                    Education <br> Affordability
                </h3>

                <p class="text-white/80 text-sm leading-relaxed">
                    We have focused on creating solutions to improve education affordability and increase access to learning opportunities.
                </p>
            </div>

            <div class="group border border-white/30 p-8 lg:p-12 text-center rounded hover:bg-white/10 transition-all duration-300 hover:-translate-y-2">
                <div class="h-16 mb-6 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 mx-auto">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                    </svg>
                </div>

                <h3 class="text-xl lg:text-2xl font-bold mb-4">
                    Core academics <br> solutions
                </h3>

                <p class="text-white/80 text-sm leading-relaxed">
                    We have focused on developing innovative solutions for core academic enhancing educational outcomes.
                </p>
            </div>

            <div class="group border border-white/30 p-8 lg:p-12 text-center rounded hover:bg-white/10 transition-all duration-300 hover:-translate-y-2">
                <div class="h-16 mb-6 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 mx-auto">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                    </svg>
                </div>

                <h3 class="text-xl lg:text-2xl font-bold mb-4">
                    Inspiring <br> Student Life
                </h3>

                <p class="text-white/80 text-sm leading-relaxed">
                    We have focused on enhancing student life by creating inspiring environments and enriching experiences on campus.
                </p>
            </div>

        </div>

    </div>
</section>

<section class="w-full py-20 bg-white font-sans overflow-hidden">
    
    <style>
        @keyframes infinite-scroll {
            from { transform: translateX(0); }
            to { transform: translateX(-100%); }
        }
        /* Kecepatan 40s biar agak pelan karena gambarnya besar-besar */
        .animate-infinite-scroll-slow {
            animation: infinite-scroll 40s linear infinite;
        }
        .animate-infinite-scroll {
            animation: infinite-scroll 25s linear infinite;
        }
    </style>


    <div class="w-full mb-20 lg:mb-24 relative overflow-hidden">
        
        <div class="w-full inline-flex flex-nowrap overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_150px,_black_calc(100%-150px),transparent_100%)] py-8">
            
            <ul class="flex items-center gap-6 md:gap-8 animate-infinite-scroll-slow px-4">
                
                <li class="flex-shrink-0 w-[280px] md:w-[350px]">
                    <div class="h-[350px] md:h-[450px] w-full rounded-xl overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?q=80&w=600&auto=format&fit=crop" class="h-full w-full object-cover" alt="Campus TALL">
                    </div>
                </li>

                <li class="flex-shrink-0 w-[280px] md:w-[350px]">
                    <div class="h-[250px] md:h-[300px] w-full rounded-xl overflow-hidden border border-gray-100">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=600&auto=format&fit=crop" class="h-full w-full object-cover" alt="Campus SHORT">
                    </div>
                </li>

                 <li class="flex-shrink-0 w-[280px] md:w-[350px]">
                    <div class="h-[350px] md:h-[450px] w-full rounded-xl overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1606761568499-6d2451b23c66?q=80&w=600&auto=format&fit=crop" class="h-full w-full object-cover" alt="Campus TALL">
                    </div>
                </li>

                <li class="flex-shrink-0 w-[280px] md:w-[350px]">
                    <div class="h-[250px] md:h-[300px] w-full rounded-xl overflow-hidden border border-gray-100">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=600&auto=format&fit=crop" class="h-full w-full object-cover" alt="Campus SHORT">
                    </div>
                </li>

                <li class="flex-shrink-0 w-[280px] md:w-[350px]">
                    <div class="h-[350px] md:h-[450px] w-full rounded-xl overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1562774053-701939374585?q=80&w=600&auto=format&fit=crop" class="h-full w-full object-cover" alt="Campus TALL">
                    </div>
                </li>

                <li class="flex-shrink-0 w-[280px] md:w-[350px]">
                    <div class="h-[250px] md:h-[300px] w-full rounded-xl overflow-hidden border border-gray-100">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=600&auto=format&fit=crop" class="h-full w-full object-cover" alt="Campus SHORT">
                    </div>
                </li>
            </ul>


            <ul class="flex items-center gap-6 md:gap-8 animate-infinite-scroll-slow px-4" aria-hidden="true">
               <li class="flex-shrink-0 w-[280px] md:w-[350px]">
                    <div class="h-[350px] md:h-[450px] w-full rounded-xl overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?q=80&w=600&auto=format&fit=crop" class="h-full w-full object-cover" alt="Campus TALL">
                    </div>
                </li>
                <li class="flex-shrink-0 w-[280px] md:w-[350px]">
                    <div class="h-[250px] md:h-[300px] w-full rounded-xl overflow-hidden border border-gray-100">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=600&auto=format&fit=crop" class="h-full w-full object-cover" alt="Campus SHORT">
                    </div>
                </li>
                 <li class="flex-shrink-0 w-[280px] md:w-[350px]">
                    <div class="h-[350px] md:h-[450px] w-full rounded-xl overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1606761568499-6d2451b23c66?q=80&w=600&auto=format&fit=crop" class="h-full w-full object-cover" alt="Campus TALL">
                    </div>
                </li>
                <li class="flex-shrink-0 w-[280px] md:w-[350px]">
                    <div class="h-[250px] md:h-[300px] w-full rounded-xl overflow-hidden border border-gray-100">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=600&auto=format&fit=crop" class="h-full w-full object-cover" alt="Campus SHORT">
                    </div>
                </li>
                <li class="flex-shrink-0 w-[280px] md:w-[350px]">
                    <div class="h-[350px] md:h-[450px] w-full rounded-xl overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1562774053-701939374585?q=80&w=600&auto=format&fit=crop" class="h-full w-full object-cover" alt="Campus TALL">
                    </div>
                </li>
                <li class="flex-shrink-0 w-[280px] md:w-[350px]">
                    <div class="h-[250px] md:h-[300px] w-full rounded-xl overflow-hidden border border-gray-100">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=600&auto=format&fit=crop" class="h-full w-full object-cover" alt="Campus SHORT">
                    </div>
                </li>
            </ul>

        </div>


    <div class="w-full max-w-[1318px] mx-auto px-6 md:px-8 lg:px-12 pt-16">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <p class="text-xs font-bold text-brand-purple uppercase tracking-widest mb-3 underline decoration-brand-purple/30 underline-offset-4">
                Available Courses
            </p>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-gray-900">
                Take a look at <span class="text-brand-purple">the courses</span> we offer.
            </h2>
        </div>

        <div class="max-w-4xl mx-auto divide-y divide-gray-100 mb-20">
            <div class="group py-8 flex flex-col md:flex-row gap-4 md:gap-10 items-start md:items-center hover:bg-gray-50/50 transition-colors rounded-lg px-4">
                <div class="text-5xl md:text-6xl font-black text-transparent select-none transition-all duration-300 group-hover:tracking-widest"
                     style="-webkit-text-stroke: 1px #8b5cf6;">01</div>
                <div class="flex-1">
                    <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2">Psychology</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">We focus on understanding human behavior, mental processes, and emotional patterns.</p>
                </div>
            </div>
            <div class="group py-8 flex flex-col md:flex-row gap-4 md:gap-10 items-start md:items-center hover:bg-gray-50/50 transition-colors rounded-lg px-4">
                <div class="text-5xl md:text-6xl font-black text-transparent select-none transition-all duration-300 group-hover:tracking-widest"
                     style="-webkit-text-stroke: 1px #8b5cf6;">02</div>
                <div class="flex-1">
                    <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2">Sociology</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">We concentrate on exploring social structures, interactions, and dynamics.</p>
                </div>
            </div>
            <div class="group py-8 flex flex-col md:flex-row gap-4 md:gap-10 items-start md:items-center hover:bg-gray-50/50 transition-colors rounded-lg px-4">
                <div class="text-5xl md:text-6xl font-black text-transparent select-none transition-all duration-300 group-hover:tracking-widest"
                     style="-webkit-text-stroke: 1px #8b5cf6;">03</div>
                <div class="flex-1">
                    <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2">Political Science</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">We focus on understanding political systems, public policies, and governance.</p>
                </div>
            </div>
            <div class="group py-8 flex flex-col md:flex-row gap-4 md:gap-10 items-start md:items-center hover:bg-gray-50/50 transition-colors rounded-lg px-4">
                <div class="text-5xl md:text-6xl font-black text-transparent select-none transition-all duration-300 group-hover:tracking-widest"
                     style="-webkit-text-stroke: 1px #8b5cf6;">04</div>
                <div class="flex-1">
                    <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2">Anthropology</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">We concentrate on studying human cultures, societies, and behaviors.</p>
                </div>
            </div>
            <div class="group py-8 flex flex-col md:flex-row gap-4 md:gap-10 items-start md:items-center hover:bg-gray-50/50 transition-colors rounded-lg px-4 border-b border-gray-100">
                <div class="text-5xl md:text-6xl font-black text-transparent select-none transition-all duration-300 group-hover:tracking-widest"
                     style="-webkit-text-stroke: 1px #8b5cf6;">05</div>
                <div class="flex-1">
                    <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2">Economics</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">We focus on analyzing economic systems, markets, and issues.</p>
                </div>
            </div>
        </div>

    </div>
        
        <div class="w-full inline-flex flex-nowrap overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-128px),transparent_100%)]">
            
            <ul class="flex items-center justify-center md:justify-start [&_li]:mx-12 [&_img]:max-w-none animate-infinite-scroll">
                <li><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/368px-Google_2015_logo.svg.png" class="h-8 md:h-10 object-contain grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-300" alt="Google"></li>
                <li><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/600px-Facebook_f_logo_%282019%29.svg.png" class="h-8 md:h-10 object-contain grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-300" alt="Facebook"></li>
                <li><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Microsoft_logo.svg/480px-Microsoft_logo.svg.png" class="h-8 md:h-10 object-contain grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-300" alt="Microsoft"></li>
                <li><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Amazon_logo.svg/603px-Amazon_logo.svg.png" class="h-8 md:h-10 object-contain grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-300" alt="Amazon"></li>
                <li><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Netflix_2015_logo.svg/799px-Netflix_2015_logo.svg.png" class="h-7 md:h-9 object-contain grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-300" alt="Netflix"></li>
                <li><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/368px-Google_2015_logo.svg.png" class="h-8 md:h-10 object-contain grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-300" alt="Google"></li>
            </ul>

            <ul class="flex items-center justify-center md:justify-start [&_li]:mx-12 [&_img]:max-w-none animate-infinite-scroll" aria-hidden="true">
                <li><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/368px-Google_2015_logo.svg.png" class="h-8 md:h-10 object-contain grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-300" alt="Google"></li>
                <li><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/600px-Facebook_f_logo_%282019%29.svg.png" class="h-8 md:h-10 object-contain grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-300" alt="Facebook"></li>
                <li><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Microsoft_logo.svg/480px-Microsoft_logo.svg.png" class="h-8 md:h-10 object-contain grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-300" alt="Microsoft"></li>
                <li><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Amazon_logo.svg/603px-Amazon_logo.svg.png" class="h-8 md:h-10 object-contain grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-300" alt="Amazon"></li>
                <li><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Netflix_2015_logo.svg/799px-Netflix_2015_logo.svg.png" class="h-7 md:h-9 object-contain grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-300" alt="Netflix"></li>
                <li><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/368px-Google_2015_logo.svg.png" class="h-8 md:h-10 object-contain grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-300" alt="Google"></li>
            </ul>
        </div>
</section>

<section class="w-full py-16 md:py-24 bg-[#F9F9F9] font-sans">
    <div class="w-full max-w-[1318px] mx-auto px-6 md:px-8 lg:px-12">
        
        <div class="flex flex-col md:flex-row justify-between items-end md:items-center mb-10 gap-4">
            <div>
                <span class="text-brand-purple text-xs font-bold uppercase tracking-widest border-b border-brand-purple pb-1">
                    Events
                </span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-3">
                    Upcoming Events
                </h2>
            </div>

            <a href="{{ route('events.index') }}" class="px-6 py-2.5 bg-brand-teal text-white text-sm font-bold rounded shadow-md hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300">
                View All
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            @forelse($events as $event)
                @php
                    $hasDiscount = $event->discount_price && 
                                   $event->discount_end_time && 
                                   \Carbon\Carbon::parse($event->discount_end_time)->isFuture();
                @endphp

                <a href="{{ route('events.show', $event->slug) }}" class="bg-white block rounded-xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group border border-gray-100 flex flex-col h-full relative z-10">
                    
                    <div class="relative h-48 overflow-hidden flex-shrink-0">
                        <img src="{{ $event->banner_media ? asset('storage/' . $event->banner_media) : 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=800&auto=format&fit=crop' }}" 
                             alt="{{ $event->title }}" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        
                        @if($hasDiscount)
                            <div class="absolute top-3 left-3 bg-rose-600/95 backdrop-blur-sm text-white text-[11px] font-bold px-2.5 py-1.5 rounded flex items-center gap-1.5 shadow-md border border-rose-500/20">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3.5 h-3.5 animate-pulse">
                                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z" clip-rule="evenodd" />
                                </svg>
                                <span data-countdown="{{ $event->discount_end_time }}" class="font-mono tracking-wide">Loading...</span>
                            </div>
                        @else
                            <div class="absolute top-3 left-3 bg-brand-purple/90 backdrop-blur-sm text-white text-[10px] font-bold px-2 py-1 rounded flex items-center gap-1 shadow-sm uppercase">
                                {{ $event->location_type ?? 'Event' }}
                            </div>
                        @endif
                    </div>

                    <div class="p-5 flex flex-col flex-1">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 line-clamp-2 leading-tight group-hover:text-brand-purple transition-colors">
                            {{ $event->title }}
                        </h3>
                        
                        <div class="flex flex-wrap gap-2 mb-6">
                             @php
                                $start = \Carbon\Carbon::parse($event->start_datetime);
                                $end = \Carbon\Carbon::parse($event->end_datetime);
                                $duration = $start->diffInHours($end) ?: 1;
                            @endphp
                            <span class="px-2 py-1 border border-gray-200 rounded text-[10px] font-bold text-gray-500 flex items-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 text-gray-400"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z" clip-rule="evenodd" /></svg>
                                {{ $duration }} Hours
                            </span>
                            <span class="px-2 py-1 border border-gray-200 rounded text-[10px] font-bold text-gray-500 flex items-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 text-gray-400"><path d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-4.42 6.753 6.753 0 01-4.825 3.316z" /></svg>
                                {{ $event->quota }} Seats
                            </span>
                        </div>

                        <div class="mt-auto flex items-end justify-between border-t border-gray-100 pt-4">
                            <span class="text-xs font-bold text-gray-900">
                                {{ \Carbon\Carbon::parse($event->start_datetime)->format('d F, Y') }}
                            </span>
                            
                            <div class="text-right flex flex-col items-end">
                                @if($hasDiscount)
                                    <span class="text-[10px] font-bold text-gray-400 line-through mb-0.5">
                                        IDR {{ number_format($event->price, 0, ',', '.') }}
                                    </span>
                                    <span class="text-sm font-extrabold text-rose-500">
                                        IDR {{ number_format($event->discount_price, 0, ',', '.') }}
                                    </span>
                                @else
                                    @if($event->price == 0)
                                        <span class="text-sm font-extrabold text-brand-teal">FREE</span>
                                    @else
                                        <span class="text-sm font-extrabold text-brand-teal">
                                            IDR {{ number_format($event->price, 0, ',', '.') }}
                                        </span>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                <div class="col-span-full py-10 text-center">
                    <p class="text-gray-500">Belum ada event yang akan datang.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

<section class="w-full py-16 md:py-24 bg-white font-sans">
    <div class="w-full max-w-[1318px] mx-auto px-6 md:px-8 lg:px-12">
        
        <div class="flex flex-col md:flex-row justify-between items-end md:items-center mb-12 gap-4">
            <div class="max-w-2xl">
                <span class="text-brand-purple text-xs font-bold uppercase tracking-widest border-b border-brand-purple pb-1">
                    News & Articles
                </span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-4 leading-tight">
                    Announcement & <span class="text-brand-purple">feeds</span> news
                </h2>
            </div>
            
            <a href="{{ route('articles.index') }}" class="px-8 py-3 bg-brand-teal text-white text-sm font-bold rounded shadow-md hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300">
                View All
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-10">

    @forelse($articles as $article)
        <article class="group cursor-pointer flex flex-col h-full">
            <div class="relative overflow-hidden rounded-lg mb-5">
                <img src="{{ asset('storage/' . $article->thumbnail) }}" 
                     alt="{{ $article->title }}" 
                     class="w-full h-64 object-cover transform group-hover:scale-105 transition-transform duration-500">
                
                <div class="absolute top-6 left-6 w-12 h-12 bg-brand-teal flex items-center justify-center text-white font-bold text-lg shadow-lg z-10">
                    {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                </div>
            </div>

            <div class="flex flex-col flex-1">
                <h3 class="text-xl font-bold text-gray-900 mb-2 leading-snug group-hover:text-brand-purple transition-colors line-clamp-2">
                    {{ $article->title }}
                </h3>
                <p class="text-sm text-gray-400 font-medium mt-auto">
                    {{ $article->published_at->format('M d, Y') }} 
                    <span class="mx-1">.</span> 
                    {{ $article->read_time }}
                </p>
            </div>
        </article>
    @empty
        <div class="col-span-3 text-center py-10 text-gray-400">
            Belum ada berita terbaru.
        </div>
    @endforelse

</div>
    </div>
</section>

<section class="relative w-full h-[50vh] md:h-[70vh] overflow-hidden bg-gray-900">
    <video
        class="absolute top-0 left-0 w-full h-full object-cover pointer-events-none"
        autoplay
        muted
        loop
        playsinline
        poster="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?q=80&w=1920&auto=format&fit=crop" >
        <source src="{{ asset('videos/campus.mp4') }}" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="absolute inset-0 bg-black/20"></div>
    </section>

    <section class="w-full py-20 bg-white">
    <div class="container mx-auto px-6 text-center">
        
        <div class="flex justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-gray-700">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.499 5.24 50.552 50.552 0 00-2.658.813m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
            </svg>
        </div>

        <a href="#" class="inline-block text-[10px] md:text-xs font-bold text-brand-purple uppercase tracking-widest border-b border-brand-purple pb-0.5 mb-8 hover:opacity-80 transition">
            Our Purpose
        </a>

        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-900 leading-tight max-w-4xl mx-auto mb-16">
            Tepat Jurusan helps adolescents develop character and independence in choosing their 
            <span class="text-brand-purple">education</span> and career paths through psychological guidance and group counseling.
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-3xl mx-auto border-t border-gray-100 pt-10 md:pt-0 md:border-t-0">
            
            <div class="flex flex-col items-center">
                <span class="text-brand-purple font-bold text-[10px] uppercase tracking-wider mb-1">
                    Student Nationalities
                </span>
                <span class="text-5xl md:text-6xl font-extrabold" 
                      style="-webkit-text-stroke: 1px #374151; color: transparent;">
                    05
                </span>
            </div>

            <div class="flex flex-col items-center">
                <span class="text-brand-purple font-bold text-[10px] uppercase tracking-wider mb-1">
                    International Students
                </span>
                <span class="text-5xl md:text-6xl font-extrabold" 
                      style="-webkit-text-stroke: 1px #374151; color: transparent;">
                    25%
                </span>
            </div>

            <div class="flex flex-col items-center">
                <span class="text-brand-purple font-bold text-[10px] uppercase tracking-wider mb-1">
                    Different Majors
                </span>
                <span class="text-5xl md:text-6xl font-extrabold" 
                      style="-webkit-text-stroke: 1px #374151; color: transparent;">
                    20
                </span>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        @if(session('success_register'))
            Swal.fire({
                title: 'Welcome Aboard! 🎉',
                text: "{{ session('success_register') }}",
                icon: 'success',
                confirmButtonText: 'Let\'s Go!',
                confirmButtonColor: '#7C3AED',
                background: '#ffffff',
                backdrop: `
                    rgba(124, 58, 237, 0.4)
                    url("https://media.giphy.com/media/xT0xezQGU5xCXJuNz2/giphy.gif")
                    left top
                    no-repeat
                `
            });
        @endif


        @if($errors->any())
            Swal.fire({
                title: 'Oops!',
                html: '<ul class="text-left text-sm">@foreach($errors->all() as $error)<li>⚠️ {{ $error }}</li>@endforeach</ul>',
                icon: 'error',
                confirmButtonColor: '#EF4444',
            });
        @endif
    </script>
    </section>
    <section class="w-full px-6 relative z-20 -mb-32 md:-mb-48 mt-24">
        <div class="container mx-auto max-w-5xl bg-white rounded-xl shadow-2xl overflow-hidden flex flex-col md:flex-row text-gray-800">
            
            <div class="w-full md:w-1/2 h-64 md:h-96 relative">
                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=800&auto=format&fit=crop" 
                     alt="Contact Us" 
                     class="absolute inset-0 w-full h-full object-cover">
            </div>

            <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center text-left">
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                    Apply for <span class="text-rose-500">admission?</span>
                </h3>
                <p class="text-gray-500 text-sm mb-8 leading-relaxed">
                    A place to provide students with enough knowledge and skills in a complex world. 
                    Are you looking for exceptional education experience?
                    Eduvet might be the place for you.
                </p>
                <div>
                    <a href="#" class="inline-block px-8 py-3 bg-rose-600 text-white font-bold text-sm rounded shadow-lg hover:bg-rose-700 transition-colors">
                        CONTACT US
                    </a>
                </div>
            </div>

        </div>
    </section>
</body>

</x-app-layout>