<x-app-layout>
    <div x-data="{ activeTab: 'general' }" class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            
            {{-- SIDEBAR MENU --}}
            <div class="col-span-1">
                <nav class="space-y-1">
                    {{-- Tab: General (Edit Data Pendaftaran) --}}
                    <button @click="activeTab = 'general'" 
                        :class="activeTab === 'general' ? 'bg-gray-100 text-gray-900 font-bold' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 font-medium'"
                        class="w-full text-left px-3 py-2 text-sm rounded-md transition-colors">
                        General Data
                    </button>

                    {{-- Tab: Sign Out --}}
                    <button @click="activeTab = 'signout'" 
                        :class="activeTab === 'signout' ? 'bg-gray-100 text-gray-900 font-bold' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 font-medium'"
                        class="w-full text-left px-3 py-2 text-sm rounded-md transition-colors">
                        Sign Out
                    </button>
                </nav>
            </div>

            {{-- CONTENT AREA --}}
            <div class="col-span-3 bg-white shadow-sm sm:rounded-lg p-8 min-h-[500px]">
                
                {{-- HEADER --}}
                <div class="flex items-center mb-10">
                    <img class="h-16 w-16 rounded-full object-cover border border-gray-100" 
                         src="https://ui-avatars.com/api/?name={{ urlencode($account->nama) }}&background=random" 
                         alt="{{ $account->nama }}">
                    <div class="ml-4">
                        <div class="flex items-center gap-2">
                            <h2 class="text-xl font-bold text-gray-900">{{ $account->nama }}</h2>
                            <span class="text-gray-400">/</span>
                            <span class="text-xl font-medium text-gray-600">Student</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Manage your registration data and account settings</p>
                    </div>
                </div>

                {{-- ALERT SUCCESS --}}
                @if (session('success'))
                    <div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                {{-- ================= TAB: GENERAL (FORM PENDAFTARAN) ================= --}}
                <div x-show="activeTab === 'general'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
                    
                    <h3 class="text-lg font-bold text-gray-900 mb-6 border-b pb-2">Edit Data Pendaftaran</h3>

                    <form action="{{ route('profile.update-registration') }}" method="POST" class="space-y-8">
                        @csrf
                        @method('PUT')

                        {{-- SECTION 1: DATA DIRI --}}
                        <div>
                            <div class="flex items-center gap-3 mb-4">
                                <span class="bg-brand-purple/10 text-brand-purple px-2 py-1 rounded text-xs font-bold">01</span>
                                <h4 class="font-bold text-gray-700">Data Diri Peserta</h4>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="col-span-1 md:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-brand-purple focus:border-brand-purple transition" 
                                           value="{{ old('nama_lengkap', $registration->nama_lengkap ?? $account->nama) }}" required>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-brand-purple focus:border-brand-purple transition" 
                                           value="{{ old('tempat_lahir', $registration->tempat_lahir ?? '') }}" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-brand-purple focus:border-brand-purple transition" 
                                           value="{{ old('tanggal_lahir', $registration->tanggal_lahir ?? '') }}" required>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">No. HP / WhatsApp</label>
                                    <input type="number" name="no_hp" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-brand-purple focus:border-brand-purple transition" 
                                           value="{{ old('no_hp', $registration->no_hp ?? $account->no_telfon) }}" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Email Aktif</label>
                                    <input type="email" name="email" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-brand-purple focus:border-brand-purple transition" 
                                           value="{{ old('email', $registration->email ?? $account->email) }}" required>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">No. HP Orang Tua</label>
                                    <input type="number" name="no_hp_orangtua" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-brand-purple focus:border-brand-purple transition" 
                                           value="{{ old('no_hp_orangtua', $registration->no_hp_orangtua ?? '') }}" required>
                                </div>
                                <div class="col-span-1 md:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Alamat Domisili</label>
                                    <textarea name="alamat_domisili" rows="3" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-brand-purple focus:border-brand-purple transition resize-none" required>{{ old('alamat_domisili', $registration->alamat_domisili ?? '') }}</textarea>
                                </div>
                            </div>
                        </div>

                        {{-- SECTION 2: ASAL SEKOLAH --}}
                        <div>
                            <div class="flex items-center gap-3 mb-4">
                                <span class="bg-brand-teal/10 text-brand-teal px-2 py-1 rounded text-xs font-bold">02</span>
                                <h4 class="font-bold text-gray-700">Asal Sekolah</h4>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Nama Sekolah</label>
                                    <input type="text" name="asal_sekolah" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-brand-purple focus:border-brand-purple transition" 
                                           value="{{ old('asal_sekolah', $registration->asal_sekolah ?? '') }}" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Kelas / Jenjang</label>
                                    <select name="kelas_jenjang" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-brand-purple focus:border-brand-purple transition" required>
                                        <option value="" disabled selected>Pilih Jenjang</option>
                                        @php $jenjang = old('kelas_jenjang', $registration->kelas_jenjang ?? ''); @endphp
                                        <option value="12 SMA/SMK" {{ $jenjang == '12 SMA/SMK' ? 'selected' : '' }}>Kelas 12 SMA/SMK</option>
                                        <option value="Gap Year" {{ $jenjang == 'Gap Year' ? 'selected' : '' }}>Alumni / Gap Year</option>
                                        <option value="Lainnya" {{ $jenjang == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        {{-- SECTION 3: RENCANA STUDI (LOOPING 1-5) --}}
                        <div>
                            <div class="flex items-center gap-3 mb-4">
                                <span class="bg-yellow-100 text-yellow-600 px-2 py-1 rounded text-xs font-bold">03</span>
                                <h4 class="font-bold text-gray-700">Rencana Studi (Pilihan Kampus)</h4>
                            </div>

                            <div class="space-y-6">
                                @for ($i = 1; $i <= 5; $i++)
                                    <div class="bg-gray-50 p-5 rounded-xl border border-gray-200">
                                        <h5 class="font-bold text-gray-700 mb-3 text-sm">
                                            Pilihan {{ $i }} 
                                            @if($i <= 3) <span class="text-xs bg-red-100 text-red-600 px-2 py-0.5 rounded ml-2">Wajib</span> @else <span class="text-xs text-gray-400 font-normal ml-2">(Opsional)</span> @endif
                                        </h5>
                                        
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            {{-- Dropdown Universitas --}}
                                            <div>
                                                <label class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-1">Universitas</label>
                                                <select name="universitas_{{ $i }}" class="w-full px-3 py-2 rounded-lg border border-gray-300 text-sm focus:ring-brand-purple focus:border-brand-purple transition bg-white" {{ $i == 1 ? 'required' : '' }}>
                                                    <option value="" disabled selected>Pilih Kampus</option>
                                                    @foreach($universities as $uni)
                                                        <option value="{{ $uni->id }}" {{ old('universitas_'.$i, $registration->{'universitas_'.$i} ?? '') == $uni->id ? 'selected' : '' }}>
                                                            {{ $uni->university_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            {{-- Dropdown Jurusan --}}
                                            <div>
                                                <label class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-1">Jurusan / Prodi</label>
                                                <select name="jurusan_{{ $i }}" class="w-full px-3 py-2 rounded-lg border border-gray-300 text-sm focus:ring-brand-purple focus:border-brand-purple transition bg-white" {{ $i == 1 ? 'required' : '' }}>
                                                    <option value="" disabled selected>Pilih Jurusan</option>
                                                    @foreach($majors as $major)
                                                        <option value="{{ $major->id }}" {{ old('jurusan_'.$i, $registration->{'jurusan_'.$i} ?? '') == $major->id ? 'selected' : '' }}>
                                                            {{ $major->major_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>

                        <div class="mt-8 flex justify-end">
                            <button type="submit" class="px-8 py-3 bg-brand-purple text-white font-bold rounded-xl shadow-lg hover:bg-purple-800 hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300">
                                Simpan Perubahan
                            </button>
                        </div>

                    </form>
                </div>

                {{-- ================= TAB: SIGN OUT ================= --}}
                <div x-show="activeTab === 'signout'" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="max-w-2xl space-y-12">
                        <div>
                            <h3 class="text-base font-bold text-gray-900 mb-2">Sign out from your account</h3>
                            <div class="w-full border-b border-gray-200 mb-4"></div>
                            <p class="text-sm text-gray-600 mb-6">Log out from your account to securely end your session.</p>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="px-8 py-2.5 bg-[#1A1F2C] text-white text-xs font-bold rounded-full hover:bg-gray-800 transition shadow-sm">Sign Out</button>
                            </form>
                        </div>

                        <div x-data="{ openDeleteModal: false }">
                            <h3 class="text-base font-bold text-gray-900 mb-2">Delete Account</h3>
                            <div class="w-full border-b border-gray-200 mb-4"></div>
                            <p class="text-sm text-gray-600 mb-6">Deleting your account will permanently remove your profile and all registration data.</p>
                            <button @click="openDeleteModal = true" type="button" class="px-6 py-2.5 bg-[#E53E3E] text-white text-xs font-bold rounded-full hover:bg-red-700 transition shadow-sm">Delete Account</button>

                            {{-- MODAL DELETE --}}
                            <div x-show="openDeleteModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm" style="display: none;">
                                <div class="bg-white rounded-2xl shadow-xl w-full max-w-md p-8 text-center relative mx-4" @click.away="openDeleteModal = false">
                                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Are you sure?</h2>
                                    <p class="text-sm text-gray-500 mb-8">This action cannot be undone.</p>
                                    <div class="flex gap-4 justify-center">
                                        <button @click="openDeleteModal = false" class="px-6 py-2.5 bg-[#1A1F2C] text-white text-sm font-bold rounded-full">Cancel</button>
                                        <form action="{{ route('profile.destroy') }}" method="POST">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="px-6 py-2.5 bg-white border border-gray-900 text-gray-900 text-sm font-bold rounded-full hover:bg-gray-50">Delete Account</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>