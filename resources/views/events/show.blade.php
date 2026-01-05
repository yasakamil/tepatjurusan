<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <nav class="flex mb-6 text-sm text-gray-500">
                <a href="{{ route('events.index') }}" class="hover:text-indigo-600">Events</a>
                <span class="mx-2">/</span>
                <span class="text-gray-900 font-medium truncate">
                    {{ $event->title }}
                </span>
            </nav>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                <div class="lg:col-span-2 space-y-6">

                    {{-- Banner --}}
                    <div class="rounded-2xl overflow-hidden shadow-sm bg-gray-100">
                        @if ($event->banner_media)
                            <img
                                src="{{ Storage::url($event->banner_media) }}"
                                alt="{{ $event->title }}"
                                class="w-full h-auto object-cover">
                        @else
                            <div class="h-64 flex items-center justify-center text-gray-400">
                                No Banner Available
                            </div>
                        @endif
                    </div>

                    {{-- Description --}}
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <h1 class="text-3xl font-bold text-gray-900 mb-4">
                            {{ $event->title }}
                        </h1>

                        <div class="prose max-w-none text-gray-700">
                            {!! $event->description !!}
                        </div>
                    </div>

                </div>

                <div class="lg:col-span-1">
                    <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 sticky top-6">

                        <h3 class="text-lg font-semibold text-gray-900 mb-4">
                            Detail Event
                        </h3>

                        {{-- Waktu --}}
                        <div class="flex items-start mb-4">
                            <svg class="w-5 h-5 text-indigo-500 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <div>
                                <p class="text-sm font-medium text-gray-900">Waktu Pelaksanaan</p>
                                <p class="text-sm text-gray-600">
                                    {{ \Carbon\Carbon::parse($event->start_datetime)->format('d M Y, H:i') }}
                                    <br>s/d<br>
                                    {{ \Carbon\Carbon::parse($event->end_datetime)->format('d M Y, H:i') }} WIB
                                </p>
                            </div>
                        </div>

                        {{-- Lokasi --}}
                        <div class="flex items-start mb-6">
                            <svg class="w-5 h-5 text-indigo-500 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <div>
                                <p class="text-sm font-medium text-gray-900">
                                    Lokasi ({{ ucfirst($event->location_type) }})
                                </p>
                                <p class="text-sm text-gray-600">
                                    {{ $event->location_detail }}
                                </p>
                            </div>
                        </div>

                        <hr class="border-gray-100 my-4">

                        {{-- Harga --}}
                        <div class="mb-4">
                            <p class="text-sm text-gray-500 mb-1">Harga Tiket</p>

                            @if ($event->price == 0)
                                <div class="text-2xl font-bold text-green-600">GRATIS</div>
                            @else
                                @if ($event->discount_price && now() < $event->discount_end_time)
                                    <div class="flex items-center gap-2">
                                        <span class="text-gray-400 line-through text-sm">
                                            Rp {{ number_format($event->price, 0, ',', '.') }}
                                        </span>
                                        <span class="text-xs bg-red-100 text-red-600 px-2 py-0.5 rounded">
                                            Hemat {{ number_format((($event->price - $event->discount_price) / $event->price) * 100) }}%
                                        </span>
                                    </div>
                                    <div class="text-2xl font-bold text-gray-900">
                                        Rp {{ number_format($event->discount_price, 0, ',', '.') }}
                                    </div>
                                @else
                                    <div class="text-2xl font-bold text-gray-900">
                                        Rp {{ number_format($event->price, 0, ',', '.') }}
                                    </div>
                                @endif
                            @endif
                        </div>

                        {{-- Kuota --}}
                        <div class="text-xs text-gray-500 mb-4">
                            Sisa kuota:
                            <span class="font-semibold text-gray-900">
                                {{ $event->quota }}
                            </span> orang
                        </div>

                        @if($event->status == 'published' && $event->quota > 0 && now() < $event->end_datetime)
                            <button
                                id="btn-buy"
                                data-event-id="{{ $event->id }}"
                                class="w-full bg-indigo-600 text-white py-3 px-4 rounded-xl font-bold
                                       hover:bg-indigo-700 transition shadow-lg shadow-indigo-200">
                                Daftar Sekarang
                            </button>
                        @else
                             <button disabled class="w-full bg-gray-300 text-gray-500 py-3 px-4 rounded-xl font-bold cursor-not-allowed">
                                @if($event->quota <= 0)
                                    Kuota Penuh
                                @elseif(now() >= $event->end_datetime)
                                    Event Selesai
                                @else
                                    Pendaftaran Tutup
                                @endif
                                Pendaftaran Tutup
                            </button>
                        @endif

                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

{{-- ======================
    MIDTRANS SNAP
======================= --}}
<script
    src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="{{ config('midtrans.client_key') }}">
</script>

{{-- ======================
    PAYMENT SCRIPT
======================= --}}
<script>
document.getElementById('btn-buy')?.addEventListener('click', function () {

    const eventId = this.dataset.eventId;

    fetch(`/events/${eventId}/buy`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Accept': 'application/json'
        }
    })
    .then(async response => {
        const data = await response.json();

        if (!response.ok) {
            throw new Error(data.message || 'Gagal memulai pembayaran');
        }

        return data;
    })
    .then(data => {

        if (!data.snap_token) {
            alert('Snap token tidak ditemukan');
            return;
        }

        window.snap.pay(data.snap_token, {
            onSuccess: function (result) {
                console.log('SUCCESS', result);
                window.location.href = '/payment/success';
            },
            onPending: function (result) {
                console.log('PENDING', result);
            },
            onError: function (result) {
                console.error('ERROR', result);
                alert('Pembayaran gagal');
            },
            onClose: function () {
                alert('Pembayaran dibatalkan');
            }
        });

    })
    .catch(error => {
        console.error(error);
        alert(error.message);
    });
});
</script>
