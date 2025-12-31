<x-app-layout>
    <div class="min-h-screen bg-gray-50 flex items-center justify-center p-4 lg:p-8 relative overflow-hidden">
        
        <div class="absolute top-0 left-0 w-96 h-96 bg-brand-purple/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
        <div class="absolute top-0 right-0 w-96 h-96 bg-teal-300/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-32 left-20 w-96 h-96 bg-pink-300/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-4000"></div>

        <div class="bg-white w-full max-w-5xl rounded-3xl shadow-2xl overflow-hidden flex flex-col lg:flex-row relative z-10">
            
            <div class="hidden lg:flex w-5/12 relative bg-gray-900 flex-col justify-between p-12 text-white">
                <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?q=80&w=1600&auto=format&fit=crop" 
                     class="absolute inset-0 w-full h-full object-cover opacity-50" 
                     alt="University">
                
                <div class="absolute inset-0 bg-gradient-to-br from-brand-purple/90 to-gray-900/80 mix-blend-multiply"></div>

                <div class="relative z-10">
                    <div class="flex items-center gap-2 mb-8">
                        <img src="{{ asset('images/TEPAT JURUSAN BARU 1.png') }}" class="h-8 w-auto brightness-0 invert" alt="Logo">
                    </div>
                    <h2 class="text-4xl font-extrabold leading-tight mb-4 tracking-tight">
                        Welcome Back!
                    </h2>
                    <p class="text-blue-100 text-lg font-light leading-relaxed">
                        "Education is the passport to the future, for tomorrow belongs to those who prepare for it today."
                    </p>
                </div>

                <div class="relative z-10 mt-auto pt-8">
                    <div class="flex items-center gap-2 text-sm font-medium opacity-80">
                        <div class="w-8 h-1 bg-brand-teal rounded-full"></div>
                        <span>Official Student Portal</span>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-7/12 p-8 md:p-12 lg:p-16 bg-white relative flex items-center">
                
                <div class="w-full max-w-md mx-auto">
                    <div class="mb-10">
                        <h3 class="text-2xl font-bold text-gray-900">Sign In</h3>
                        <p class="text-gray-500 mt-2">Masuk untuk melanjutkan akses ke dashboard.</p>
                    </div>

                    @if($errors->any())
                        <div class="mb-6 bg-red-50 border-l-4 border-red-500 p-4 rounded-r-lg">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-red-700 font-medium">
                                        {{ $errors->first() }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}" class="space-y-6">
                        @csrf

                        <div class="space-y-1">
                            <label class="text-sm font-semibold text-gray-600 ml-1">Email Address</label>
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400 group-focus-within:text-brand-purple transition-colors" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                    </svg>
                                </div>
                                <input type="email" name="email" value="{{ old('email') }}" required placeholder="email@kamu.com"
                                       class="block w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 placeholder-gray-400 focus:outline-none focus:bg-white focus:ring-2 focus:ring-brand-purple/50 focus:border-brand-purple transition-all duration-200">
                            </div>
                        </div>

                        <div class="space-y-1">
                            <div class="flex items-center justify-between">
                                <label class="text-sm font-semibold text-gray-600 ml-1">Password</label>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-xs font-semibold text-brand-purple hover:text-purple-700">
                                        Lupa Password?
                                    </a>
                                @endif
                            </div>
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400 group-focus-within:text-brand-purple transition-colors" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </div>
                                <input type="password" name="password" required placeholder="••••••••"
                                       class="block w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 placeholder-gray-400 focus:outline-none focus:bg-white focus:ring-2 focus:ring-brand-purple/50 focus:border-brand-purple transition-all duration-200">
                            </div>
                        </div>

                        <div class="flex items-center">
                            <input id="remember_me" type="checkbox" name="remember" 
                                   class="h-4 w-4 text-brand-purple focus:ring-brand-purple border-gray-300 rounded cursor-pointer">
                            <label for="remember_me" class="ml-2 block text-sm text-gray-900 cursor-pointer select-none">
                                Ingat saya di perangkat ini
                            </label>
                        </div>

                        <button type="submit" class="w-full flex items-center justify-center py-4 px-6 border border-transparent rounded-xl shadow-lg shadow-brand-purple/20 text-base font-bold text-white bg-brand-purple hover:bg-purple-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-purple transition-all transform hover:-translate-y-1 active:scale-95 duration-200">
                            Masuk Sekarang
                            <svg class="ml-2 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                            </svg>
                        </button>
                    </form>
                    <p class="mt-8 text-center text-sm text-gray-500">
                        Belum punya akun? 
                        <a href="{{ route('register') }}" class="font-bold text-brand-purple hover:text-purple-800 hover:underline transition-all">
                            Daftar sekarang
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>