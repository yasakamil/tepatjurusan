<header class="w-full sticky top-0 z-50 font-sans transition-all duration-300">
    
    {{-- TOP BAR --}}
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

    {{-- MAIN NAVBAR --}}
    <nav class="bg-white/95 backdrop-blur-md shadow-sm border-b border-gray-100 relative z-10">
        <div class="container mx-auto px-4 sm:px-6 lg:px-6 xl:px-12 h-16 md:h-20 flex justify-between items-center">
            
            {{-- LOGO --}}
            <a href="/" class="flex-shrink-0 flex items-center gap-2">
                <img src="{{ asset('images/TEPAT JURUSAN HITAM 1.png') }}" 
                     alt="Logo Tepat Jurusan" 
                     class="h-8 md:h-10 w-auto object-contain">
            </a>

            {{-- DESKTOP MENU LINKS --}}
            <div class="hidden lg:flex items-center gap-5 xl:gap-8 font-bold text-xs xl:text-sm uppercase tracking-wider">
                
                <a href="/" 
                   class="{{ request()->is('/') || request()->routeIs('welcome') ? 'text-brand-purple' : 'text-gray-500 hover:text-brand-purple' }} transition-colors relative group">
                    Home.
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-brand-purple transition-transform {{ request()->is('/') || request()->routeIs('welcome') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100 origin-left' }}"></span>
                </a>

                <a href="{{ route('events.index') }}" 
                   class="{{ request()->routeIs('events.*') ? 'text-brand-purple' : 'text-gray-500 hover:text-brand-purple' }} transition-colors duration-300 relative group">
                    Events.
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-brand-purple transition-transform {{ request()->routeIs('events.*') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100 origin-left' }}"></span>
                </a>

                <a href="{{ route('articles.index') }}" 
                   class="{{ request()->routeIs('articles.*') ? 'text-brand-purple' : 'text-gray-500 hover:text-brand-purple' }} transition-colors duration-300 relative group">
                    Articles.
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-brand-purple transition-transform {{ request()->routeIs('articles.*') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100 origin-left' }}"></span>
                </a>

                <a href="{{ route('about.index') }}" 
                class="{{ request()->routeIs('about.*') ? 'text-brand-purple' : 'text-gray-500 hover:text-brand-purple' }} transition-colors duration-300 relative group">
                    About Us.
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-brand-purple transition-transform {{ request()->routeIs('about.*') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100 origin-left' }}"></span>
                </a>

                <a href="{{ route('contact.index') }}" 
                class="{{ request()->routeIs('contact.*') ? 'text-brand-purple' : 'text-gray-500 hover:text-brand-purple' }} transition-colors duration-300 relative group">
                    Contact.
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-brand-purple transition-transform {{ request()->routeIs('contact.*') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100 origin-left' }}"></span>
                </a>
            </div>

            {{-- DESKTOP RIGHT SIDE (PROFILE DROPDOWN) --}}
            <div class="hidden lg:flex items-center gap-3 xl:gap-4">
                @if(Auth::guard('member')->check())
                    
                    {{-- START: DROPDOWN PROFILE --}}
                    <div x-data="{ open: false }" class="relative">
                        
                        {{-- Trigger Button --}}
                        <button @click="open = !open" @click.away="open = false" class="flex items-center gap-3 focus:outline-none group">
                            <div class="text-right hidden xl:block">
                                <p class="text-xs font-bold text-gray-700 group-hover:text-brand-purple transition-colors">
                                    {{ Auth::guard('member')->user()->nama }}
                                </p>
                                <p class="text-[10px] text-gray-400 uppercase tracking-wider">Student</p>
                            </div>
                            
                            <div class="relative">
                                <img class="h-10 w-10 rounded-full object-cover border-2 border-transparent group-hover:border-brand-purple transition-all" 
                                     src="https://ui-avatars.com/api/?name={{ urlencode(Auth::guard('member')->user()->nama) }}&background=6B21A8&color=fff" 
                                     alt="{{ Auth::guard('member')->user()->nama }}">
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400 group-hover:text-brand-purple transition-transform duration-200" :class="{'rotate-180': open}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        {{-- Dropdown Content --}}
                        <div x-show="open" 
                             x-transition:enter="transition ease-out duration-100"
                             x-transition:enter-start="transform opacity-0 scale-95"
                             x-transition:enter-end="transform opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-75"
                             x-transition:leave-start="transform opacity-100 scale-100"
                             x-transition:leave-end="transform opacity-0 scale-95"
                             class="absolute right-0 mt-3 w-56 bg-white rounded-xl shadow-xl border border-gray-100 py-2 z-50 origin-top-right"
                             style="display: none;">
                            
                            <div class="px-4 py-3 border-b border-gray-50 mb-1">
                                <p class="text-xs text-gray-500">Signed in as</p>
                                <p class="text-sm font-bold text-gray-900 truncate">{{ Auth::guard('member')->user()->email }}</p>
                            </div>

                            <a href="{{ route('profile.index') }}" class="flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-brand-purple/5 hover:text-brand-purple transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                                Edit Profile
                            </a>

                            <div class="border-t border-gray-50 my-1"></div>

                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="w-full flex items-center gap-3 px-4 py-2.5 text-sm text-red-600 hover:bg-red-50 transition-colors text-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                    </svg>
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                    {{-- END: DROPDOWN PROFILE --}}

                @else
                    <a href="{{ route('register') }}" class="px-5 py-2 xl:px-7 xl:py-2.5 bg-brand-teal text-white font-bold text-xs xl:text-sm rounded shadow-md hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300 whitespace-nowrap">
                        SIGN UP
                    </a>
                    <a href="{{ route('login') }}" class="px-5 py-2 xl:px-7 xl:py-2.5 border border-gray-200 text-gray-500 font-bold text-xs xl:text-sm rounded hover:border-brand-teal hover:text-brand-teal hover:bg-teal-50 transition-all duration-300 whitespace-nowrap">
                        SIGN IN
                    </a>
                @endif
            </div>

            {{-- MOBILE TOGGLE BUTTON --}}
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

    {{-- OFFCANVAS MENU (MOBILE) --}}
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
                                <a href="/" class="text-xl font-bold {{ request()->is('/') || request()->routeIs('welcome') ? 'text-brand-purple' : 'text-gray-900 hover:text-brand-purple' }}">
                                    Home
                                </a>
                                
                                <a href="{{ route('events.index') }}" class="text-xl font-bold {{ request()->routeIs('events.*') ? 'text-brand-purple' : 'text-gray-900 hover:text-brand-purple' }}">
                                    Events
                                </a>

                                <a href="{{ route('articles.index') }}" class="text-xl font-bold {{ request()->routeIs('articles.*') ? 'text-brand-purple' : 'text-gray-900 hover:text-brand-purple' }}">
                                    Articles
                                </a>

                                <a href="{{ route('about.index') }}" class="text-xl font-bold {{ request()->routeIs('about.*') ? 'text-brand-purple' : 'text-gray-900 hover:text-brand-purple' }}">
                                    About Us
                                </a>
                                
                                <a href="{{ route('contact.index') }}" class="text-xl font-bold {{ request()->routeIs('contact.*') ? 'text-brand-purple' : 'text-gray-900 hover:text-brand-purple' }}">
                                    Contact Us
                                </a>

                                <hr class="border-gray-100 my-4">
                                
                                <div class="flex flex-col gap-4">
                                    @if(Auth::guard('member')->check())
                                        <div class="text-center font-bold text-gray-900 text-lg">
                                            Hi, {{ Auth::guard('member')->user()->nama }}
                                        </div>
                                        
                                        {{-- ADDED: Profile Link for Mobile --}}
                                        <a href="{{ route('profile.index') }}" class="w-full py-3 text-center text-gray-700 bg-gray-50 border border-gray-200 font-bold rounded-lg hover:bg-gray-100">
                                            My Profile
                                        </a>

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