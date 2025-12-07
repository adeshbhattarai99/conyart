<div x-data="{ open: false }">
    <button @click="open = !open"
            class="w-full text-left flex items-center justify-between uppercase text-gray-400 hover:text-black transition">
        Performances
        <svg class="w-5 h-5 transition-transform duration-300" :class="{'rotate-180': open}"
             fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
    </button>

    <div x-show="open" x-transition class="overflow-hidden mt-2">
        <div class="ml-6 pl-6 border-l-2 border-gray-300 space-y-3">
            @forelse(\App\Models\Performance::orderBy('title')->get() as $perf)
                <a href="{{ route('performances.show', $perf) }}"
                   class="block uppercase text-sm text-gray-400 hover:text-black transition">
                    {{ $perf->title }}
                </a>
            @empty
                <p class="text-gray-300 text-sm">No performances yet</p>
            @endforelse
        </div>
    </div>
</div>
