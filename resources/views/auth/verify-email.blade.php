<x-app-layout>
    <div class="min-h-screen bg-gray-50 flex items-center justify-center p-4 relative overflow-hidden">
        
        <div class="absolute top-0 left-0 w-96 h-96 bg-indigo-500/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
        <div class="absolute top-0 right-0 w-96 h-96 bg-purple-500/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-32 left-20 w-96 h-96 bg-pink-500/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-4000"></div>

        <div class="bg-white/80 backdrop-blur-xl w-full max-w-lg rounded-[2.5rem] shadow-2xl p-8 md:p-12 relative z-10 border border-white/50 text-center">
            
            <div class="mb-8 flex justify-center">
                <div class="relative w-24 h-24 flex items-center justify-center bg-indigo-50 rounded-full">
                    <svg class="w-12 h-12 text-indigo-600 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <span class="absolute top-0 right-0 flex h-6 w-6">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-6 w-6 bg-red-500 border-4 border-white"></span>
                    </span>
                </div>
            </div>

            <h2 class="text-3xl font-extrabold text-gray-900 mb-3 tracking-tight">
                Cek Inbox Kamu! 📧
            </h2>
            
            <p class="text-gray-500 mb-8 leading-relaxed font-light">
                Terima kasih sudah mendaftar di <strong>Tepat Jurusan</strong>! <br>
                Kami telah mengirimkan link verifikasi ke email: <br>
                <span class="font-semibold text-indigo-600 bg-indigo-50 px-3 py-1 rounded-lg mt-2 inline-block">
                    {{ auth()->user()->email }}
                </span>
                <br>Silakan klik link tersebut untuk mengaktifkan akunmu.
            </p>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-8 p-4 bg-green-50 border border-green-200 rounded-2xl flex items-start gap-3 text-left animate-fade-in-up">
                    <svg class="w-6 h-6 text-green-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <div>
                        <h4 class="font-bold text-green-700 text-sm">Link Baru Terkirim!</h4>
                        <p class="text-sm text-green-600 mt-1">Cek inbox atau folder Spam kamu sekarang ya.</p>
                    </div>
                </div>
            @endif

            <div class="space-y-4">
                
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="w-full py-4 bg-indigo-600 text-white font-bold rounded-2xl shadow-lg shadow-indigo-200 hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-300 flex items-center justify-center gap-2">
                        <span>Kirim Ulang Verifikasi</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                    </button>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm text-gray-400 hover:text-gray-800 font-medium transition-colors border-b border-transparent hover:border-gray-800 pb-0.5">
                        Salah email? Logout & Ganti Akun
                    </button>
                </form>

            </div>

        </div>
        
        <div class="absolute bottom-6 text-center w-full text-xs text-gray-400">
            &copy; {{ date('Y') }} Tepat Jurusan. All rights reserved.
        </div>

    </div>
    
    <style>
        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
        .animate-blob {
            animation: blob 7s infinite;
        }
        .animation-delay-2000 {
            animation-delay: 2s;
        }
        .animation-delay-4000 {
            animation-delay: 4s;
        }
    </style>
</x-app-layout>