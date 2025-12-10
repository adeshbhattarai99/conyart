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
    </style>
</head>
<body class="min-h-screen bg-white">

    <x-navbar />

    <main class="pt-20 lg:pt-0 lg:ml-80">
        <div class="max-w-7xl mx-auto px-6 py-12 lg:py-20">

            @php
                // Clean text
                $desc_eng = $performance->description_eng ? strip_tags($performance->description_eng, '<strong><em><u><br>') : null;
                $desc_esp = $performance->description_esp ? strip_tags($performance->description_esp, '<strong><em><u><br>') : null;

                // Extract YouTube URLs from repeater
                $youtubeUrls = collect($performance->links ?? [])
                    ->pluck('links')
                    ->filter()
                    ->map(fn($url) => trim($url));

                $images = collect($performance->images ?? [])
                    ->filter()
                    ->map(fn($path) => trim($path));

                // First YouTube for hero
                $firstYoutube = $youtubeUrls->first();

                // Remaining YouTube links (for grid only)
                $remainingYoutube = $youtubeUrls->skip(1);

                // Images only for masonry
                $masonryImages = $images;

                // Total items in grid (remaining YouTube + images)
                $gridItems = $remainingYoutube->count() + $images->count();
            @endphp

            <!-- HERO + TEXT — GALPÓN STYLE -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-start mb-16">
                <div class="overflow-hidden rounded-sm shadow-xl bg-black">
                    @if($firstYoutube)
                        <x-embed :url="$firstYoutube" class="w-full aspect-video lg:aspect-square" />
                    @else
                        <img src="{{ asset('storage/' . $images->first()) }}"
                             alt="{{ $performance->title }}"
                             class="w-full h-full object-cover">
                    @endif
                </div>

                <div class="space-y-8">
                    <div>
                        <h1 class="text-4xl font-light uppercase tracking-widest mb-1">
                            {{ $performance->title }}
                        </h1>
                        <div class="w-32 border-t border-gray-400"></div>
                    </div>

                    @if($desc_eng)
                        <div class="text-lg leading-relaxed text-gray-800">
                            <p class="font-medium text-gray-600 text-sm uppercase tracking-wider mb-2">ENG</p>
                            <p class="text-justify">{!! nl2br($desc_eng) !!}</p>
                        </div>
                    @endif

                    @if($desc_esp)
                        <div class="text-lg leading-relaxed text-gray-800 border-t border-gray-200 pt-6">
                            <p class="font-medium text-gray-600 text-sm uppercase tracking-wider mb-2">ESP</p>
                            <p class="text-justify">{!! nl2br($desc_esp) !!}</p>
                        </div>
                    @endif
                </div>
            </div>

            <!-- GRID: YouTube (horizontal) + Images — ≤8 total -->
            @if($gridItems > 0 && $gridItems <= 8)
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                    <!-- Remaining YouTube links first -->
                    @foreach($remainingYoutube as $url)
                        <div class="overflow-hidden rounded-sm shadow-xl bg-black">
                            <x-embed :url="$url" class="w-full aspect-video" />
                        </div>
                    @endforeach

                    <!-- Then images -->
                    @foreach($images->take(8 - $remainingYoutube->count()) as $img)
                        <div class="overflow-hidden rounded-sm shadow-xl">
                            <img src="{{ asset('storage/' . $img) }}"
                                 alt="{{ $performance->title }}"
                                 class="w-full h-full object-cover">
                        </div>
                    @endforeach
                </div>

                <!-- If still images left after filling 8 slots → add below -->
                @if($images->count() > (8 - $remainingYoutube->count()))
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mt-4">
                        @foreach($images->skip(8 - $remainingYoutube->count()) as $img)
                            <div class="overflow-hidden rounded-sm shadow-xl">
                                <img src="{{ asset('storage/' . $img) }}"
                                     alt="{{ $performance->title }}"
                                     class="w-full h-full object-cover">
                            </div>
                        @endforeach
                    </div>
                @endif
            @endif

            <!-- MASONRY: ONLY IMAGES (when >8 total or only images) -->
            @if($masonryImages->count() > max(0, 8 - $remainingYoutube->count()))
                <div class="columns-1 sm:columns-2 lg:columns-3 xl:columns-4 gap-8 mt-20">
                    @foreach($masonryImages->skip(max(0, 8 - $remainingYoutube->count())) as $img)
                        <div class="break-inside-avoid mb-8 group overflow-hidden rounded-sm shadow-2xl">
                            <img src="{{ asset('storage/' . $img) }}"
                                 alt="{{ $performance->title }}"
                                 class="w-full h-auto object-cover transition-transform duration-1000 group-hover:scale-105"
                                 loading="lazy">
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    </main>

    <x-copyright />
</body>
</html>
