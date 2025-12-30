{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Us - Tepat Jurusan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-white">

    <div class="flex min-h-screen">
        
        <div class="hidden lg:flex lg:w-1/2 relative bg-gray-900 overflow-hidden">
            <img src="{{ asset('images/image 24.png') }}" 
                 class="absolute inset-0 w-full h-full object-cover opacity-60"
                 alt="Students">
            
            <div class="absolute inset-0 bg-gradient-to-t from-brand-purple/90 to-transparent"></div>

            <div class="relative z-10 p-16 flex flex-col justify-between h-full text-white">
                <div>
                    <img src="{{ asset('images/TEPAT JURUSAN BARU 1.png') }}" alt="Logo" class="h-10 w-auto brightness-0 invert">
                </div>
                <div>
                    <h2 class="text-4xl font-bold leading-tight mb-4">
                        "Your future is created by what you do today, not tomorrow."
                    </h2>
                    <p class="text-white/80 text-lg">Bergabunglah dengan ribuan siswa lainnya menemukan jurusan impian.</p>
                </div>
            </div>
        </div>

        <div class="w-full lg:w-1/2 flex items-center justify-center p-8 md:p-12 relative">
            <div class="absolute inset-0 opacity-[0.03] bg-[url('https://www.transparenttextures.com/patterns/graphy.png')] pointer-events-none"></div>

            <div class="w-full max-w-md space-y-8 relative z-10">
                <div class="text-center lg:text-left">
                    <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">Create Account</h2>
                    <p class="mt-2 text-sm text-gray-500">Mulai langkah pertamamu menuju masa depan cerah.</p>
                </div>

                <form class="mt-8 space-y-6" action="{{ route('register') }}" method="POST">
                    @csrf
                    
                    <div class="space-y-5">
                        <div>
                            <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Full Name</label>
                            <input type="text" name="name" required placeholder="John Doe"
                                class="w-full px-5 py-3 rounded-lg bg-gray-50 border border-gray-200 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-purple focus:bg-white transition-all font-medium">
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Email</label>
                                <input type="email" name="email" required placeholder="name@mail.com"
                                    class="w-full px-5 py-3 rounded-lg bg-gray-50 border border-gray-200 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-purple focus:bg-white transition-all font-medium">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">WhatsApp</label>
                                <input type="number" name="no_telfon" required placeholder="0812..."
                                    class="w-full px-5 py-3 rounded-lg bg-gray-50 border border-gray-200 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-purple focus:bg-white transition-all font-medium">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Password</label>
                            <input type="password" name="password" required placeholder="••••••••"
                                class="w-full px-5 py-3 rounded-lg bg-gray-50 border border-gray-200 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-purple focus:bg-white transition-all font-medium">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Confirm Password</label>
                            <input type="password" name="password_confirmation" required placeholder="••••••••"
                                class="w-full px-5 py-3 rounded-lg bg-gray-50 border border-gray-200 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-purple focus:bg-white transition-all font-medium">
                        </div>
                    </div>

                    <button type="submit" 
                        class="w-full flex justify-center py-4 px-4 border border-transparent rounded-lg shadow-xl text-sm font-bold text-white bg-brand-purple hover:bg-purple-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-purple transition-all transform hover:-translate-y-0.5">
                        Create Account
                    </button>

                    <p class="mt-4 text-center text-sm text-gray-500">
                        Sudah punya akun? 
                        <a href="{{ route('login') }}" class="font-bold text-brand-purple hover:text-purple-800 transition">Log in disini</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>
</html> --}}

<form method="POST" action="{{ route('register') }}">
    @csrf
    <input type="text" name="nama" placeholder="Nama" value="{{ old('nama') }}" required>
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
    <input type="text" name="no_telfon" placeholder="No Telepon" value="{{ old('no_telfon') }}" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>
    <button type="submit">Register</button>
</form>
