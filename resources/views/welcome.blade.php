<x-app-layout>
    <section class="relative min-h-[90vh] flex items-center overflow-hidden font-sans">
        
        <div class="absolute inset-0 z-0 grid grid-cols-1 lg:grid-cols-2">
            <div class="bg-bg-left h-full w-full relative overflow-hidden">
                <div class="absolute top-20 left-0 opacity-30 pointer-events-none">
                     <svg width="400" height="400" viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M50 250 L250 50 L450 250" stroke="#D6BCFA" stroke-width="40" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                        <path d="M50 350 L250 150 L450 350" stroke="#D6BCFA" stroke-width="40" stroke-linecap="round" stroke-linejoin="round" fill="none" style="transform: translateY(60px);"/>
                     </svg>
                </div>
            </div> 

            <div class="bg-bg-right h-full w-full relative">
                 <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[450px] h-[450px] bg-white rounded-full opacity-100 shadow-sm z-0"></div>
            </div>
        </div>

        <div class="container mx-auto px-6 lg:px-16 relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-4 items-center h-full">
            
            <div class="pt-20 lg:pt-0 lg:pr-10">
                
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-purple-200 bg-white/80 backdrop-blur-sm shadow-sm mb-8">
                    <span class="w-2 h-2 rounded-full bg-brand-purple animate-pulse"></span>
                    <span class="text-[10px] md:text-xs font-bold text-brand-purple/80 uppercase tracking-widest underline decoration-brand-purple/30 underline-offset-4">
                        Meet with the #01 Course in Indonesia
                    </span>
                </div>

                <h1 class="text-5xl lg:text-[4rem] xl:text-[5rem] font-extrabold leading-[1.1] text-gray-900 mb-8 tracking-tight">
                    Most reputed <br>
                    educational <span class="text-brand-purple">bootcamp</span> <br>
                    in Indonesia
                </h1>

                <a href="#" class="inline-block px-10 py-4 bg-brand-teal text-white font-bold text-sm rounded shadow-lg shadow-brand-teal/30 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 mb-20">
                    SIGN UP NOW
                </a>

                <div>
                    <div class="flex flex-wrap items-center gap-6 opacity-80">
                        <img src="{{ asset('images/logoipsum.svg') }}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'" alt="Logoipsum" class="h-8 grayscale hover:grayscale-0 transition">
                        
                        <div class="hidden flex items-center gap-2 font-bold text-gray-400 text-xl">
                            <span class="flex items-center gap-1"><div class="w-6 h-6 rounded-full border-4 border-orange-500"></div> Logoipsum</span>
                            <span class="flex items-center gap-1 ml-4"><div class="w-6 h-6 bg-blue-600 skew-x-12"></div> L</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative flex justify-center items-end h-full mt-10 lg:mt-0">
                <img src="{{ asset('images/image 23.png') }}" 
                     alt="Happy Student" 
                     class="relative z-10 w-auto h-auto max-h-[85vh] object-contain object-bottom drop-shadow-xl">
            </div>
        </div>
    </section>
</x-app-layout>