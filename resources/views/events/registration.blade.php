<x-app-layout>
    <div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        
        <div class="max-w-5xl mx-auto">
            
            <div class="text-center mb-10">
                <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">
                    Formulir Pendaftaran
                </h2>
                <p class="mt-4 text-lg text-gray-500">
                    Lengkapi data diri dan tentukan masa depanmu sekarang!
                </p>
            </div>

            <div class="bg-white rounded-[2.5rem] shadow-xl overflow-hidden border border-gray-100">
                
                <form action="{{ route('registration.store') }}" method="POST" class="p-8 md:p-12 space-y-10">
                    @csrf

                    <div>
                        <div class="flex items-center gap-3 mb-6 border-b border-gray-100 pb-4">
                            <span class="bg-brand-purple/10 text-brand-purple p-2 rounded-lg font-bold">01</span>
                            <h3 class="text-xl font-bold text-gray-800">Data Diri Peserta</h3>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="col-span-1 md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="w-full px-5 py-3 rounded-xl border border-gray-200 focus:border-brand-purple focus:ring-2 focus:ring-brand-purple/20 transition outline-none" placeholder="Sesuai KTP / Kartu Pelajar" required value="{{ old('nama_lengkap') }}">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="w-full px-5 py-3 rounded-xl border border-gray-200 focus:border-brand-purple focus:ring-2 focus:ring-brand-purple/20 transition outline-none" required value="{{ old('tempat_lahir') }}">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="w-full px-5 py-3 rounded-xl border border-gray-200 focus:border-brand-purple focus:ring-2 focus:ring-brand-purple/20 transition outline-none" required value="{{ old('tanggal_lahir') }}">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">No. HP / WhatsApp</label>
                                <input type="number" name="no_hp" class="w-full px-5 py-3 rounded-xl border border-gray-200 focus:border-brand-purple focus:ring-2 focus:ring-brand-purple/20 transition outline-none" placeholder="0812..." required value="{{ old('no_hp') }}">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Email Aktif</label>
                                <input type="email" name="email" class="w-full px-5 py-3 rounded-xl border border-gray-200 focus:border-brand-purple focus:ring-2 focus:ring-brand-purple/20 transition outline-none" placeholder="email@contoh.com" required value="{{ old('email') }}">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">No. HP Orang Tua</label>
                                <input type="number" name="no_hp_orangtua" class="w-full px-5 py-3 rounded-xl border border-gray-200 focus:border-brand-purple focus:ring-2 focus:ring-brand-purple/20 transition outline-none" placeholder="0812..." required value="{{ old('no_hp_orangtua') }}">
                            </div>
                            <div class="col-span-1 md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Alamat Domisili</label>
                                <textarea name="alamat_domisili" rows="3" class="w-full px-5 py-3 rounded-xl border border-gray-200 focus:border-brand-purple focus:ring-2 focus:ring-brand-purple/20 transition outline-none resize-none" placeholder="Alamat lengkap tempat tinggal saat ini" required>{{ old('alamat_domisili') }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center gap-3 mb-6 border-b border-gray-100 pb-4">
                            <span class="bg-brand-teal/10 text-brand-teal p-2 rounded-lg font-bold">02</span>
                            <h3 class="text-xl font-bold text-gray-800">Asal Sekolah</h3>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Nama Sekolah</label>
                                <input type="text" name="asal_sekolah" class="w-full px-5 py-3 rounded-xl border border-gray-200 focus:border-brand-purple focus:ring-2 focus:ring-brand-purple/20 transition outline-none" placeholder="SMA Negeri..." required value="{{ old('asal_sekolah') }}">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Kelas / Jenjang</label>
                                <select name="kelas_jenjang" class="w-full px-5 py-3 rounded-xl border border-gray-200 focus:border-brand-purple focus:ring-2 focus:ring-brand-purple/20 transition outline-none" required>
                                    <option value="" disabled selected>Pilih Jenjang</option>
                                    <option value="12 SMA/SMK">Kelas 12 SMA/SMK</option>
                                    <option value="Gap Year">Alumni / Gap Year</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center gap-3 mb-6 border-b border-gray-100 pb-4">
                            <span class="bg-yellow-100 text-yellow-600 p-2 rounded-lg font-bold">03</span>
                            <h3 class="text-xl font-bold text-gray-800">Rencana Studi (Pilihan Kampus)</h3>
                        </div>

                        <div class="space-y-6">
                            @for ($i = 1; $i <= 5; $i++)
                                <div class="bg-gray-50 p-6 rounded-2xl border border-gray-100">
                                    <h4 class="font-bold text-gray-700 mb-4 flex items-center gap-2">
                                        Pilihan {{ $i }} 
                                        @if($i == 1 || $i == 2 || $i == 3) <span class="text-xs bg-red-100 text-red-600 px-2 py-1 rounded-full ml-2">Wajib</span> @else <span class="text-xs text-gray-400 font-normal">(Opsional)</span> @endif
                                    </h4>
                                    
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <label class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-2">Universitas</label>
                                            <input type="text" name="universitas_{{ $i }}" 
                                                class="w-full px-5 py-3 rounded-xl border border-gray-200 focus:border-brand-purple focus:ring-2 focus:ring-brand-purple/20 transition outline-none bg-white" 
                                                placeholder="Nama Kampus"
                                                value="{{ old('universitas_'.$i) }}"
                                                {{ $i == 1 ? 'required' : '' }}>
                                        </div>
                                        <div>
                                            <label class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-2">Jurusan / Prodi</label>
                                            <input type="text" name="jurusan_{{ $i }}" 
                                                class="w-full px-5 py-3 rounded-xl border border-gray-200 focus:border-brand-purple focus:ring-2 focus:ring-brand-purple/20 transition outline-none bg-white" 
                                                placeholder="Nama Jurusan"
                                                value="{{ old('jurusan_'.$i) }}"
                                                {{ $i == 1 ? 'required' : '' }}>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <div class="pt-6">
                        <button type="submit" class="w-full py-5 bg-brand-purple text-white font-bold text-lg rounded-2xl shadow-xl shadow-brand-purple/30 hover:bg-purple-800 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                            Kirim Pendaftaran 🚀
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>