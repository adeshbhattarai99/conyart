{{-- resources/views/performances/show.blade.php --}}
<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $performance->title }} — Constanza Bitthoff</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <x-embed-styles />
    <style>
        body { font-family: 'Poppins', sans-serif; }
        [x-cloak] { display: none !important; }

        /* FIX LONG WORDS ON MOBILE */
        .text-justify-long {
            word-break: break-word;
            overflow-wrap: break-word;
        }
    </style>
</head>
<body class="min-h-screen bg-white">

    <x-navbar />

    <main class="pt-20 lg:pt-0 lg:ml-80">
        <div class="max-w-7xl mx-auto px-6 py-8 lg:py-12">

            @php
                $desc_eng = $performance->description_eng ? strip_tags($performance->description_eng, '<strong><em><u><br>') : null;
                $desc_esp = $performance->description_esp ? strip_tags($performance->description_esp, '<strong><em><u><br>') : null;

                $youtubeUrls = collect($performance->links ?? [])->pluck('links')->filter()->map(fn($url) => trim($url));
                $images = collect($performance->images ?? [])->filter()->map(fn($path) => trim($path));

                $firstYoutube = $youtubeUrls->first();
                $remainingYoutube = $youtubeUrls->skip(1);
            @endphp

            <!-- HERO + TEXT — TIGHTER SPACING -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 lg:gap-4  items-start mb-12">
                <div class="lg:sticky lg:top-20 rounded-sm overflow-hidden bg-black">
                    @if ($firstYoutube)
                        <x-embed :url="$firstYoutube" class="w-full aspect-video lg:aspect-square" />
                    @else
                        <img src="{{ asset('storage/' . $images->first()) }}" class="w-full h-full object-cover">
                    @endif
                </div>

                <div class="space-y-8">
                    <div>
                        <h1 class="text-4xl lg:text-5xl font-light uppercase tracking-widest mb-1">
                            {{ $performance->title }}
                        </h1>
                        <div class="w-32 border-t border-gray-400"></div>
                    </div>

                    @if ($desc_eng)
                        <div class="text-lg leading-relaxed text-gray-800">
                            <p class="font-medium text-gray-600 text-sm uppercase tracking-wider mb-2">ENG</p>
                            <div class="text-justify text-justify-long max-w-none">
                                {!! nl2br($desc_eng) !!}
                            </div>
                        </div>
                    @endif

                    @if ($desc_esp)
                        <div class="text-lg leading-relaxed text-gray-800 border-t border-gray-200 pt-6">
                            <p class="font-medium text-gray-600 text-sm uppercase tracking-wider mb-2">ESP</p>
                            <div class="text-justify text-justify-long max-w-none">
                                {!! nl2br($desc_esp) !!}
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <!-- YOUTUBE VIDEOS — TIGHT & UNIFORM -->
            @if ($remainingYoutube->count() > 0)
                <div class="space-y-4">
                    @foreach ($remainingYoutube->chunk(2) as $chunk)
                        @if ($chunk->count() === 1)
                            <div class="rounded-sm overflow-hidden bg-black">
                                <x-embed :url="$chunk->first()" class="w-full aspect-video" />
                            </div>
                        @else
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                                @foreach ($chunk as $url)
                                    <div class="rounded-sm overflow-hidden bg-black">
                                        <x-embed :url="$url" class="w-full aspect-video" />
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif

            <!-- IMAGES — TIGHT & UNIFORM -->
            @if ($images->count() > 0)
                @if ($images->count() <= 6)
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-8 lg:mt-12">
                        @foreach ($images->take(6) as $img)
                            <div class="rounded-sm overflow-hidden">
                                <img src="{{ asset('storage/' . $img) }}" class="w-full h-auto object-cover" loading="lazy">
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-8 lg:mt-12 mb-8">
                        @foreach ($images->take(6) as $img)
                            <div class="rounded-sm overflow-hidden">
                                <img src="{{ asset('storage/' . $img) }}" class="w-full h-auto object-cover" loading="lazy">
                            </div>
                        @endforeach
                    </div>

                    <!-- MASONRY — TIGHT & CLEAN -->
                    <div class="columns-1 lg:columns-3 xl:columns-4 gap-4">
                        @foreach ($images->skip(6) as $img)
                            <div class="mb-4 break-inside-avoid overflow-hidden rounded-sm">
                                <img src="{{ asset('storage/' . $img) }}"
                                     alt="{{ $performance->title }}"
                                     class="w-full h-auto object-cover"
                                     loading="lazy">
                            </div>
                        @endforeach
                    </div>
                @endif
            @endif

            <!-- 5 RANDOM PERFORMANCES — TIGHTER -->
            <div class="mt-16 lg:mt-20 py-10 border-t border-b border-gray-200">
                <div class="text-center mb-8">
                    <p class="text-sm uppercase tracking-widest text-gray-500">More Performances</p>
                </div>

                <div class="max-w-4xl mx-auto">
                    <div class="flex flex-col sm:flex-row flex-wrap justify-center items-center gap-y-6 sm:gap-x-12 lg:gap-x-16">
                        @foreach (\App\Models\Performance::inRandomOrder()->take(5)->get() as $perf)
                            <a href="{{ route('performances.show', $perf) }}"
                               class="w-full sm:w-auto text-left sm:text-center text-xl lg:text-2xl uppercase tracking-widest transition-all duration-300
                                      {{ $perf->id === $performance->id ? 'text-black font-semibold' : 'text-gray-500 hover:text-black' }}
                                      sm:hover:scale-105 underline sm:no-underline">
                                {{ $perf->title }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- COPYRIGHT — TIGHT & CENTERED -->
    <footer class="mt-20 lg:mt-24 lg:ml-80 py-10">
        <div class="max-w-7xl mx-auto px-6 lg:px-0">
            <div class="text-center">
                <p class="text-xs lg:text-sm uppercase tracking-widest text-gray-500 leading-relaxed">
                    Copyright © {{ date('Y') }} Constanza Bitthoff.<br class="lg:hidden"> All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>
