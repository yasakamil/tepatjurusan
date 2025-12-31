<x-app-layout>
    <div class="min-h-screen bg-gray-50 flex items-center justify-center p-4 lg:p-8 relative overflow-hidden">
        
        <div class="absolute top-0 left-0 w-96 h-96 bg-brand-purple/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
        <div class="absolute top-0 right-0 w-96 h-96 bg-teal-300/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-32 left-20 w-96 h-96 bg-pink-300/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-4000"></div>

        <div class="bg-white w-full max-w-6xl rounded-3xl shadow-2xl overflow-hidden flex flex-col lg:flex-row relative z-10">
            
            <div class="hidden lg:flex w-5/12 relative bg-gray-900 flex-col justify-between p-12 text-white">
                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=1600&auto=format&fit=crop" 
                     class="absolute inset-0 w-full h-full object-cover opacity-50" 
                     alt="Student Success">
                
                <div class="absolute inset-0 bg-gradient-to-br from-brand-purple/90 to-blue-900/80 mix-blend-multiply"></div>

                <div class="relative z-10">
                    <div class="flex items-center gap-2 mb-8">
                        <img src="{{ asset('images/TEPAT JURUSAN BARU 1.png') }}" class="h-8 w-auto brightness-0 invert" alt="Logo">
                    </div>
                    <h2 class="text-4xl font-extrabold leading-tight mb-4 tracking-tight">
                        Mulai Perjalanan Karirmu Disini.
                    </h2>
                    <p class="text-blue-100 text-lg font-light leading-relaxed">
                        Bergabunglah dengan komunitas pembelajar dan temukan jurusan yang paling tepat untuk masa depanmu.
                    </p>
                </div>

                <div class="relative z-10 mt-auto pt-8 border-t border-white/20">
                    <div class="flex items-center gap-4">
                        <div class="flex -space-x-2 overflow-hidden">
                            <img class="inline-block h-8 w-8 rounded-full ring-2 ring-brand-purple" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=64&h=64" alt=""/>
                            <img class="inline-block h-8 w-8 rounded-full ring-2 ring-brand-purple" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=64&h=64" alt=""/>
                            <img class="inline-block h-8 w-8 rounded-full ring-2 ring-brand-purple" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=64&h=64" alt=""/>
                        </div>
                        <p class="text-sm font-medium">Bergabung dengan 1,000+ Siswa</p>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-7/12 p-8 md:p-12 lg:p-16 bg-white relative">
                
                <div class="max-w-lg mx-auto">
                    <div class="mb-10">
                        <h3 class="text-2xl font-bold text-gray-900">Buat Akun Baru</h3>
                        <p class="text-gray-500 mt-2">Lengkapi data diri kamu untuk akses penuh.</p>
                    </div>

                    <form method="POST" action="{{ route('register') }}" class="space-y-5">
                        @csrf

                        <div class="space-y-1">
                            <label class="text-sm font-semibold text-gray-600 ml-1">Nama Lengkap</label>
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400 group-focus-within:text-brand-purple transition-colors" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                </div>
                                <input type="text" name="nama" value="{{ old('nama') }}" required placeholder="Contoh: Budi Santoso"
                                       class="block w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 placeholder-gray-400 focus:outline-none focus:bg-white focus:ring-2 focus:ring-brand-purple/50 focus:border-brand-purple transition-all duration-200">
                            </div>
                            @error('nama') <span class="text-red-500 text-xs ml-1">{{ $message }}</span> @enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div class="space-y-1">
                                <label class="text-sm font-semibold text-gray-600 ml-1">Email Address</label>
                                <div class="relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400 group-focus-within:text-brand-purple transition-colors" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                    </div>
                                    <input type="email" name="email" value="{{ old('email') }}" required placeholder="email@kamu.com"
                                           class="block w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 placeholder-gray-400 focus:outline-none focus:bg-white focus:ring-2 focus:ring-brand-purple/50 focus:border-brand-purple transition-all duration-200">
                                </div>
                                @error('email') <span class="text-red-500 text-xs ml-1">{{ $message }}</span> @enderror
                            </div>

                            <div class="space-y-1">
                                <label class="text-sm font-semibold text-gray-600 ml-1">WhatsApp / No. HP</label>
                                <div class="relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400 group-focus-within:text-brand-purple transition-colors" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                    </div>
                                    <input type="number" name="no_telfon" value="{{ old('no_telfon') }}" required placeholder="0812xxxx"
                                           class="block w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 placeholder-gray-400 focus:outline-none focus:bg-white focus:ring-2 focus:ring-brand-purple/50 focus:border-brand-purple transition-all duration-200">
                                </div>
                                @error('no_telfon') <span class="text-red-500 text-xs ml-1">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div class="space-y-1">
                                <label class="text-sm font-semibold text-gray-600 ml-1">Password</label>
                                <div class="relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400 group-focus-within:text-brand-purple transition-colors" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    </div>
                                    <input type="password" name="password" required placeholder="••••••••"
                                           class="block w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 placeholder-gray-400 focus:outline-none focus:bg-white focus:ring-2 focus:ring-brand-purple/50 focus:border-brand-purple transition-all duration-200">
                                </div>
                                @error('password') <span class="text-red-500 text-xs ml-1">{{ $message }}</span> @enderror
                            </div>

                            <div class="space-y-1">
                                <label class="text-sm font-semibold text-gray-600 ml-1">Confirm Password</label>
                                <div class="relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400 group-focus-within:text-brand-purple transition-colors" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                    </div>
                                    <input type="password" name="password_confirmation" required placeholder="••••••••"
                                           class="block w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 placeholder-gray-400 focus:outline-none focus:bg-white focus:ring-2 focus:ring-brand-purple/50 focus:border-brand-purple transition-all duration-200">
                                </div>
                            </div>
                        </div>

                        <div class="pt-4">
                            <button type="submit" class="w-full flex items-center justify-center py-4 px-6 border border-transparent rounded-xl shadow-lg shadow-brand-purple/20 text-base font-bold text-white bg-brand-purple hover:bg-purple-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-purple transition-all transform hover:-translate-y-1 active:scale-95 duration-200">
                                Buat Akun Sekarang
                                <svg class="ml-2 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </button>
                        </div>
                    </form>
                    <p class="mt-8 text-center text-sm text-gray-500">
                        Sudah punya akun? 
                        <a href="{{ route('login') }}" class="font-bold text-brand-purple hover:text-purple-800 hover:underline transition-all">
                            Login disini
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>