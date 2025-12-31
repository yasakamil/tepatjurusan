<x-app-layout>
    
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <section class="w-full py-16 md:py-24 bg-[#F9F9F9] font-sans" x-data="{ showPast: false }">
        <div class="w-full max-w-[1318px] mx-auto px-6 md:px-8 lg:px-12">
            
            <div class="mb-10">
                <span class="text-brand-purple text-xs font-bold uppercase tracking-widest border-b border-brand-purple pb-1">
                    Events
                </span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-3">
                    Upcoming Events
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 mb-16">
                @forelse($upcomingEvents as $event)
                    @php
                        $hasDiscount = $event->discount_price && 
                                    $event->discount_end_time && 
                                    \Carbon\Carbon::parse($event->discount_end_time)->isFuture();
                    @endphp

                    <a href="{{ route('events.show', $event->slug) }}" class="bg-white block rounded-xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group border border-gray-100 flex flex-col h-full relative z-10">
                        
                        <div class="relative h-48 overflow-hidden flex-shrink-0">
                            <img src="{{ $event->banner_media ? asset('storage/' . $event->banner_media) : 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=800&auto=format&fit=crop' }}" 
                                alt="{{ $event->title }}" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            
                            @if($hasDiscount)
                                <div class="absolute top-3 left-3 bg-rose-600/95 backdrop-blur-sm text-white text-[11px] font-bold px-2.5 py-1.5 rounded flex items-center gap-1.5 shadow-md border border-rose-500/20">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3.5 h-3.5 animate-pulse">
                                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z" clip-rule="evenodd" />
                                    </svg>
                                    <span data-countdown="{{ $event->discount_end_time }}" class="font-mono tracking-wide">Loading...</span>
                                </div>
                            @else
                                <div class="absolute top-3 left-3 bg-brand-purple/90 backdrop-blur-sm text-white text-[10px] font-bold px-2 py-1 rounded flex items-center gap-1 shadow-sm uppercase">
                                    {{ $event->location_type ?? 'Event' }}
                                </div>
                            @endif
                        </div>

                        <div class="p-5 flex flex-col flex-1">
                            <h3 class="text-lg font-bold text-gray-900 mb-4 line-clamp-2 leading-tight group-hover:text-brand-purple transition-colors">
                                {{ $event->title }}
                            </h3>
                            
                            <div class="flex flex-wrap gap-2 mb-6">
                                @php
                                    $start = \Carbon\Carbon::parse($event->start_datetime);
                                    $end = \Carbon\Carbon::parse($event->end_datetime);
                                    $duration = $start->diffInHours($end) ?: 1;
                                @endphp
                                <span class="px-2 py-1 border border-gray-200 rounded text-[10px] font-bold text-gray-500 flex items-center gap-1.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 text-gray-400"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z" clip-rule="evenodd" /></svg>
                                    {{ $duration }} Hours
                                </span>
                                <span class="px-2 py-1 border border-gray-200 rounded text-[10px] font-bold text-gray-500 flex items-center gap-1.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 text-gray-400"><path d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-4.42 6.753 6.753 0 01-4.825 3.316z" /></svg>
                                    {{ $event->quota }} Seats
                                </span>
                            </div>

                            <div class="mt-auto flex items-end justify-between border-t border-gray-100 pt-4">
                                <span class="text-xs font-bold text-gray-900">
                                    {{ \Carbon\Carbon::parse($event->start_datetime)->format('d F, Y') }}
                                </span>
                                
                                <div class="text-right flex flex-col items-end">
                                    @if($hasDiscount)
                                        <span class="text-[10px] font-bold text-gray-400 line-through mb-0.5">
                                            IDR {{ number_format($event->price, 0, ',', '.') }}
                                        </span>
                                        <span class="text-sm font-extrabold text-rose-500">
                                            IDR {{ number_format($event->discount_price, 0, ',', '.') }}
                                        </span>
                                    @else
                                        @if($event->price == 0)
                                            <span class="text-sm font-extrabold text-brand-teal">FREE</span>
                                        @else
                                            <span class="text-sm font-extrabold text-brand-teal">
                                                IDR {{ number_format($event->price, 0, ',', '.') }}
                                            </span>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="col-span-full py-10 text-center">
                        <p class="text-gray-500">Belum ada event yang akan datang.</p>
                    </div>
                @endforelse
            </div>


            <div class="relative py-8 flex justify-center items-center mb-8">
                <div class="absolute inset-0 flex items-center" aria-hidden="true">
                    <div class="w-full border-t border-gray-200"></div>
                </div>
                <div class="relative z-20 bg-[#F9F9F9] px-4">
                    <button 
                        type="button"
                        @click="showPast = !showPast" 
                        class="group flex items-center gap-2 px-6 py-2.5 bg-white border border-gray-200 text-gray-600 text-sm font-bold rounded-full shadow-sm hover:border-brand-purple hover:text-brand-purple transition-all duration-300 focus:outline-none cursor-pointer"
                    >
                        <span x-text="showPast ? 'Hide Past Events' : 'Show Past Events'"></span>
                        <svg class="w-4 h-4 transition-transform duration-300" :class="{ 'rotate-180': showPast }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                </div>
            </div>


            <div 
                x-show="showPast" 
                x-transition
                style="display: none;"
            >
                <div class="mb-6">
                    <h3 class="text-xl font-bold text-gray-400 uppercase tracking-wide">Riwayat Event</h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 opacity-75">
                    @foreach($pastEvents as $event)
                        
                        <a href="{{ route('events.show', $event->slug) }}" class="bg-white block rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 group border border-gray-100 flex flex-col h-full grayscale hover:grayscale-0">
                            
                            <div class="relative h-48 overflow-hidden flex-shrink-0">
                                <img src="{{ $event->banner_media ? asset('storage/' . $event->banner_media) : 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=800&auto=format&fit=crop' }}" 
                                    alt="{{ $event->title }}" 
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                
                                <div class="absolute inset-0 bg-gray-900/10 group-hover:bg-transparent transition-all"></div>
                                <div class="absolute top-3 left-3 bg-gray-600 text-white text-[10px] font-bold px-2 py-1 rounded shadow-sm uppercase">
                                    Selesai
                                </div>
                            </div>

                            <div class="p-5 flex flex-col flex-1">
                                <h3 class="text-lg font-bold text-gray-900 mb-4 line-clamp-2 leading-tight">
                                    {{ $event->title }}
                                </h3>
                                
                                <div class="flex flex-wrap gap-2 mb-6">
                                    @php
                                        $start = \Carbon\Carbon::parse($event->start_datetime);
                                        $end = \Carbon\Carbon::parse($event->end_datetime);
                                        $duration = $start->diffInHours($end) ?: 1;
                                    @endphp
                                    <span class="px-2 py-1 border border-gray-200 rounded text-[10px] font-bold text-gray-500 flex items-center gap-1.5">
                                        {{ $duration }} Hours
                                    </span>
                                </div>

                                <div class="mt-auto flex items-end justify-between border-t border-gray-100 pt-4">
                                    <span class="text-xs font-bold text-gray-900">
                                        {{ \Carbon\Carbon::parse($event->start_datetime)->format('d F, Y') }}
                                    </span>
                                    
                                    <div class="text-right">
                                        <span class="text-xs font-bold text-gray-400">Completed</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
</x-app-layout>