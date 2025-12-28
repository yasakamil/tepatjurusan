<x-app-layout>
    <section class="relative min-h-[90vh] flex items-center overflow-hidden font-sans">
        
        <div class="absolute inset-0 z-0 grid grid-cols-1 lg:grid-cols-2">
            <div class="bg-bg-left h-full w-full relative overflow-hidden">
                <div class="absolute inset-0 flex items-center justify-center opacity-10 pointer-events-none">
                     <img src="{{ asset('images/tepatjurusantransparan.png') }}" 
                          alt="Watermark" 
                          class="w-[80%] max-w-[600px] object-contain rotate-12">
                </div>
            </div> 
            <div class="bg-bg-right h-full w-full relative">
                 <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[300px] h-[300px] md:w-[450px] md:h-[450px] bg-white rounded-full opacity-100 shadow-sm z-0"></div>
            </div>
        </div>

        <div class="w-full max-w-[1318px] mx-auto px-6 md:px-8 lg:px-12 relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-4 items-center h-full">
            
            <div class="pt-24 lg:pt-0 relative z-20 text-center lg:text-left"> 
                
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-purple-200 bg-white/80 backdrop-blur-sm shadow-sm mb-6 lg:mb-8 mx-auto lg:mx-0">
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

                <div class="w-full max-w-md lg:max-w-full overflow-hidden relative">
    
    <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-4 text-center lg:text-left">
        Trusted Partners
    </p>

    <div class="flex flex-nowrap relative [mask-image:_linear-gradient(to_right,transparent_0,_black_20px,_black_calc(100%-20px),transparent_100%)]">
        
        <ul class="flex items-center justify-center md:justify-start [&_li]:mx-6 [&_img]:max-w-none animate-infinite-scroll">
            <li>
                <div class="flex items-center gap-2 font-bold text-gray-400 text-lg">
                    <div class="w-8 h-8 rounded-full border-4 border-orange-500"></div> LogoA
                </div>
            </li>
            <li>
                <div class="flex items-center gap-2 font-bold text-gray-400 text-lg">
                    <div class="w-8 h-8 bg-blue-600 skew-x-12"></div> CompanyB
                </div>
            </li>
            <li>
                <div class="flex items-center gap-2 font-bold text-gray-400 text-lg">
                    <div class="w-8 h-8 rounded-full bg-green-500 border-t-4 border-white"></div> StartupC
                </div>
            </li>
            <li>
                <div class="flex items-center gap-2 font-bold text-gray-400 text-lg">
                    <div class="w-8 h-8 bg-brand-purple rounded-lg rotate-45"></div> TechD
                </div>
            </li>
        </ul>

        <ul class="flex items-center justify-center md:justify-start [&_li]:mx-6 [&_img]:max-w-none animate-infinite-scroll" aria-hidden="true">
            <li>
                <div class="flex items-center gap-2 font-bold text-gray-400 text-lg">
                    <div class="w-8 h-8 rounded-full border-4 border-orange-500"></div> LogoA
                </div>
            </li>
            <li>
                <div class="flex items-center gap-2 font-bold text-gray-400 text-lg">
                    <div class="w-8 h-8 bg-blue-600 skew-x-12"></div> CompanyB
                </div>
            </li>
            <li>
                <div class="flex items-center gap-2 font-bold text-gray-400 text-lg">
                    <div class="w-8 h-8 rounded-full bg-green-500 border-t-4 border-white"></div> StartupC
                </div>
            </li>
            <li>
                <div class="flex items-center gap-2 font-bold text-gray-400 text-lg">
                    <div class="w-8 h-8 bg-brand-purple rounded-lg rotate-45"></div> TechD
                </div>
            </li>
        </ul>
    </div>
</div>
            </div>

            <div class="relative flex justify-center items-end h-full mt-8 lg:mt-0">
                <img src="{{ asset('images/image 23.png') }}" 
                     alt="Happy Student" 
                     class="relative z-10 w-auto h-auto max-h-[50vh] md:max-h-[60vh] lg:max-h-[85vh] 2xl:max-h-[92vh] object-contain object-bottom drop-shadow-2xl scale-100 lg:scale-105 origin-bottom">
            </div>
        </div>
    </section>
</x-app-layout>