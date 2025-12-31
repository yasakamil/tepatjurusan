<x-app-layout>
    <style>
        .article-content h2 { font-size: 1.5rem; font-weight: 800; color: #111827; margin-top: 2rem; margin-bottom: 1rem; }
        .article-content h3 { font-size: 1.25rem; font-weight: 700; color: #374151; margin-top: 1.5rem; margin-bottom: 0.75rem; }
        .article-content p { margin-bottom: 1.25rem; line-height: 1.8; color: #4B5563; }
        .article-content ul { list-style-type: disc; padding-left: 1.5rem; margin-bottom: 1.25rem; color: #4B5563; }
        .article-content ol { list-style-type: decimal; padding-left: 1.5rem; margin-bottom: 1.25rem; color: #4B5563; }
        .article-content blockquote { border-left: 4px solid #14b8a6; padding-left: 1rem; font-style: italic; color: #52525b; margin: 1.5rem 0; }
        .article-content img { border-radius: 0.75rem; margin: 2rem 0; width: 100%; }
        .article-content a { color: #0d9488; text-decoration: underline; font-weight: 500; }
    </style>

    <div class="bg-white min-h-screen">
        
        <div class="relative w-full h-[400px] md:h-[500px]">
            <div class="absolute inset-0 bg-gray-900/40 z-10"></div> <img src="{{ $article->thumbnail ? asset('storage/' . $article->thumbnail) : 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?q=80&w=1600&auto=format&fit=crop' }}" 
                 class="w-full h-full object-cover">
            
            <div class="absolute inset-0 z-20 flex items-center justify-center">
                <div class="container mx-auto px-6 text-center">
                    <span class="inline-block px-3 py-1 bg-brand-teal text-white text-xs font-bold uppercase tracking-wider rounded mb-4">
                        Article
                    </span>
                    <h1 class="text-3xl md:text-5xl lg:text-6xl font-extrabold text-white leading-tight mb-6 max-w-4xl mx-auto drop-shadow-lg">
                        {{ $article->title }}
                    </h1>
                    
                    <div class="flex items-center justify-center gap-4 text-white/90 text-sm font-medium">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            {{ $article->published_at->format('d F, Y') }}
                        </div>
                        <span class="w-1 h-1 bg-white/50 rounded-full"></span>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            {{ $article->read_time }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-3xl mx-auto px-6 py-16">
            
            <nav class="flex mb-8 text-sm font-medium text-gray-500">
                <a href="/" class="hover:text-brand-purple">Home</a>
                <span class="mx-2">/</span>
                <a href="{{ route('articles.index') }}" class="hover:text-brand-purple">Articles</a>
                <span class="mx-2">/</span>
                <span class="text-gray-900 truncate max-w-[200px]">{{ $article->title }}</span>
            </nav>

            <div class="article-content prose prose-lg prose-indigo max-w-none text-gray-700">
                {!! $article->content !!}
            </div>

            <div class="border-t border-gray-100 mt-12 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <p class="text-gray-500 font-medium">Share this article:</p>
                    <div class="flex gap-3">
                        <button class="w-10 h-10 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center hover:bg-blue-600 hover:text-white transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </button>
                        <button class="w-10 h-10 rounded-full bg-blue-50 text-blue-800 flex items-center justify-center hover:bg-blue-800 hover:text-white transition">
                             <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        @if($relatedArticles->count() > 0)
        <div class="bg-gray-50 py-16 border-t border-gray-200">
            <div class="max-w-5xl mx-auto px-6">
                <h3 class="text-2xl font-bold text-gray-900 mb-8">Baca Artikel Lainnya</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($relatedArticles as $rel)
                        <a href="{{ route('articles.show', $rel->slug) }}" class="group block bg-white rounded-xl shadow-sm hover:shadow-md transition overflow-hidden">
                            <div class="h-40 overflow-hidden">
                                <img src="{{ $rel->thumbnail ? asset('storage/' . $rel->thumbnail) : 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?q=80&w=400&auto=format&fit=crop' }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            </div>
                            <div class="p-4">
                                <h4 class="font-bold text-gray-900 line-clamp-2 group-hover:text-brand-purple transition">{{ $rel->title }}</h4>
                                <p class="text-xs text-gray-500 mt-2">{{ $rel->published_at->format('d M Y') }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

    </div>
</x-app-layout>