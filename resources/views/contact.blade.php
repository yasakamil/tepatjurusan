<x-app-layout>
    
    <div class="min-h-screen bg-white flex items-center justify-center p-4 md:p-8">

        <div class="w-full max-w-6xl rounded-[3rem] shadow-2xl overflow-hidden relative bg-cover bg-center flex flex-col md:flex-row"
             style="background-image: url('{{ asset('images/bgcontact.png') }}'); min-height: 600px;">
            
            <div class="absolute inset-0 bg-brand-purple/20 mix-blend-multiply pointer-events-none"></div>

            <div class="relative z-10 w-full flex flex-col md:flex-row p-8 md:p-16 lg:p-20 gap-12 items-center">

                <div class="w-full md:w-1/2 text-white">
                    <h1 class="text-5xl md:text-6xl font-bold mb-6 tracking-tight">
                        Get In Touch
                    </h1>
                    
                    <p class="text-white/90 text-sm md:text-base leading-relaxed mb-8 font-light max-w-md">
                        We'd love to hear from you! Whether you have questions about our programs, need guidance, or simply want to explore opportunities.
                    </p>

                    <div class="flex gap-4 mb-8">
                        <a href="#" class="border border-white/40 p-2 rounded-lg hover:bg-white hover:text-brand-purple transition"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
                        <a href="#" class="border border-white/40 p-2 rounded-lg hover:bg-white hover:text-brand-purple transition"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg></a>
                        <a href="#" class="border border-white/40 p-2 rounded-lg hover:bg-white hover:text-brand-purple transition"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
                    </div>

                    <div class="pt-8 border-t border-white/20 text-xs md:text-sm text-white/70 space-y-1">
                        <p>Tepat Jurusan, Bintaro Sektor 2</p>
                        <p>+62 878-7727-3131</p>
                        <p>support@tepatjurusan.com</p>
                    </div>
                </div>

                <div class="w-full md:w-1/2 flex justify-center md:justify-end">
                    
                    <div class="bg-white/80 backdrop-blur-md rounded-[2rem] p-8 w-full max-w-md shadow-lg border border-white/50">
                        
                        @if(session('success'))
                            <div class="mb-4 text-xs font-bold text-green-600 bg-green-100 px-3 py-2 rounded-lg">
                                ✅ {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                            @csrf
                            
                            <div>
                                <input type="text" name="first_name" placeholder="Your name" 
                                    class="w-full px-4 py-3 bg-white/50 border border-gray-200 rounded-xl text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-purple/30 focus:bg-white transition"
                                    value="{{ old('first_name') }}">
                                @error('first_name') <span class="text-red-500 text-[10px]">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <input type="email" name="email" placeholder="Your email" 
                                    class="w-full px-4 py-3 bg-white/50 border border-gray-200 rounded-xl text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-purple/30 focus:bg-white transition"
                                    value="{{ old('email') }}">
                                @error('email') <span class="text-red-500 text-[10px]">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <input type="text" name="subject" placeholder="Subject" 
                                    class="w-full px-4 py-3 bg-white/50 border border-gray-200 rounded-xl text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-purple/30 focus:bg-white transition"
                                    value="{{ old('subject') }}">
                                @error('subject') <span class="text-red-500 text-[10px]">{{ $message }}</span> @enderror
                            </div>

                            <input type="hidden" name="last_name" value="-">

                            <div>
                                <textarea name="message" rows="4" placeholder="Your message..." 
                                    class="w-full px-4 py-3 bg-white/50 border border-gray-200 rounded-xl text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-purple/30 focus:bg-white transition resize-none">{{ old('message') }}</textarea>
                                @error('message') <span class="text-red-500 text-[10px]">{{ $message }}</span> @enderror
                            </div>

                            <button type="submit" class="w-full py-3 bg-brand-teal text-white font-bold rounded-full shadow-md hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300">
                                Submit
                            </button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>