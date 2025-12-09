{{-- resources/views/components/performances-dropdown.blade.php --}}
<div x-data="{ open: false }" x-cloak>
    <button
        @click="open = !open"
        class="w-full text-left flex items-center justify-between uppercase text-gray-400 hover:text-black transition py-2">
        Performances
        <svg class="w-5 h-5 transition-transform duration-300"
             :class="open ? 'rotate-180' : ''"
             fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
    </button>

    <div
        x-show="open"
        x-collapse
        x-transition
        @click.away="open = false"
        class="mt-4">
        <div class="ml-8 pl-6 border-l-2 border-gray-300 space-y-4">
            @forelse(\App\Models\Performance::orderBy('title')->get() as $perf)
                <a href="{{ route('performances.show', $perf) }}"
                   class="block uppercase text-sm text-gray-500 hover:text-black transition"
                   @click="open = false">
                    {{ $perf->title }}
                </a>
            @empty
                <p class="text-gray-400 text-sm italic">No performances yet</p>
            @endforelse
        </div>
    </div>
</div>
