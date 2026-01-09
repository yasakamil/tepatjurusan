<x-app-layout>
    <section class="relative min-h-[100dvh] flex flex-col lg:flex-row items-end lg:items-center justify-start lg:justify-center overflow-hidden font-sans bg-white">
    
    <div class="absolute inset-0 w-full h-full z-0">
        <img src="{{ asset('images/heromobile.png') }}" alt="Background Mobile" class="w-full h-full object-cover md:hidden">
        <img src="{{ asset('images/herotablet.png') }}" alt="Background Tablet" class="hidden md:block lg:hidden w-full h-full object-cover">
        <img src="{{ asset('images/herolaptop.png') }}" alt="Background Laptop" class="hidden lg:block xl:hidden w-full h-full object-cover">
        <img src="{{ asset('images/herodesktop.png') }}" alt="Background Desktop" class="hidden xl:block w-full h-full object-cover">
    </div>

    <div class="w-full max-w-[1440px] mx-auto relative z-10 px-6 md:px-8 lg:px-12 h-full flex flex-col lg:flex-row">

        <div class="w-full lg:w-[70%] pt-12 pb-8 lg:py-0 flex flex-col justify-start lg:justify-center text-left z-30">
            
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full border border-purple-200 bg-white/80 backdrop-blur-sm shadow-sm mb-4 lg:mb-8 mx-0 w-fit">
                <span class="w-2 h-2 rounded-full bg-brand-purple animate-pulse flex-shrink-0"></span>
                <span class="text-[10px] md:text-xs font-bold text-brand-purple/80 uppercase tracking-widest underline decoration-brand-purple/30 underline-offset-4 whitespace-nowrap">
                    Top Educational Consultant
                </span>
            </div>

            <h1 class="text-3xl sm:text-4xl md:text-5xl xl:text-6xl font-extrabold leading-[1.1] text-gray-900 mb-4 lg:mb-8 tracking-wide w-full lg:w-[130%] 2xl:w-[140%] relative text-left">
                Tentukan Masa Depanmu <br>
                Yang <span class="text-brand-purple">Cerah!</span> <br class="hidden lg:block">
            </h1>

            <div class="flex justify-start mb-8 lg:mb-20">
                <a href="{{ route('register') }}" class="inline-block px-8 lg:px-10 py-3 lg:py-4 bg-brand-teal text-white font-bold text-sm rounded shadow-lg shadow-brand-teal/30 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    SIGN UP NOW
                </a>
            </div>

            <div class="w-full max-w-md lg:max-w-lg xl:max-w-xl overflow-hidden relative mx-0">
                <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-3 text-left">
                    Trusted Partners
                </p>
                <div class="flex flex-nowrap relative [mask-image:_linear-gradient(to_right,transparent_0,_black_20px,_black_calc(100%-20px),transparent_100%)]">
                    <ul class="flex items-center justify-start [&_li]:mx-6 [&_img]:max-w-none animate-infinite-scroll">
                        <li><div class="flex items-center gap-2 font-bold text-gray-400 text-lg"><div class="w-8 h-8 rounded-full border-4 border-orange-500"></div> LogoA</div></li>
                        <li><div class="flex items-center gap-2 font-bold text-gray-400 text-lg"><div class="w-8 h-8 bg-blue-600 skew-x-12"></div> CompanyB</div></li>
                        <li><div class="flex items-center gap-2 font-bold text-gray-400 text-lg"><div class="w-8 h-8 rounded-full bg-green-500 border-t-4 border-white"></div> StartupC</div></li>
                        <li><div class="flex items-center gap-2 font-bold text-gray-400 text-lg"><div class="w-8 h-8 bg-brand-purple rounded-lg rotate-45"></div> TechD</div></li>
                    </ul>
                    <ul class="flex items-center justify-start [&_li]:mx-6 [&_img]:max-w-none animate-infinite-scroll" aria-hidden="true">
                        <li><div class="flex items-center gap-2 font-bold text-gray-400 text-lg"><div class="w-8 h-8 rounded-full border-4 border-orange-500"></div> LogoA</div></li>
                        <li><div class="flex items-center gap-2 font-bold text-gray-400 text-lg"><div class="w-8 h-8 bg-blue-600 skew-x-12"></div> CompanyB</div></li>
                        <li><div class="flex items-center gap-2 font-bold text-gray-400 text-lg"><div class="w-8 h-8 rounded-full bg-green-500 border-t-4 border-white"></div> StartupC</div></li>
                        <li><div class="flex items-center gap-2 font-bold text-gray-400 text-lg"><div class="w-8 h-8 bg-brand-purple rounded-lg rotate-45"></div> TechD</div></li>
                    </ul>
                </div>
            </div>

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
                    Apa Itu <span class="text-rose-500">Tepat Jurusan?</span> <br>
                </h2>

                <p class="text-gray-500 text-lg leading-relaxed mb-10">
                    Tepat Jurusan adalah program edukasi yang berfokus untuk membangun karakter remaja pelajar dalam mengenal karakter dan diri untuk mengambil keputusan dalam perencanaan pendidikan lanjut mereka setelah jenjang sekolah.
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

<section class="w-full py-20 lg:py-24 bg-[#8b5cf6] font-sans text-white relative overflow-hidden">
    
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none opacity-10">
        <div class="absolute top-[-10%] right-[-5%] w-96 h-96 bg-white rounded-full blur-3xl"></div>
        <div class="absolute bottom-[-10%] left-[-5%] w-96 h-96 bg-pink-500 rounded-full blur-3xl"></div>
    </div>

    <div class="w-full max-w-[1318px] mx-auto px-6 md:px-8 lg:px-12 relative z-10">
        
        <div class="text-center mb-16 lg:mb-20">
            <div class="inline-block border-b border-white/40 pb-1 mb-6">
                <span class="uppercase tracking-[0.25em] text-xs font-bold text-white/90">
                    Kenapa Tepat Jurusan
                </span>
            </div>

            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold leading-tight drop-shadow-md">
                Visi, Misi, dan Tujuan
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 items-stretch">

            <div class="group bg-[#1e1b4b] p-8 rounded-[2.5rem] shadow-2xl hover:-translate-y-3 transition-all duration-500 relative overflow-hidden flex flex-col h-full border border-white/10 hover:border-white/30 hover:shadow-purple-900/50">
                
                <div class="absolute -top-20 -right-20 w-60 h-60 bg-purple-600/30 rounded-full blur-[80px] group-hover:bg-purple-500/40 transition-all duration-700"></div>
                <div class="absolute bottom-10 -left-10 w-40 h-40 bg-cyan-600/10 rounded-full blur-[60px]"></div>

                <div class="relative z-10 flex flex-col h-full">
                    <div class="flex justify-center mb-6">
                        <img src="{{ asset('images/TEPAT JURUSAN BARU 1.png') }}" class="h-12 w-auto object-contain brightness-0 invert drop-shadow-lg" alt="Logo">
                    </div>

                    <div class="text-center mb-6">
                        <h3 class="text-xl lg:text-2xl font-bold uppercase tracking-wider inline-flex items-center gap-2">
                            TUJUAN KAMI
                        </h3>
                        <div class="w-full h-px bg-gradient-to-r from-transparent via-cyan-400 to-transparent mt-4 opacity-50 group-hover:opacity-100 transition-opacity"></div>
                    </div>

                    <div class="text-xs lg:text-sm leading-relaxed text-white/90 text-center flex-grow space-y-4 font-light bg-white/5 backdrop-blur-sm rounded-2xl p-5 border border-white/5">
                        <p>
                            Setiap anak muda memiliki latar belakang pertumbuhan dan perkembangan yang berbeda, yang menghasilkan individu yang unik.
                        </p>
                        <p>
                            Tepat Jurusan bertujuan membangun karakter remaja agar mandiri dalam mengambil keputusan dan merencanakan pendidikan serta karier melalui edukasi psikologis.
                        </p>
                    </div>
                    
                    <div class="mt-6 pt-2 text-[10px] text-cyan-200/60 text-center uppercase tracking-[0.2em] font-medium">
                        ✦ Future Ready ✦
                    </div>
                </div>
            </div>

            <div class="group bg-[#1e1b4b] p-8 rounded-[2.5rem] shadow-2xl hover:-translate-y-3 transition-all duration-500 relative overflow-hidden flex flex-col h-full border border-white/10 hover:border-white/30 hover:shadow-cyan-900/50">
                
                <div class="absolute -bottom-20 -right-20 w-72 h-72 bg-cyan-600/20 rounded-full blur-[80px] group-hover:bg-cyan-500/30 transition-all duration-700"></div>
                <div class="absolute top-10 left-10 w-32 h-32 bg-purple-500/10 rounded-full blur-[50px]"></div>

                <div class="relative z-10 flex flex-col h-full">
                    <div class="flex justify-center mb-6">
                        <img src="{{ asset('images/TEPAT JURUSAN BARU 1.png') }}" class="h-12 w-auto object-contain brightness-0 invert drop-shadow-lg" alt="Logo">
                    </div>

                    <div class="text-center mb-6">
                        <h3 class="text-xl lg:text-2xl font-bold uppercase tracking-wider inline-flex items-center gap-2">
                            VISI & MISI
                        </h3>
                        <div class="w-full h-px bg-gradient-to-r from-transparent via-cyan-400 to-transparent mt-4 opacity-50 group-hover:opacity-100 transition-opacity"></div>
                    </div>

                    <div class="flex-grow bg-white/5 backdrop-blur-sm rounded-2xl p-5 border border-white/5">
                        <div class="grid grid-cols-2 gap-4 h-full relative">
                            
                            <div class="absolute inset-y-2 left-1/2 w-px bg-gradient-to-b from-transparent via-white/20 to-transparent -translate-x-1/2"></div>

                            <div class="text-center pr-2 flex flex-col">
                                <h4 class="text-base font-bold text-cyan-300 mb-3 tracking-widest">VISI</h4>
                                <p class="text-[10px] lg:text-xs leading-relaxed text-white/90 font-light">
                                    Menjadi pendamping remaja terpercaya dalam mengenali potensi, menentukan jurusan tepat, dan merancang masa depan dengan percaya diri.
                                </p>
                            </div>

                            <div class="pl-2 flex flex-col">
                                <h4 class="text-base font-bold text-cyan-300 mb-3 tracking-widest text-center">MISI</h4>
                                <ul class="text-[10px] lg:text-xs leading-relaxed text-white/90 space-y-1.5 font-light text-left list-disc ml-3 marker:text-cyan-500">
                                    <li>Edukasi psikologis.</li>
                                    <li>Konseling kelompok.</li>
                                    <li>Membangun karakter.</li>
                                    <li>Perencanaan karier.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-6 pt-2 text-[10px] text-cyan-200/60 text-center uppercase tracking-[0.2em] font-medium">
                        ✦ Clear Direction ✦
                    </div>
                </div>
            </div>

            <div class="group bg-[#1e1b4b] p-8 rounded-[2.5rem] shadow-2xl hover:-translate-y-3 transition-all duration-500 relative overflow-hidden flex flex-col h-full border border-white/10 hover:border-white/30 hover:shadow-pink-900/50">
                
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-pink-600/20 rounded-full blur-[90px] group-hover:bg-pink-500/30 transition-all duration-700"></div>

                <div class="relative z-10 flex flex-col h-full">
                    <div class="flex justify-center mb-6">
                        <img src="{{ asset('images/TEPAT JURUSAN BARU 1.png') }}" class="h-12 w-auto object-contain brightness-0 invert drop-shadow-lg" alt="Logo">
                    </div>

                    <div class="text-center mb-6">
                        <h3 class="text-xl lg:text-2xl font-bold uppercase tracking-wider inline-flex items-center gap-2">
                            LATAR BELAKANG
                        </h3>
                        <div class="w-full h-px bg-gradient-to-r from-transparent via-cyan-400 to-transparent mt-4 opacity-50 group-hover:opacity-100 transition-opacity"></div>
                    </div>

                    <div class="text-xs lg:text-sm leading-relaxed text-white/90 text-center flex-grow space-y-4 font-light bg-white/5 backdrop-blur-sm rounded-2xl p-5 border border-white/5">
                        <p>
                            Setiap remaja tumbuh dengan latar belakang unik. Lingkungan, keluarga, dan media berperan besar dalam membentuk karakter mereka.
                        </p>
                        <p class="font-medium text-cyan-100">
                            Kami menghadirkan Tepat Jurusan untuk membantu remaja lebih mandiri dalam mengambil keputusan di tengah tantangan zaman yang terus berubah.
                        </p>
                    </div>
                    
                    <div class="mt-6 pt-2 text-[10px] text-cyan-200/60 text-center uppercase tracking-[0.2em] font-medium">
                        ✦ Self Discovery ✦
                    </div>
                </div>
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
                <article class="group h-full">
                    
                    <a href="{{ route('articles.show', $article->slug) }}" class="flex flex-col h-full">
                        
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
                    </a>

                </article>
            @empty
                <div class="col-span-3 text-center py-10 text-gray-400">
                    Belum ada berita terbaru.
                </div>
            @endforelse

        </div>
    </div>
</section>

<section class="relative w-full h-screen overflow-hidden bg-gray-900">

    <video
        class="absolute top-0 left-0 w-full h-full object-cover pointer-events-none z-0"
        autoplay muted loop playsinline
        poster="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?q=80&w=1920&auto=format&fit=crop">
        <source src="{{ asset('videos/campus.mp4') }}" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    
    <div class="absolute inset-0 bg-black/40 z-10"></div>
    <div class="absolute top-0 left-0 w-full z-20 pt-6 md:pt-6 overflow-hidden pointer-events-none">
        
        <div class="animate-marquee-text whitespace-nowrap">
            
            <div class="flex items-center">
                <h2 class="text-[12vw] font-black uppercase leading-none text-transparent [-webkit-text-stroke:1px_rgba(255,255,255,0.4)] px-4">
                    Latest Events &nbsp;
                </h2>
                <h2 class="text-[12vw] font-black uppercase leading-none text-transparent [-webkit-text-stroke:1px_rgba(255,255,255,0.4)] px-4">
                    Latest Events &nbsp;
                </h2>
                <h2 class="text-[12vw] font-black uppercase leading-none text-transparent [-webkit-text-stroke:1px_rgba(255,255,255,0.4)] px-4">
                    Latest Events &nbsp;
                </h2>
            </div>

            <div class="flex items-center">
                <h2 class="text-[12vw] font-black uppercase leading-none text-transparent [-webkit-text-stroke:1px_rgba(255,255,255,0.4)] px-4">
                    Latest Events &nbsp;
                </h2>
                <h2 class="text-[12vw] font-black uppercase leading-none text-transparent [-webkit-text-stroke:1px_rgba(255,255,255,0.4)] px-4">
                    Latest Events &nbsp;
                </h2>
                <h2 class="text-[12vw] font-black uppercase leading-none text-transparent [-webkit-text-stroke:1px_rgba(255,255,255,0.4)] px-4">
                    Latest Events &nbsp;
                </h2>
            </div>

        </div>

    </div>

</section>

    <section class="w-full py-20 lg:py-28 bg-white relative overflow-hidden">
    
    <div class="absolute top-0 left-0 w-64 h-64 bg-red-50 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2 opacity-60 pointer-events-none"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-50 rounded-full blur-3xl translate-x-1/3 translate-y-1/3 opacity-60 pointer-events-none"></div>

    <div class="container mx-auto px-6 text-center relative z-10 max-w-4xl">
        
        <div class="flex justify-center mb-8">
            <div class="p-4 bg-purple-50 rounded-2xl text-purple-600 shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                </svg>
            </div>
        </div>

        <span class="inline-block py-1.5 px-4 rounded-full bg-gray-50 text-gray-600 text-[10px] md:text-xs font-bold tracking-[0.2em] uppercase mb-8 border border-gray-100">
            The Reality
        </span>

        <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight mb-8">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-purple-600">87% Mahasiswa</span> <br class="hidden md:block">
            Indonesia Salah Memilih Jurusan.
        </h2>

        <div class="prose prose-lg mx-auto text-gray-500 leading-relaxed space-y-6 mb-16">
            <p>
                Tepat Jurusan merupakan platform konsultan pendidikan dan penyelenggara event yang berfokus memecahkan masalah krusial di Indonesia: 
                <strong class="text-gray-800 font-semibold bg-red-50 px-1">87% mahasiswa merasa salah jurusan.</strong>
            </p>
            <p>
                Dengan semangat membantu remaja Indonesia menghadapi tantangan zaman, Kami hadir untuk memberikan visi yang jelas bagi siswa SMA dalam memilih pendidikan tinggi melalui pendekatan berbasis data psikologis dan pengalaman nyata sebagai bekal dalam pengambilan keputusan studi pelajar di Indonesia.
            </p>
        </div>

        <div class="inline-flex flex-col items-center relative">
            <div class="w-12 h-1 bg-purple-600 rounded-full mb-6"></div>
            
            <div class="text-center">
                <h4 class="text-2xl font-bold text-gray-900 mb-1">Guntur, I.</h4>
                <p class="text-sm font-medium text-gray-400 italic mb-2">Integrity Development Flexibility</p>
                <span class="inline-block bg-purple-100 text-purple-700 text-xs font-bold px-3 py-1 rounded-md uppercase tracking-wide">
                    Educational Psychologist
                </span>
            </div>
        </div>

    </div>
</section>

    <section class="w-full px-6 relative z-20 -mb-32 md:-mb-48 mt-24">
        <div class="container mx-auto max-w-5xl bg-white rounded-xl shadow-2xl overflow-hidden flex flex-col md:flex-row text-gray-800">
            
            <div class="w-full md:w-1/2 h-64 md:h-96 relative">
                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=800&auto=format&fit=crop" 
                     alt="Contact Us" 
                     class="absolute inset-0 w-full h-full object-cover">
            </div>

            <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center text-left"> Join Us!
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                    Pendaftaran <span class="text-rose-500">Peserta</span>
                </h3>
                <p class="text-gray-500 text-sm mb-8 leading-relaxed">
                    Pesan tiketmu sekarang untuk mengikuti berbagai rangkaian program kami, seat terbatas dengan promo menarik. Klik tautan di bawah ini untuk info lebih lanjut
                </p>
                <div>
                    <a href="{{ route('contact.index') }}" class="inline-block px-8 py-3 bg-rose-600 text-white font-bold text-sm rounded shadow-lg hover:bg-rose-700 transition-colors">
                        CONTACT US
                    </a>
                </div>
            </div>

        </div>
    </section>

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
</body>

</x-app-layout>