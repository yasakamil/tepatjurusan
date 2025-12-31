<x-app-layout>
    <section class="w-full py-16 md:py-24 bg-[#F9F9F9] font-sans">
        <div class="w-full max-w-[1318px] mx-auto px-6 md:px-8 lg:px-12">
            
            <div class="text-center mb-16 max-w-2xl mx-auto">
                <span class="text-brand-purple text-xs font-bold uppercase tracking-widest border-b border-brand-purple pb-1">
                    Insights & News
                </span>
                <h2 class="text-3xl md:text-5xl font-extrabold text-gray-900 mt-4 mb-6">
                    Artikel Terbaru
                </h2>
                <p class="text-gray-500 text-lg">
                    Dapatkan tips, info jurusan, dan panduan karir terkini dari tim Tepat Jurusan.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($articles as $article)
                    <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group flex flex-col h-full border border-gray-100">
                        
                        <a href="{{ route('articles.show', $article->slug) }}" class="relative h-56 overflow-hidden block">
                            <img src="{{ $article->thumbnail ? asset('storage/' . $article->thumbnail) : 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?q=80&w=800&auto=format&fit=crop' }}" 
                                 alt="{{ $article->title }}" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            
                            <div class="absolute top-4 left-4 bg-white/95 backdrop-blur-sm px-3 py-1 rounded-md text-xs font-bold text-gray-800 shadow-sm">
                                {{ $article->published_at->format('d M Y') }}
                            </div>
                        </a>

                        <div class="p-6 flex flex-col flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2 group-hover:text-brand-purple transition-colors">
                                <a href="{{ route('articles.show', $article->slug) }}">
                                    {{ $article->title }}
                                </a>
                            </h3>

                            <p class="text-gray-500 text-sm leading-relaxed mb-6 line-clamp-3 flex-1">
                                {{ Str::limit(strip_tags($article->content), 120) }}
                            </p>

                            <div class="border-t border-gray-100 pt-4 flex items-center justify-between text-xs font-medium text-gray-400">
                                <div class="flex items-center gap-1.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    {{ $article->read_time }} </div>
                                
                                <a href="{{ route('articles.show', $article->slug) }}" class="text-brand-teal hover:text-teal-700 font-bold flex items-center gap-1">
                                    Read More <span class="group-hover:translate-x-1 transition-transform">&rarr;</span>
                                </a>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full text-center py-20">
                        <div class="inline-block p-4 rounded-full bg-gray-100 text-gray-400 mb-4">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Belum ada artikel.</h3>
                        <p class="text-gray-500">Stay tuned untuk update selanjutnya!</p>
                    </div>
                @endforelse
            </div>

            <div class="mt-12">
                {{ $articles->links() }}
            </div>
        </div>
    </section>
</x-app-layout>