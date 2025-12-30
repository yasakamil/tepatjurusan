<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Tepat Jurusan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-white">

    <div class="flex min-h-screen flex-row-reverse"> 
        <div class="hidden lg:flex lg:w-1/2 relative bg-gray-900 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?q=80&w=1600&auto=format&fit=crop" 
                 class="absolute inset-0 w-full h-full object-cover opacity-60"
                 alt="University">
            <div class="absolute inset-0 bg-gradient-to-b from-brand-teal/80 to-brand-purple/90 mix-blend-multiply"></div>
            
            <div class="relative z-10 p-16 flex flex-col justify-center h-full text-center text-white">
                <h2 class="text-4xl font-extrabold mb-4">Welcome Back!</h2>
                <p class="text-lg opacity-90 max-w-md mx-auto">
                    "Education is the passport to the future, for tomorrow belongs to those who prepare for it today."
                </p>
            </div>
        </div>

        <div class="w-full lg:w-1/2 flex items-center justify-center p-8 md:p-12 relative">
            <div class="absolute inset-0 opacity-[0.03] bg-[url('https://www.transparenttextures.com/patterns/graphy.png')] pointer-events-none"></div>

            <div class="w-full max-w-md space-y-8 relative z-10">
                <div class="text-center lg:text-left">
                    <img src="{{ asset('images/TEPAT JURUSAN HITAM 1.png') }}" alt="Logo" class="h-10 w-auto mb-6 mx-auto lg:mx-0">
                    <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">Sign in to Account</h2>
                    <p class="mt-2 text-sm text-gray-500">Masuk untuk melanjutkan akses ke platform.</p>
                </div>

                <form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
                    @csrf

                    @if($errors->any())
                        <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 text-sm rounded" role="alert">
                            <p class="font-bold">Oops!</p>
                            <p>{{ $errors->first() }}</p>
                        </div>
                    @endif
                    
                    <div class="space-y-5">
                        <div>
                            <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Email Address</label>
                            <input type="email" name="email" required placeholder="name@mail.com" value="{{ old('email') }}"
                                class="w-full px-5 py-3 rounded-lg bg-gray-50 border border-gray-200 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-purple focus:bg-white transition-all font-medium">
                        </div>

                        <div>
                            <div class="flex items-center justify-between mb-2">
                                <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider">Password</label>
                                <a href="#" class="text-xs text-brand-purple font-semibold hover:underline">Lupa password?</a>
                            </div>
                            <input type="password" name="password" required placeholder="••••••••"
                                class="w-full px-5 py-3 rounded-lg bg-gray-50 border border-gray-200 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-purple focus:bg-white transition-all font-medium">
                        </div>
                    </div>

                    <button type="submit" 
                        class="w-full flex justify-center py-4 px-4 border border-transparent rounded-lg shadow-xl text-sm font-bold text-white bg-gray-900 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 transition-all transform hover:-translate-y-0.5">
                        Sign In
                    </button>

                    <p class="mt-4 text-center text-sm text-gray-500">
                        Belum punya akun? 
                        <a href="{{ route('register') }}" class="font-bold text-brand-purple hover:text-purple-800 transition">Daftar sekarang</a>
                    </p>
                </form>
            </div>
        </div>
    </div>

</body>
</html>