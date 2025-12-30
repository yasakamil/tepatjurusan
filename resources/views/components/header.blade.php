<header class="w-full sticky top-0 z-50 font-sans transition-all duration-300">
    
    <div class="hidden lg:block bg-brand-purple text-white text-xs py-2.5 relative z-20">
        <div class="container mx-auto px-6 lg:px-12 flex justify-between items-center">
            <span class="opacity-90 font-medium truncate">
                @if(Auth::guard('member')->check())
                    Welcome back, {{ Auth::guard('member')->user()->nama }}
                @else
                    Welcome to Tepat Jurusan Official Site
                @endif
            </span>
            <div class="flex gap-6 font-medium">
                <span class="hover:text-white/80 transition-colors cursor-pointer">+62 878-7727-3131</span>
                <span class="hover:text-white/80 transition-colors cursor-pointer">customersupport@tepatjurusan.com</span>
            </div>
        </div>
    </div>

    <nav class="bg-white/95 backdrop-blur-md shadow-sm border-b border-gray-100 relative z-10">
        <div class="container mx-auto px-4 sm:px-6 lg:px-12 h-16 md:h-20 flex justify-between items-center">
            
            <a href="/" class="flex-shrink-0 flex items-center gap-2">
                <img src="{{ asset('images/TEPAT JURUSAN HITAM 1.png') }}" 
                     alt="Logo Tepat Jurusan" 
                     class="h-8 md:h-10 w-auto object-contain">
            </a>

            <div class="hidden lg:flex items-center gap-8 font-bold text-sm uppercase tracking-wider text-gray-500">
                <a href="/" class="text-brand-purple transition-colors relative group">
                    Home.
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-brand-purple scale-x-100 transition-transform"></span>
                </a>
                <a href="#" class="hover:text-brand-purple transition-colors duration-300 relative group">
                    Events.
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-brand-purple scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                </a>
                <a href="#" class="hover:text-brand-purple transition-colors duration-300 relative group">
                    About Us.
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-brand-purple scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                </a>
                <a href="#" class="hover:text-brand-purple transition-colors duration-300 relative group">
                    Contact.
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-brand-purple scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                </a>
            </div>

            <div class="hidden lg:flex items-center gap-4">
                @if(Auth::guard('member')->check())
                    <span class="text-sm font-bold text-gray-700">
                        Hi, {{ Auth::guard('member')->user()->nama }}
                    </span>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="px-5 py-2.5 border border-red-200 text-red-500 font-bold text-sm rounded hover:bg-red-50 transition-all duration-300">
                            LOGOUT
                        </button>
                    </form>
                @else
                    <a href="{{ route('register') }}" class="px-7 py-2.5 bg-brand-teal text-white font-bold text-sm rounded shadow-md hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300">
                        SIGN UP
                    </a>
                    <a href="{{ route('login') }}" class="px-7 py-2.5 border border-gray-200 text-gray-500 font-bold text-sm rounded hover:border-brand-teal hover:text-brand-teal hover:bg-teal-50 transition-all duration-300">
                        SIGN IN
                    </a>
                @endif
            </div>

            <div class="flex lg:hidden items-center gap-2 sm:gap-4 text-gray-700">
                <button type="button" class="p-2 rounded-full hover:bg-gray-100 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </button>

                <button type="button" id="menu-toggle-btn" class="p-2 rounded-full hover:bg-gray-100 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>

        </div>
    </nav>

    <div id="offcanvas-menu" class="fixed inset-0 z-[60] hidden" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
        <div id="menu-backdrop" class="fixed inset-0 bg-black/30 backdrop-blur-sm transition-opacity opacity-0 duration-300 ease-in-out"></div>
        <div class="fixed inset-0 overflow-hidden">
            <div class="absolute inset-0 overflow-hidden">
                <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                    <div id="menu-panel" class="pointer-events-auto relative w-screen max-w-md transform translate-x-full transition-transform duration-300 ease-in-out bg-white shadow-2xl flex flex-col h-full">
                        
                        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
                            <h2 class="text-lg font-bold text-gray-900">Menu</h2>
                            <button type="button" id="menu-close-btn" class="rounded-full p-2 text-gray-400 hover:text-gray-500 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <div class="flex-1 overflow-y-auto py-6 px-6">
                            <nav class="flex flex-col space-y-6">
                                <a href="/" class="text-xl font-bold text-gray-900 hover:text-brand-purple">Home</a>
                                <a href="#" class="text-xl font-bold text-gray-900 hover:text-brand-purple">Events</a>
                                <a href="#" class="text-xl font-bold text-gray-900 hover:text-brand-purple">About Us</a>
                                <a href="#" class="text-xl font-bold text-gray-900 hover:text-brand-purple">Contact</a>
                                <hr class="border-gray-100 my-4">
                                
                                <div class="flex flex-col gap-4">
                                    @if(Auth::guard('member')->check())
                                        <div class="text-center font-bold text-gray-900 text-lg">
                                            Hi, {{ Auth::guard('member')->user()->nama }}
                                        </div>
                                        <form action="{{ route('logout') }}" method="POST" class="w-full">
                                            @csrf
                                            <button type="submit" class="w-full py-3 text-center text-red-500 border-2 border-red-200 font-bold rounded-lg hover:bg-red-50">
                                                Logout
                                            </button>
                                        </form>
                                    @else
                                        <a href="{{ route('login') }}" class="w-full py-3 text-center text-brand-purple border-2 border-brand-purple font-bold rounded-lg hover:bg-purple-50">
                                            Log In
                                        </a>
                                        <a href="{{ route('register') }}" class="w-full py-3 text-center bg-brand-teal text-white font-bold rounded-lg shadow-md hover:bg-teal-600">
                                            Sign Up Now
                                        </a>
                                    @endif
                                </div>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>